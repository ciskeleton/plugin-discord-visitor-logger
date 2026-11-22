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

$lang['settings_discord'] = 'Discord iestatījumi';
$lang['discord_visitor_logger_auto_ban'] = 'Automātiski bloķēt aizdomīgas IP adreses';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Automātiski piemērot īslaicīgu IP bloķēšanu, kad ar pārlūkprogrammas pirkstu nospiedumu sakritību tiek konstatēta aizdomīga datplūsma.';
$lang['discord_visitor_logger_ban_duration'] = 'Īslaicīgās bloķēšanas ilgums';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Stundu skaits, cik ilgi aizdomīga IP adrese paliks bloķēta. Iestatiet 0, lai bloķētu pastāvīgi.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'IP slieksnis uz pirkstu nospiedumu';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Atšķirīgu IP adrešu skaits, kas 10 minūšu laikā izmanto vienu un to pašu pārlūkprogrammas pirkstu nospiedumu, pēc kura datplūsma tiek uzskatīta par aizdomīgu.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord webhook URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Ievadiet Discord webhook URL, ko ekskluzīvi izmanto spraudnis Discord Apmeklētāju Žurnāls, lai sūtītu apmeklētāju paziņojumus. Šis iestatījums ir raksturīgs šim spraudnim un netiek koplietots ar citām Discord integrācijām.';
