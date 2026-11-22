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

$lang['settings_discord'] = 'Nastavitve Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Samodejno blokiraj sumljive naslove IP';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Samodejno uporabi začasno blokado IP, ko je z ujemanjem prstnega odtisa brskalnika zaznan sumljiv promet.';
$lang['discord_visitor_logger_ban_duration'] = 'Trajanje začasne blokade';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Število ur, med katerimi bo sumljiv naslov IP ostal blokiran. Nastavite 0 za trajno blokado.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Prag naslovov IP na prstni odtis';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Število različnih naslovov IP, ki si v 10 minutah delijo isti prstni odtis brskalnika, po katerem se promet šteje za sumljiv.';
$lang['discord_visitor_logger_webhook_url'] = 'URL webhooka Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Vnesite URL webhooka Discord, ki ga izključno uporablja vtičnik Discord Beležnik Obiskovalcev za pošiljanje obvestil o obiskovalcih. Ta nastavitev je specifična za ta vtičnik in si je ne deli z drugimi integracijami Discord.';
