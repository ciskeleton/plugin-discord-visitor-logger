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

$lang['settings_discord'] = 'Ajustes de Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Bloquear automáticamente IPs sospechosas';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Aplica automáticamente un bloqueo temporal de IP cuando se detecta tráfico sospechoso mediante la coincidencia de huellas digitales del navegador.';
$lang['discord_visitor_logger_ban_duration'] = 'Duración del bloqueo temporal';
$lang['discord_visitor_logger_ban_duration_tip'] = 'El número de horas que una dirección IP sospechosa permanecerá bloqueada. Establece 0 para un bloqueo permanente.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Umbral de IPs por huella digital';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'El número de direcciones IP distintas que comparten la misma huella digital del navegador en 10 minutos, a partir del cual el tráfico se considera sospechoso.';
$lang['discord_visitor_logger_webhook_url'] = 'URL del webhook de Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Introduce la URL del webhook de Discord utilizada exclusivamente por el plugin Registrador de Visitantes de Discord para enviar notificaciones de visitantes. Este ajuste es específico de este plugin y no se comparte con otras integraciones de Discord.';
