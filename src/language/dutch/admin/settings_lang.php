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

$lang['settings_discord'] = 'Discord-instellingen';
$lang['discord_visitor_logger_auto_ban'] = 'Verdachte IP-adressen automatisch blokkeren';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Pas automatisch een tijdelijke IP-blokkade toe wanneer verdacht verkeer wordt gedetecteerd via overeenkomende browser-fingerprints.';
$lang['discord_visitor_logger_ban_duration'] = 'Duur van tijdelijke blokkade';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Het aantal uren dat een verdacht IP-adres geblokkeerd blijft. Stel in op 0 voor een permanente blokkade.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'IP-drempel per fingerprint';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Het aantal verschillende IP-adressen dat binnen 10 minuten dezelfde browser-fingerprint deelt, waarna het verkeer als verdacht wordt beschouwd.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord-webhook-URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Voer de Discord-webhook-URL in die uitsluitend door de plug-in Discord Bezoekerslogger wordt gebruikt om bezoekersmeldingen te verzenden. Deze instelling is specifiek voor deze plug-in en wordt niet gedeeld met andere Discord-integraties.';
