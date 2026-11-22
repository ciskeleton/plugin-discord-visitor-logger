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

$lang['settings_discord'] = 'Discord nustatymai';
$lang['discord_visitor_logger_auto_ban'] = 'Automatiškai blokuoti įtartinus IP adresus';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Automatiškai taikyti laikiną IP blokavimą, kai pagal naršyklės kontrolinio kodo atitikimą aptinkamas įtartinas srautas.';
$lang['discord_visitor_logger_ban_duration'] = 'Laikino blokavimo trukmė';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Valandų skaičius, kiek įtartinas IP adresas liks užblokuotas. Nustatykite 0, jei norite blokuoti visam laikui.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'IP riba pagal naršyklės kontrolinį kodą';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Skirtingų IP adresų, kurie per 10 minučių naudoja tą patį naršyklės kontrolinį kodą, skaičius, kurį viršijus srautas laikomas įtartinu.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord webhook URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Įveskite Discord webhook URL, kurį išimtinai naudoja papildinys Discord lankytojų registratorius lankytojų pranešimams siųsti. Šis nustatymas būdingas tik šiam papildiniui ir nėra bendrinamas su kitomis Discord integracijomis.';
