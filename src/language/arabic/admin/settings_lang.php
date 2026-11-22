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

$lang['settings_discord'] = 'إعدادات ديسكورد';
$lang['discord_visitor_logger_auto_ban'] = 'حظر عناوين IP المشبوهة تلقائيًا';
$lang['discord_visitor_logger_auto_ban_tip'] = 'تطبيق حظر مؤقت تلقائيًا على عنوان IP عند رصد حركة مرور مشبوهة من خلال مطابقة بصمة المتصفح.';
$lang['discord_visitor_logger_ban_duration'] = 'مدة الحظر المؤقت';
$lang['discord_visitor_logger_ban_duration_tip'] = 'عدد الساعات التي سيظل خلالها عنوان IP المشبوه محظورًا. اضبطه على 0 لحظر دائم.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'حد عناوين IP لبصمة المتصفح';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'عدد عناوين IP المختلفة التي تشترك في بصمة المتصفح نفسها خلال 10 دقائق، والذي يُعدّ بعده الزائر مشبوهًا.';
$lang['discord_visitor_logger_webhook_url'] = 'عنوان URL لويب هوك ديسكورد';
$lang['discord_visitor_logger_webhook_url_tip'] = 'أدخل عنوان URL لويب هوك ديسكورد الذي تستخدمه إضافة مسجّل زوار ديسكورد حصريًا لإرسال إشعارات الزوار. هذا الإعداد خاص بهذه الإضافة ولا تتم مشاركته مع تكاملات ديسكورد الأخرى.';
