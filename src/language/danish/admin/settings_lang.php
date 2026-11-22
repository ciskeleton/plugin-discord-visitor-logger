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

$lang['settings_discord'] = 'Discord-indstillinger';
$lang['discord_visitor_logger_auto_ban'] = 'Bloker mistænkelige IP-adresser automatisk';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Anvend automatisk en midlertidig IP-blokering, når mistænkelig trafik registreres via matchende browser-fingeraftryk.';
$lang['discord_visitor_logger_ban_duration'] = 'Varighed af midlertidig blokering';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Antallet af timer, en mistænkelig IP-adresse forbliver blokeret. Sæt til 0 for permanent blokering.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'IP-grænse pr. fingeraftryk';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Antallet af forskellige IP-adresser, der deler samme browser-fingeraftryk inden for 10 minutter, før trafikken betragtes som mistænkelig.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord webhook-URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Indtast den Discord webhook-URL, der udelukkende bruges af pluginet Discord Besøgslogger til at sende besøgsmeddelelser. Denne indstilling er specifik for dette plugin og deles ikke med andre Discord-integrationer.';
