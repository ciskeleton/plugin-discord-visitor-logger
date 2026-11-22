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

$lang['settings_discord'] = 'Discord 设置';
$lang['discord_visitor_logger_auto_ban'] = '自动封禁可疑 IP';
$lang['discord_visitor_logger_auto_ban_tip'] = '当通过浏览器指纹匹配检测到可疑流量时，自动对相关 IP 施加临时封禁。';
$lang['discord_visitor_logger_ban_duration'] = '临时封禁时长';
$lang['discord_visitor_logger_ban_duration_tip'] = '可疑 IP 地址被封禁的小时数。设置为 0 表示永久封禁。';
$lang['discord_visitor_logger_fingerprint_threshold'] = '指纹 IP 阈值';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = '10 分钟内共用同一浏览器指纹的不同 IP 地址数量，超过该数量后流量将被视为可疑。';
$lang['discord_visitor_logger_webhook_url'] = 'Discord Webhook URL';
$lang['discord_visitor_logger_webhook_url_tip'] = '输入仅供 Discord 访客记录器插件用于发送访客通知的 Discord Webhook URL。此设置仅适用于本插件，不与其他 Discord 集成共享。';
