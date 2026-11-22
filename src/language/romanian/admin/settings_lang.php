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

$lang['settings_discord'] = 'Setări Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Blochează automat adresele IP suspecte';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Aplică automat o blocare temporară a IP-ului atunci când este detectat trafic suspect prin potrivirea amprentei browserului.';
$lang['discord_visitor_logger_ban_duration'] = 'Durata blocării temporare';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Numărul de ore în care o adresă IP suspectă va rămâne blocată. Setați la 0 pentru o blocare permanentă.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Prag de IP-uri per amprentă';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Numărul de adrese IP distincte care împart aceeași amprentă de browser în 10 minute, după care traficul este considerat suspect.';
$lang['discord_visitor_logger_webhook_url'] = 'URL webhook Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Introduceți URL-ul webhook-ului Discord folosit exclusiv de pluginul Jurnal de Vizitatori Discord pentru a trimite notificări despre vizitatori. Această setare este specifică acestui plugin și nu este partajată cu alte integrări Discord.';
