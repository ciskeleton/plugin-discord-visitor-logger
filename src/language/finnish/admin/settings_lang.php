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

$lang['settings_discord'] = 'Discord-asetukset';
$lang['discord_visitor_logger_auto_ban'] = 'Estä epäilyttävät IP-osoitteet automaattisesti';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Ota automaattisesti käyttöön väliaikainen IP-esto, kun epäilyttävää liikennettä havaitaan selaimen sormenjälkien vastaavuuden perusteella.';
$lang['discord_visitor_logger_ban_duration'] = 'Väliaikaisen eston kesto';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Tuntien määrä, jonka epäilyttävä IP-osoite pysyy estettynä. Aseta arvoksi 0 pysyvää estoa varten.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Sormenjäljen IP-raja';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Eri IP-osoitteiden määrä, jotka jakavat saman selaimen sormenjäljen 10 minuutin aikana, minkä jälkeen liikennettä pidetään epäilyttävänä.';
$lang['discord_visitor_logger_webhook_url'] = 'Discordin webhook-URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Anna Discordin webhook-URL-osoite, jota vain Discord-kävijälokittaja-lisäosa käyttää kävijäilmoitusten lähettämiseen. Tämä asetus on ominainen tälle lisäosalle, eikä sitä jaeta muiden Discord-integraatioiden kanssa.';
