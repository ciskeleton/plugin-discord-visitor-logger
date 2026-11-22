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

$lang['settings_discord'] = 'Discord 設定';
$lang['discord_visitor_logger_auto_ban'] = '自動封鎖可疑 IP';
$lang['discord_visitor_logger_auto_ban_tip'] = '當透過瀏覽器指紋比對偵測到可疑流量時，自動對相關 IP 實施暫時封鎖。';
$lang['discord_visitor_logger_ban_duration'] = '暫時封鎖時長';
$lang['discord_visitor_logger_ban_duration_tip'] = '可疑 IP 位址被封鎖的小時數。設為 0 表示永久封鎖。';
$lang['discord_visitor_logger_fingerprint_threshold'] = '指紋 IP 閾值';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = '10 分鐘內共用同一瀏覽器指紋的不同 IP 位址數量，超過此數量後流量將被視為可疑。';
$lang['discord_visitor_logger_webhook_url'] = 'Discord Webhook URL';
$lang['discord_visitor_logger_webhook_url_tip'] = '輸入僅供 Discord 訪客記錄器外掛用於傳送訪客通知的 Discord Webhook URL。此設定為此外掛專用，不會與其他 Discord 整合共用。';
