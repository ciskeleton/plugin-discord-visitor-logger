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

$lang['settings_discord'] = 'การตั้งค่าดิสคอร์ด';
$lang['discord_visitor_logger_auto_ban'] = 'แบน IP ที่น่าสงสัยโดยอัตโนมัติ';
$lang['discord_visitor_logger_auto_ban_tip'] = 'ใช้การแบน IP ชั่วคราวโดยอัตโนมัติเมื่อตรวจพบทราฟฟิกที่น่าสงสัยจากการจับคู่ลายนิ้วมือเบราว์เซอร์';
$lang['discord_visitor_logger_ban_duration'] = 'ระยะเวลาการแบนชั่วคราว';
$lang['discord_visitor_logger_ban_duration_tip'] = 'จำนวนชั่วโมงที่ที่อยู่ IP ที่น่าสงสัยจะถูกแบน ตั้งค่าเป็น 0 เพื่อแบนถาวร';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'เกณฑ์จำนวน IP ต่อลายนิ้วมือ';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'จำนวนที่อยู่ IP ที่แตกต่างกันซึ่งใช้ลายนิ้วมือเบราว์เซอร์เดียวกันภายใน 10 นาที ซึ่งเมื่อเกินแล้วทราฟฟิกจะถูกพิจารณาว่าน่าสงสัย';
$lang['discord_visitor_logger_webhook_url'] = 'URL ของ Webhook ดิสคอร์ด';
$lang['discord_visitor_logger_webhook_url_tip'] = 'ป้อน URL ของ webhook ดิสคอร์ดที่ใช้โดยเฉพาะโดยปลั๊กอินตัวบันทึกผู้เยี่ยมชมดิสคอร์ดเพื่อส่งการแจ้งเตือนผู้เข้าชม การตั้งค่านี้เฉพาะสำหรับปลั๊กอินนี้และไม่ใช้ร่วมกับการผสานรวมดิสคอร์ดอื่น ๆ';
