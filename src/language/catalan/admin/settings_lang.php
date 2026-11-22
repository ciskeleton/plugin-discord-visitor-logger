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

$lang['settings_discord'] = 'Configuració de Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Bloqueja automàticament les IP sospitoses';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Aplica automàticament un bloqueig temporal d’IP quan es detecta trànsit sospitós mitjançant la coincidència d’empremtes digitals del navegador.';
$lang['discord_visitor_logger_ban_duration'] = 'Durada del bloqueig temporal';
$lang['discord_visitor_logger_ban_duration_tip'] = 'El nombre d’hores que una adreça IP sospitosa romandrà bloquejada. Establiu-lo a 0 per a un bloqueig permanent.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Llindar d’IP per empremta digital';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'El nombre d’adreces IP diferents que comparteixen la mateixa empremta digital del navegador en 10 minuts a partir del qual el trànsit es considera sospitós.';
$lang['discord_visitor_logger_webhook_url'] = 'URL del webhook de Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Introduïu l’URL del webhook de Discord utilitzada exclusivament pel connector Registrador de Visitants de Discord per enviar notificacions de visitants. Aquesta configuració és específica d’aquest connector i no es comparteix amb altres integracions de Discord.';
