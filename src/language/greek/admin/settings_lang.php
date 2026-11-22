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

$lang['settings_discord'] = 'Ρυθμίσεις Ντίσκορντ';
$lang['discord_visitor_logger_auto_ban'] = 'Αυτόματος αποκλεισμός ύποπτων IP';
$lang['discord_visitor_logger_auto_ban_tip'] = 'Αυτόματη εφαρμογή προσωρινού αποκλεισμού IP όταν εντοπίζεται ύποπτη κίνηση μέσω αντιστοίχισης δακτυλικού αποτυπώματος του προγράμματος περιήγησης.';
$lang['discord_visitor_logger_ban_duration'] = 'Διάρκεια προσωρινού αποκλεισμού';
$lang['discord_visitor_logger_ban_duration_tip'] = 'Ο αριθμός των ωρών για τις οποίες μια ύποπτη διεύθυνση IP θα παραμείνει αποκλεισμένη. Ορίστε 0 για μόνιμο αποκλεισμό.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'Όριο IP ανά δακτυλικό αποτύπωμα';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'Ο αριθμός διαφορετικών διευθύνσεων IP που μοιράζονται το ίδιο δακτυλικό αποτύπωμα προγράμματος περιήγησης εντός 10 λεπτών, μετά τον οποίο η κίνηση θεωρείται ύποπτη.';
$lang['discord_visitor_logger_webhook_url'] = 'URL webhook του Ντίσκορντ';
$lang['discord_visitor_logger_webhook_url_tip'] = 'Εισαγάγετε το URL του webhook του Ντίσκορντ που χρησιμοποιείται αποκλειστικά από το πρόσθετο Καταγραφέας Επισκεπτών Ντίσκορντ για την αποστολή ειδοποιήσεων επισκεπτών. Αυτή η ρύθμιση είναι ειδική για αυτό το πρόσθετο και δεν κοινοποιείται με άλλες ενσωματώσεις του Ντίσκορντ.';
