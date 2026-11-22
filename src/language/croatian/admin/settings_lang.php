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

$lang['settings_discord'] = 'Discord postavke';
$lang['discord_visitor_logger_auto_ban'] = 'Automatski blokiraj sumnjive IP adrese';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Automatski primijeni privremenu blokadu IP adrese kada se otkrije sumnjiv promet podudaranjem otiska preglednika.';
$lang['discord_visitor_logger_ban_duration'] = 'Trajanje privremene blokade';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Broj sati tijekom kojih će sumnjiva IP adresa ostati blokirana. Postavite 0 za trajnu blokadu.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Prag IP adresa po otisku';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Broj različitih IP adresa koje dijele isti otisak preglednika unutar 10 minuta, nakon čega se promet smatra sumnjivim.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord webhook URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Unesite URL Discord webhooka koji koristi isključivo dodatak Discord zapisnik posjetitelja za slanje obavijesti o posjetiteljima. Ova je postavka specifična za ovaj dodatak i ne dijeli se s drugim Discord integracijama.';
