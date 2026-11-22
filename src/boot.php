<?php

/**
 * Discord Visitor Logger
 *
 * Tracks unique visitor IP addresses and reports new visitors to a
 * configured Discord webhook. Includes approximate geolocation,
 * request headers, browser fingerprinting, and basic detection of
 * suspicious distributed traffic with automatic temporary IP bans.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  Discord Visitor Logger
 * @category    Bootstrap
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// Register the visitor logger.
once_action('pre_controller', static function () {

	// Skip dashboard and non-UI requests.
	if (CI_DASHBOARD || is_non_ui_request()) {
		return;
	}

	// Skip internal routes.
	$current_uri = trim((string) current_uri(true), '/');

	if (preg_match('#^(?:switch|media)(?:/.*)?$#i', $current_uri)) {
		return;
	}

	// Ignore empty or known automated user agents.
	$ua = trim($_SERVER['HTTP_USER_AGENT'] ?? '');

	if ($ua === '' || preg_match('/bot|Discord|robot|curl|spider|crawler/i', $ua)) {
		return;
	}

	$webhook = decrypt_data(config('discord_visitor_logger_webhook_url'));

	if (!is_string($webhook) || $webhook === '') {
		return;
	}

	// Retrieve the visitor IP address.
	$ip = ip_address();

	if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
		return;
	}

	// Load previously logged visitors.
	$store = new CI_Storage([
		'prefix'    => config('cookie_prefix'),
		'namespace' => 'cache:visits',
		'file'      => APPPATH.'storage/cache/visits.json',
	]);

	$known = $store->load();

	if (!is_array($known)) {
		$known = [];
	}

	// Only notify once per IP address.
	if (isset($known[$ip])) {
		return;
	}

	// Collect selected request headers.
	$headers = [
		'Accept'             => $_SERVER['HTTP_ACCEPT'] ?? '',
		'Accept-Language'    => $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '',
		'Accept-Encoding'    => $_SERVER['HTTP_ACCEPT_ENCODING'] ?? '',
		'Referer'            => $_SERVER['HTTP_REFERER'] ?? '',
		'Sec-Fetch-Site'     => $_SERVER['HTTP_SEC_FETCH_SITE'] ?? '',
		'Sec-Fetch-Mode'     => $_SERVER['HTTP_SEC_FETCH_MODE'] ?? '',
		'Sec-Fetch-Dest'     => $_SERVER['HTTP_SEC_FETCH_DEST'] ?? '',
		'Sec-CH-UA'          => $_SERVER['HTTP_SEC_CH_UA'] ?? '',
		'Sec-CH-UA-Platform' => $_SERVER['HTTP_SEC_CH_UA_PLATFORM'] ?? '',
		'Sec-CH-UA-Mobile'   => $_SERVER['HTTP_SEC_CH_UA_MOBILE'] ?? '',
		'Connection'         => $_SERVER['HTTP_CONNECTION'] ?? '',
	];

	// Remove headers that were not provided.
	$headers = array_filter(
		$headers,
		static fn($value) => is_string($value) && trim($value) !== ''
	);

	// Build a stable browser fingerprint from selected headers.
	$fingerprint_data = [
		'ua'       => $ua,
		'language' => trim($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? ''),
		'brands'   => trim($_SERVER['HTTP_SEC_CH_UA'] ?? ''),
		'platform' => trim($_SERVER['HTTP_SEC_CH_UA_PLATFORM'] ?? ''),
		'mobile'   => trim($_SERVER['HTTP_SEC_CH_UA_MOBILE'] ?? ''),
	];

	$fingerprint = hash('sha256', implode("\n", $fingerprint_data));
	$fingerprint_id = substr($fingerprint, 0, 12);

	// Detect recent IPs sharing the same browser fingerprint.
	$fingerprint_window = MINUTE_IN_SECONDS * 10;
	$fingerprint_threshold = max(2, (int) config('discord_visitor_logger_fingerprint_threshold', null, 12));
	$ban_duration = (int) config('discord_visitor_logger_ban_duration', null, 1) * HOUR_IN_SECONDS;
	$auto_ban = (bool) config('discord_visitor_logger_auto_ban', null, false);
	$fingerprint_ips = [];

	$cutoff = CI_REQUEST_TIME - $fingerprint_window;

	foreach ($known as $known_ip => $visit) {
		if (!is_array($visit) || ($visit['fingerprint'] ?? '') !== $fingerprint) {
			continue;
		}

		$visited_at = (int) ($visit['visited_at'] ?? 0);

		if ($visited_at >= $cutoff && $visited_at <= CI_REQUEST_TIME) {
			$fingerprint_ips[$known_ip] = $visited_at;
		}
	}

	// Include the current visitor.
	$fingerprint_ips[$ip] = CI_REQUEST_TIME;

	$fingerprint_count = count($fingerprint_ips);
	$is_suspicious = $fingerprint_count >= $fingerprint_threshold;
	$ban_applied = false;

	// Ban the newly arriving IP if the threshold is reached.
	if ($is_suspicious && $auto_ban) {
		$ban_applied = firewall()->ban(
			$ip,
			'Suspicious automated traffic (fingerprint: '.$fingerprint_id.')',
			$ban_duration
		);
	}

	// Format request headers for Discord.
	$header_lines = [];

	foreach ($headers as $name => $value) {
		// Prevent header values from breaking Discord code formatting.
		$value = str_replace('`', "'", trim($value));

		$header_lines[] = $name . ': ' . $value;
	}

	$header_text = $header_lines
		? implode("\n", $header_lines)
		: 'No request headers available.';

	// Keep Discord field values within their limits.
	$truncate = static function ($value, $limit = 1024) {
		$value = (string) $value;

		if (strlen($value) <= $limit) {
			return $value;
		}

		if (function_exists('mb_strcut')) {
			return mb_strcut($value, 0, $limit - 3, 'UTF-8') . '...';
		}

		return substr($value, 0, $limit - 3) . '...';
	};

	$header_text = $truncate($header_text, 1000);

	// Retrieve approximate geolocation.
	$details = null;
	$context = stream_context_create([
		'http' => [
			'timeout'       => 3,
			'ignore_errors' => true,
		],
	]);

	// The free IP-API endpoint does not support HTTPS.
	$response = @file_get_contents(
		'http://ip-api.com/json/'.rawurlencode($ip).'?fields=status,country,countryCode,regionName,city,zip,lat,lon',
		false,
		$context
	);

	if ($response !== false) {
		$details = json_decode($response);
	}

	$country = ($details->status ?? null) === 'success'
		? ($details->country ?? 'Unknown')
		: 'Unknown';

	$country_code = $details->countryCode ?? '';
	$region       = $details->regionName ?? 'Unknown';
	$city         = $details->city ?? 'Unknown';
	$zip          = $details->zip ?? 'N/A';
	$lat          = $details->lat ?? null;
	$lon          = $details->lon ?? null;

	$location = "{$region} | {$city} | {$zip}";

	if (is_numeric($lat) && is_numeric($lon)) {
		$map_url = 'https://www.google.com/maps/search/?api=1&query='.rawurlencode("{$lat},{$lon}");

		$location = "[{$location}]({$map_url})";
	}

	$fields = [
		[
			'name'   => 'IP Address',
			'value'  => $ip,
			'inline' => true,
		],
		[
			'name'   => 'Country',
			'value'  => $country_code !== '' ? "{$country} ({$country_code})" : $country,
			'inline' => true,
		],
		[
			'name'   => 'Location',
			'value'  => $truncate($location),
			'inline' => true,
		],
		[
			'name'   => 'Browser Fingerprint',
			'value'  => '`' . $fingerprint_id . '`',
			'inline' => true,
		],
		[
			'name'   => 'Matching IPs (10 min)',
			'value'  => (string) $fingerprint_count,
			'inline' => true,
		],
		[
			'name'   => 'Request Method',
			'value'  => $truncate(strtoupper(CI_REQUEST_TYPE)),
			'inline' => true,
		],
		[
			'name'  => 'Requested URL',
			'value' => site_url($current_uri),
		],
		[
			'name'  => 'User Agent',
			'value' => $ua,
		],
		[
			'name'   => 'Request Headers',
			'value'  => "```text\n" . $header_text . "\n```",
			'inline' => false,
		],
	];

	if ($is_suspicious) {
		$fields[] = [
			'name'   => 'Firewall Action',
			'value'  => !$auto_ban
				? 'ℹ️ Suspicious traffic detected. Automatic banning is disabled.'
				: ($ban_applied
					? '🚫 IP temporarily banned (**'.($ban_duration > 0 ? round($ban_duration / HOUR_IN_SECONDS).' hours' : 'permanently').'**).'
					: '⚠️ Suspicious traffic detected, but the ban **could not be persisted**.'),
			'inline' => false,
		];
	}

	$data = [
		'username'   => 'Visitor Logger',
		'avatar_url' => 'https://raw.githubusercontent.com/ciskeleton/.github/refs/heads/main/assets/images/logo.png',
		'embeds'     => [
			[
				'title'  => "New Visitor — {$country}",
				'color'  => 15105570,
				'fields' => $fields,
				'footer' => [
					'text'     => date('d/m/Y @ H:i:s', CI_REQUEST_TIME),
					'icon_url' => sprintf(
						'https://raw.githubusercontent.com/stevenrskelton/flag-icon/master/png/75/country-4x3/%s.png',
						strtolower($country_code)
					),
				],
			],
		],
	];

	$client = curl([
		'timeout'    => 5,
		'verify_ssl' => true,
	])
		->clear_headers()
		->post($webhook, $data, true);

	if ($client->is_error() || $client->is_client_error()) {
		return;
	}

	$known[$ip] = [
		'country'      => $country,
		'country_code' => $country_code,
		'region'       => $region,
		'city'         => $city,
		'zip'          => $zip,
		'lat'          => $lat,
		'lon'          => $lon,
		'fingerprint'  => $fingerprint,
		'visited_at'   => CI_REQUEST_TIME,
	];

	$store->save($known);
});
