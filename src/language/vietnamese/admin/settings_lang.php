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

$lang['settings_discord'] = 'Cài đặt Discord';
$lang['discord_visitor_logger_auto_ban'] = 'Tự động chặn các IP đáng ngờ';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Tự động áp dụng lệnh chặn IP tạm thời khi phát hiện lưu lượng đáng ngờ thông qua việc khớp dấu vân tay trình duyệt.';
$lang['discord_visitor_logger_ban_duration'] = 'Thời gian chặn tạm thời';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Số giờ một địa chỉ IP đáng ngờ sẽ bị chặn. Đặt là 0 để chặn vĩnh viễn.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Ngưỡng IP theo dấu vân tay';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Số lượng địa chỉ IP khác nhau dùng chung cùng một dấu vân tay trình duyệt trong vòng 10 phút, vượt quá số này thì lưu lượng bị coi là đáng ngờ.';
$lang['discord_visitor_logger_webhook_url'] = 'URL Webhook Discord';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Nhập URL webhook Discord được sử dụng riêng bởi plugin Trình ghi nhật ký khách truy cập Discord để gửi thông báo khách truy cập. Cài đặt này dành riêng cho plugin này và không được chia sẻ với các tích hợp Discord khác.';
