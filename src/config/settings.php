<?php

/**
 * Plugin Settings Configuration
 *
 * Registers the settings section and fields provided by the
 * Discord Visitor Logger plugin.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  Discord Visitor Logger
 * @category    Configuration
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

$config['settings']['discord'] = [
	'title'  => 'settings_discord',
	'label'  => 'discord',
	'icon'   => 'fab:discord',
	'fields' => [

		'discord_visitor_logger_webhook_url' => [
			'type'    => 'password',
			'default' => '',
			'order'   => PHP_INT_MAX - 3,
		],

		'discord_visitor_logger_auto_ban' => [
			'type' => 'dropdown',
			'default' => 'false',
			'options' => [
				'true' => 'lang:yes',
				'false' => 'lang:no',
			],
			'order'   => PHP_INT_MAX - 2,
		],

		'discord_visitor_logger_fingerprint_threshold' => [
			'type'    => 'number',
			'default' => 12,
			'order'   => PHP_INT_MAX - 1,
		],

		'discord_visitor_logger_ban_duration' => [
			'type'    => 'number',
			'default' => 1,
			'order'   => PHP_INT_MAX,
		],

	],
];
