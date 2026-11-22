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

$lang['settings_discord'] = 'Discord Ayarları';
$lang['discord_visitor_logger_auto_ban'] = 'Şüpheli IP’leri Otomatik Olarak Engelle';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Tarayıcı parmak izi eşleşmesi yoluyla şüpheli trafik tespit edildiğinde otomatik olarak geçici bir IP engeli uygula.';
$lang['discord_visitor_logger_ban_duration'] = 'Geçici Engel Süresi';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Şüpheli bir IP adresinin engelli kalacağı saat sayısı. Kalıcı engel için 0 olarak ayarlayın.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Parmak İzi Başına IP Eşiği';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = '10 dakika içinde aynı tarayıcı parmak izini paylaşan farklı IP adresi sayısı; bu sayı aşıldığında trafik şüpheli kabul edilir.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord Webhook URL’si';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Ziyaretçi bildirimlerini göndermek için yalnızca Discord Ziyaretçi Kaydedici eklentisi tarafından kullanılan Discord webhook URL’sini girin. Bu ayar bu eklentiye özeldir ve diğer Discord entegrasyonlarıyla paylaşılmaz.';
