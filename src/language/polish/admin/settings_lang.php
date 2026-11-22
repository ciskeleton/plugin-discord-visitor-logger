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

$lang['settings_discord'] = 'Ustawienia Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Automatycznie blokuj podejrzane adresy IP';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Automatycznie stosuj tymczasową blokadę IP, gdy podejrzany ruch zostanie wykryty na podstawie zgodności odcisku palca przeglądarki.';
$lang['discord_visitor_logger_ban_duration'] = 'Czas trwania tymczasowej blokady';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Liczba godzin, przez które podejrzany adres IP pozostanie zablokowany. Ustaw 0, aby zablokować na stałe.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Próg adresów IP na odcisk palca';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Liczba różnych adresów IP współdzielących ten sam odcisk palca przeglądarki w ciągu 10 minut, po przekroczeniu której ruch uznawany jest za podejrzany.';
$lang['discord_visitor_logger_webhook_url'] = 'Adres URL webhooka Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Wprowadź adres URL webhooka Discord używany wyłącznie przez wtyczkę Rejestrator Odwiedzających Discord do wysyłania powiadomień o odwiedzających. To ustawienie jest specyficzne dla tej wtyczki i nie jest współdzielone z innymi integracjami Discord.';
