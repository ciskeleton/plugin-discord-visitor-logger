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

$lang['settings_discord'] = '디스코드 설정';
$lang['discord_visitor_logger_auto_ban'] = '의심스러운 IP 자동 차단';
$lang['discord_visitor_logger_auto_ban_tip'] = '브라우저 핑거프린트 일치를 통해 의심스러운 트래픽이 감지되면 임시 IP 차단을 자동으로 적용합니다.';
$lang['discord_visitor_logger_ban_duration'] = '임시 차단 기간';
$lang['discord_visitor_logger_ban_duration_tip'] = '의심스러운 IP 주소가 차단된 상태로 유지되는 시간(시간 단위)입니다. 0으로 설정하면 영구 차단됩니다.';
$lang['discord_visitor_logger_fingerprint_threshold'] = '핑거프린트당 IP 임계값';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = '10분 이내에 동일한 브라우저 핑거프린트를 공유하는 서로 다른 IP 주소의 수로, 이를 초과하면 트래픽이 의심스러운 것으로 간주됩니다.';
$lang['discord_visitor_logger_webhook_url'] = '디스코드 웹훅 URL';
$lang['discord_visitor_logger_webhook_url_tip'] = '방문자 알림을 보내기 위해 디스코드 방문자 로거 플러그인에서만 사용하는 디스코드 웹훅 URL을 입력하세요. 이 설정은 이 플러그인에만 해당하며 다른 디스코드 통합과 공유되지 않습니다.';
