
<?php

/**
 * Discord Visitor Logger
 *
 * Tracks unique visitor IP addresses and sends notifications to a
 * configured Discord webhook, including available geolocation and
 * request information.
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

once_action('pre_controller', static function () {

	if (CI_DASHBOARD) {
		return;
	}

	$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

	if ($ua === '' || preg_match('/bot|Discord|robot|curl|spider|crawler/i', $ua)) {
		return;
	}

	$webhook = decrypt_data(config('discord_visitor_logger_webhook_url'));

	if (empty($webhook)) {
		return;
	}

	$ip = ip_address();

	if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
		return;
	}

	$store = new CI_Storage([
		'prefix'    => config('cookie_prefix'),
		'namespace' => 'cache:visits',
		'file'      => APPPATH.'storage/cache/visits.json',
	]);

	$known = $store->load();

	if (isset($known[$ip])) {
		return;
	}

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

	$country = $details->status === 'success'
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
			'value'  => $location,
			'inline' => true,
		],
		[
			'name'  => 'Requested URL',
			'value' => current_url(),
		],
		[
			'name'  => 'User Agent',
			'value' => $ua,
		],
	];

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
					'icon_url' => 'https://raw.githubusercontent.com/stevenrskelton/flag-icon/master/png/75/country-4x3/'.strtolower($country_code).'.png',
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
	];

	return $store->save($known);
});
