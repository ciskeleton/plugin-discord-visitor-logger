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

$lang['settings_discord'] = 'ディスコード設定';
$lang['discord_visitor_logger_auto_ban'] = '不審な IP を自動的にブロック';
$lang['discord_visitor_logger_auto_ban_tip'] = 'ブラウザフィンガープリントの一致によって不審なトラフィックが検出された場合、一時的な IP ブロックを自動的に適用します。';
$lang['discord_visitor_logger_ban_duration'] = '一時ブロックの期間';
$lang['discord_visitor_logger_ban_duration_tip'] = '不審な IP アドレスをブロックし続ける時間数です。0 に設定すると永久ブロックになります。';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'フィンガープリントあたりの IP しきい値';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = '10 分以内に同一のブラウザフィンガープリントを共有する異なる IP アドレスの数。この数に達するとトラフィックは不審と判断されます。';
$lang['discord_visitor_logger_webhook_url'] = 'ディスコード Webhook URL';
$lang['discord_visitor_logger_webhook_url_tip'] = '訪問者の通知を送信するためにディスコード訪問者ロガープラグインが独占的に使用するディスコード Webhook URL を入力してください。この設定はこのプラグイン固有のものであり、他のディスコード連携とは共有されません。';
