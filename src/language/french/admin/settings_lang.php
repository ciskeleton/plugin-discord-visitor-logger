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

$lang['settings_discord'] = 'Paramètres Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Bannir les adresses IP suspectes';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Applique automatiquement un bannissement temporaire d’IP lorsqu’un trafic suspect est détecté par correspondance d’empreintes de navigateur.';
$lang['discord_visitor_logger_ban_duration'] = 'Durée du bannissement temporaire';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Le nombre d’heures pendant lesquelles une adresse IP suspecte restera bannie. Définissez 0 pour un bannissement permanent.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Seuil d’IP par empreinte';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Le nombre d’adresses IP distinctes partageant la même empreinte de navigateur en 10 minutes, au-delà duquel le trafic est considéré comme suspect.';
$lang['discord_visitor_logger_webhook_url'] = 'URL du webhook Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Saisissez l’URL du webhook Discord utilisée exclusivement par l’extension Journal des visiteurs Discord pour envoyer des notifications de visiteurs. Ce paramètre est propre à cette extension et n’est pas partagé avec d’autres intégrations Discord.';
