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

$lang['settings_discord'] = 'Nastavení Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Automaticky blokovat podezřelé IP adresy';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Automaticky použít dočasnou blokaci IP adresy, pokud je podezřelý provoz zjištěn shodou otisku prohlížeče.';
$lang['discord_visitor_logger_ban_duration'] = 'Doba dočasné blokace';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Počet hodin, po které zůstane podezřelá IP adresa blokována. Nastavením na 0 se blokace stane trvalou.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Limit IP adres na otisk';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Počet různých IP adres sdílejících stejný otisk prohlížeče během 10 minut, po jehož překročení je provoz považován za podezřelý.';
$lang['discord_visitor_logger_webhook_url'] = 'URL webhooku Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Zadejte URL webhooku Discord, který používá výhradně plugin Záznamník návštěvníků Discord k odesílání oznámení o návštěvnících. Toto nastavení je specifické pro tento plugin a nesdílí se s ostatními integracemi Discord.';
