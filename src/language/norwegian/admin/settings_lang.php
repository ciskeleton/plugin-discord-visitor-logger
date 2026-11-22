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

$lang['settings_discord'] = 'Discord-innstillinger';
$lang['discord_visitor_logger_auto_ban'] = 'Utesteng mistenkelige IP-adresser automatisk';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Bruk automatisk en midlertidig IP-utestengelse når mistenkelig trafikk oppdages gjennom samsvar mellom nettleserfingeravtrykk.';
$lang['discord_visitor_logger_ban_duration'] = 'Varighet på midlertidig utestengelse';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Antall timer en mistenkelig IP-adresse forblir utestengt. Sett til 0 for permanent utestengelse.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'IP-grense per fingeravtrykk';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Antall ulike IP-adresser som deler samme nettleserfingeravtrykk innen 10 minutter, før trafikken regnes som mistenkelig.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord webhook-URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Skriv inn Discord webhook-URL-en som utelukkende brukes av utvidelsen Discord Besøkslogger for å sende besøksvarsler. Denne innstillingen er spesifikk for denne utvidelsen og deles ikke med andre Discord-integrasjoner.';
