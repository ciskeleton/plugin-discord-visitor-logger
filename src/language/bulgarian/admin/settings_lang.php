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

$lang['settings_discord'] = 'Настройки на Дискорд';
$lang['discord_visitor_logger_auto_ban'] = 'Автоматично блокиране на подозрителни IP адреси';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Автоматично прилагане на временна блокировка на IP адрес, когато се открие подозрителен трафик чрез съвпадение на отпечатък на браузъра.';
$lang['discord_visitor_logger_ban_duration'] = 'Продължителност на временната блокировка';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Броят часове, през които подозрителен IP адрес ще остане блокиран. Задайте 0 за постоянна блокировка.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Праг на IP адреси за отпечатък';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Броят различни IP адреси, споделящи един и същ отпечатък на браузъра в рамките на 10 минути, след който трафикът се счита за подозрителен.';
$lang['discord_visitor_logger_webhook_url'] = 'URL на Дискорд webhook';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Въведете URL адреса на Дискорд webhook, използван единствено от приставката Дискорд Регистратор на посетители за изпращане на известия за посетители. Тази настройка е специфична за тази приставка и не се споделя с други Дискорд интеграции.';
