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

$lang['settings_discord'] = 'Discord beállítások';
$lang['discord_visitor_logger_auto_ban'] = 'Gyanús IP-címek automatikus tiltása';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Ideiglenes IP-tiltás automatikus alkalmazása, ha a böngészőujjlenyomat-egyezés gyanús forgalmat észlel.';
$lang['discord_visitor_logger_ban_duration'] = 'Ideiglenes tiltás időtartama';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Az órák száma, ameddig egy gyanús IP-cím tiltva marad. Állítsa 0-ra az állandó tiltáshoz.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Ujjlenyomatonkénti IP-küszöb';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Az azonos böngészőujjlenyomaton 10 percen belül osztozó különböző IP-címek száma, amely felett a forgalom gyanúsnak minősül.';
$lang['discord_visitor_logger_webhook_url'] = 'Discord webhook URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Adja meg azt a Discord webhook URL-t, amelyet kizárólag a Discord Látogatónapló bővítmény használ a látogatói értesítések küldéséhez. Ez a beállítás erre a bővítményre jellemző, és nem osztható meg más Discord-integrációkkal.';
