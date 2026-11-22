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

$lang['settings_discord'] = 'Pengaturan Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Blokir IP Mencurigakan Secara Otomatis';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Terapkan pemblokiran IP sementara secara otomatis saat lalu lintas mencurigakan terdeteksi melalui pencocokan sidik jari browser.';
$lang['discord_visitor_logger_ban_duration'] = 'Durasi Pemblokiran Sementara';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Jumlah jam alamat IP yang mencurigakan akan tetap diblokir. Atur ke 0 untuk pemblokiran permanen.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Batas IP per Sidik Jari';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Jumlah alamat IP berbeda yang memiliki sidik jari browser yang sama dalam 10 menit, yang jika terlampaui lalu lintas dianggap mencurigakan.';
$lang['discord_visitor_logger_webhook_url'] = 'URL Webhook Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Masukkan URL webhook Discord yang digunakan secara eksklusif oleh plugin Pencatat Pengunjung Discord untuk mengirim notifikasi pengunjung. Pengaturan ini khusus untuk plugin ini dan tidak dibagikan dengan integrasi Discord lainnya.';
