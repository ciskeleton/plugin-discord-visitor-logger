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

$lang['settings_discord'] = 'Configurações do Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Banir IPs suspeitos automaticamente';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Aplica automaticamente um banimento temporário de IP quando tráfego suspeito é detectado por correspondência de impressão digital do navegador.';
$lang['discord_visitor_logger_ban_duration'] = 'Duração do banimento temporário';
$lang['discord_visitor_logger_ban_duration_tip'] = 'O número de horas em que um endereço IP suspeito permanecerá banido. Defina como 0 para um banimento permanente.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Limite de IPs por impressão digital';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'O número de endereços IP distintos que compartilham a mesma impressão digital do navegador em 10 minutos, a partir do qual o tráfego é considerado suspeito.';
$lang['discord_visitor_logger_webhook_url'] = 'URL do Webhook do Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Insira a URL do webhook do Discord usada exclusivamente pelo plugin Registrador de Visitantes do Discord para enviar notificações de visitantes. Esta configuração é específica deste plugin e não é compartilhada com outras integrações do Discord.';
