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

$lang['settings_discord'] = 'Discord-inställningar';
$lang['discord_visitor_logger_auto_ban'] = 'Blockera misstänkta IP-adresser automatiskt';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Tillämpa automatiskt en tillfällig IP-blockering när misstänkt trafik upptäcks genom matchning av webbläsarens fingeravtryck.';
$lang['discord_visitor_logger_ban_duration'] = 'Varaktighet för tillfällig blockering';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Antalet timmar som en misstänkt IP-adress förblir blockerad. Ange 0 för permanent blockering.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'IP-gräns per fingeravtryck';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Antalet olika IP-adresser som delar samma webbläsarfingeravtryck inom 10 minuter, varefter trafiken anses vara misstänkt.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord webhook-URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Ange den Discord-webhook-URL som uteslutande används av tillägget Discord Besökarloggare för att skicka besöksaviseringar. Denna inställning är specifik för detta tillägg och delas inte med andra Discord-integrationer.';
