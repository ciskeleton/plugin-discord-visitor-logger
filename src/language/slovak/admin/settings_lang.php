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

$lang['settings_discord'] = 'Nastavenia Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Automaticky blokovať podozrivé IP adresy';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Automaticky použiť dočasnú blokáciu IP adresy, keď sa zistí podozrivá prevádzka zhodou odtlačku prehliadača.';
$lang['discord_visitor_logger_ban_duration'] = 'Trvanie dočasnej blokácie';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Počet hodín, počas ktorých zostane podozrivá IP adresa blokovaná. Nastavením na 0 sa blokácia stane trvalou.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Limit IP adries na odtlačok';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Počet rôznych IP adries zdieľajúcich ten istý odtlačok prehliadača počas 10 minút, po prekročení ktorého sa prevádzka považuje za podozrivú.';
$lang['discord_visitor_logger_webhook_url'] = 'URL webhooku Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Zadajte URL webhooku Discord, ktorý používa výhradne plugin Discord Záznamník Návštevníkov na odosielanie oznámení o návštevníkoch. Toto nastavenie je špecifické pre tento plugin a nezdieľa sa s ostatnými integráciami Discord.';
