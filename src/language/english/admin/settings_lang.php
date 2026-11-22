<?php

/**
 * Plugin Admin Settings Language Lines
 *
 * Contains language lines for the settings section and fields
 * provided by the Discord Visitor Logger plugin.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  Discord Visitor Logger
 * @category    Language
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

$lang['settings_discord'] = 'Discord Settings';
$lang['discord_visitor_logger_auto_ban'] = 'Automatically Ban Suspicious IPs';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Automatically apply a temporary IP ban when suspicious traffic is detected through browser fingerprint matching.';
$lang['discord_visitor_logger_ban_duration'] = 'Temporary Ban Duration';
$lang['discord_visitor_logger_ban_duration_tip'] = 'The number of hours a suspicious IP address will remain banned. Set to 0 for a permanent ban.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Fingerprint IP Threshold';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'The number of distinct IP addresses sharing the same browser fingerprint within 10 minutes before traffic is considered suspicious.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord Webhook URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Enter the Discord webhook URL used exclusively by the Discord Visitor Logger plugin to send visitor notifications. This setting is specific to this plugin and is not shared with other Discord integrations.';
