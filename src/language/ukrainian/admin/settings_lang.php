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

$lang['settings_discord'] = 'Налаштування Дискорду';
$lang['discord_visitor_logger_auto_ban'] = 'Автоматично блокувати підозрілі IP-адреси';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Автоматично застосовувати тимчасове блокування IP, коли підозрілий трафік виявлено за збігом відбитків браузера.';
$lang['discord_visitor_logger_ban_duration'] = 'Тривалість тимчасового блокування';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Кількість годин, протягом яких підозріла IP-адреса залишатиметься заблокованою. Вкажіть 0 для постійного блокування.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Поріг IP-адрес на відбиток';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Кількість різних IP-адрес з однаковим відбитком браузера протягом 10 хвилин, після якої трафік вважається підозрілим.';
$lang['discord_visitor_logger_webhook_url'] = 'URL-адреса вебхука Дискорду';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Введіть URL-адресу вебхука Дискорду, яку використовує виключно плагін Дискорд Реєстратор Відвідувачів для надсилання сповіщень про відвідувачів. Цей параметр є специфічним для цього плагіна і не використовується спільно з іншими інтеграціями Дискорду.';
