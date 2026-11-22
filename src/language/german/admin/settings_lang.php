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

$lang['settings_discord'] = 'Discord-Einstellungen';
$lang['discord_visitor_logger_auto_ban'] = 'Verdächtige IP-Adressen automatisch sperren';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Automatisch eine temporäre IP-Sperre verhängen, wenn verdächtiger Datenverkehr durch den Abgleich von Browser-Fingerprints erkannt wird.';
$lang['discord_visitor_logger_ban_duration'] = 'Dauer der temporären Sperre';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Die Anzahl der Stunden, für die eine verdächtige IP-Adresse gesperrt bleibt. Auf 0 setzen für eine dauerhafte Sperre.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'IP-Schwellenwert pro Fingerprint';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Die Anzahl unterschiedlicher IP-Adressen, die innerhalb von 10 Minuten denselben Browser-Fingerprint verwenden, ab der der Datenverkehr als verdächtig gilt.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord-Webhook-URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Geben Sie die Discord-Webhook-URL ein, die ausschließlich vom Plugin Discord-Besucherprotokollierung verwendet wird, um Besucherbenachrichtigungen zu senden. Diese Einstellung ist spezifisch für dieses Plugin und wird nicht mit anderen Discord-Integrationen geteilt.';
