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

$lang['settings_discord'] = 'Настройки Дискорда';
$lang['discord_visitor_logger_auto_ban'] = 'Автоматически блокировать подозрительные IP-адреса';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Автоматически применять временную блокировку IP при обнаружении подозрительного трафика по совпадению отпечатков браузера.';
$lang['discord_visitor_logger_ban_duration'] = 'Длительность временной блокировки';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Количество часов, в течение которых подозрительный IP-адрес будет оставаться заблокированным. Укажите 0 для постоянной блокировки.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Порог IP-адресов на отпечаток';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Количество различных IP-адресов с одинаковым отпечатком браузера в течение 10 минут, после которого трафик считается подозрительным.';
$lang['discord_visitor_logger_webhook_url'] = 'URL-адрес вебхука Дискорда';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Введите URL-адрес вебхука Дискорда, используемый исключительно плагином Дискорд Регистратор Посетителей для отправки уведомлений о посетителях. Этот параметр специфичен для данного плагина и не используется совместно с другими интеграциями Дискорда.';
