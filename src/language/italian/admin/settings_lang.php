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

$lang['settings_discord'] = 'Impostazioni Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Blocca automaticamente gli IP sospetti';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Applica automaticamente un blocco IP temporaneo quando viene rilevato traffico sospetto tramite la corrispondenza delle impronte digitali del browser.';
$lang['discord_visitor_logger_ban_duration'] = 'Durata del blocco temporaneo';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Il numero di ore per cui un indirizzo IP sospetto rimarrà bloccato. Imposta 0 per un blocco permanente.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Soglia di IP per impronta digitale';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Il numero di indirizzi IP distinti che condividono la stessa impronta digitale del browser entro 10 minuti, superato il quale il traffico è considerato sospetto.';
$lang['discord_visitor_logger_webhook_url'] = 'URL del webhook Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Inserisci l’URL del webhook Discord utilizzato esclusivamente dal plugin Registro Visitatori Discord per inviare notifiche dei visitatori. Questa impostazione è specifica di questo plugin e non è condivisa con altre integrazioni Discord.';
