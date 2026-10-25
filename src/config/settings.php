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
			'order'   => PHP_INT_MAX,
		],

	],
];
