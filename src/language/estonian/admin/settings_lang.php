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

$lang['settings_discord'] = 'Discordi seaded';
$lang['discord_visitor_logger_auto_ban'] = 'Blokeeri kahtlased IP-aadressid automaatselt';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Rakenda automaatselt ajutine IP-blokeering, kui brauseri sõrmejälje vastavuse kaudu tuvastatakse kahtlane liiklus.';
$lang['discord_visitor_logger_ban_duration'] = 'Ajutise blokeeringu kestus';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Tundide arv, mille jooksul kahtlane IP-aadress jääb blokeerituks. Püsiva blokeeringu jaoks määrake 0.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Sõrmejälje IP-piir';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Erinevate IP-aadresside arv, mis jagavad 10 minuti jooksul sama brauseri sõrmejälge, millest alates liiklust peetakse kahtlaseks.';
$lang['discord_visitor_logger_webhook_url'] = 'Discordi webhooki URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Sisestage Discordi webhooki URL, mida kasutab eranditult plugin Discordi Külastajate Logija külastajate teavituste saatmiseks. See seade on omane sellele pluginale ega ole jagatud teiste Discordi integratsioonidega.';
