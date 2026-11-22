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

$lang['settings_discord'] = 'Tetapan Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Sekat IP Mencurigakan Secara Automatik';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Gunakan sekatan IP sementara secara automatik apabila trafik mencurigakan dikesan melalui padanan cap jari pelayar.';
$lang['discord_visitor_logger_ban_duration'] = 'Tempoh Sekatan Sementara';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Bilangan jam alamat IP yang mencurigakan akan kekal disekat. Tetapkan kepada 0 untuk sekatan kekal.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Ambang IP bagi Cap Jari';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Bilangan alamat IP berbeza yang berkongsi cap jari pelayar yang sama dalam masa 10 minit, selepas itu trafik dianggap mencurigakan.';
$lang['discord_visitor_logger_webhook_url'] = 'URL Webhook Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Masukkan URL webhook Discord yang digunakan secara eksklusif oleh pemalam Pencatat Pelawat Discord untuk menghantar pemberitahuan pelawat. Tetapan ini khusus untuk pemalam ini dan tidak dikongsi dengan integrasi Discord yang lain.';
