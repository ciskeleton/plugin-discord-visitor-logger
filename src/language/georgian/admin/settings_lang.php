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

$lang['settings_discord'] = 'დისკორდის პარამეტრები';
$lang['discord_visitor_logger_auto_ban'] = 'საეჭვო IP მისამართების ავტომატური დაბლოკვა';
$lang['discord_visitor_logger_auto_ban_tip'] = 'ბრაუზერის ანაბეჭდის დამთხვევით საეჭვო ტრაფიკის აღმოჩენისას ავტომატურად გამოიყენეთ IP-ის დროებითი დაბლოკვა.';
$lang['discord_visitor_logger_ban_duration'] = 'დროებითი დაბლოკვის ხანგრძლივობა';
$lang['discord_visitor_logger_ban_duration_tip'] = 'საათების რაოდენობა, რომლის განმავლობაშიც საეჭვო IP მისამართი დარჩება დაბლოკილი. მუდმივი დაბლოკვისთვის მიუთითეთ 0.';
$lang['discord_visitor_logger_fingerprint_threshold'] = 'ანაბეჭდის IP ზღვარი';
$lang['discord_visitor_logger_fingerprint_threshold_tip'] = 'სხვადასხვა IP მისამართის რაოდენობა, რომლებიც 10 წუთის განმავლობაში ერთსა და იმავე ბრაუზერის ანაბეჭდს იზიარებენ და რომლის შემდეგაც ტრაფიკი საეჭვოდ ითვლება.';
$lang['discord_visitor_logger_webhook_url'] = 'დისკორდის webhook-ის URL';
$lang['discord_visitor_logger_webhook_url_tip'] = 'შეიყვანეთ დისკორდის webhook-ის URL, რომელსაც ექსკლუზიურად იყენებს დანამატი დისკორდის ვიზიტორთა ჟურნალი ვიზიტორთა შეტყობინებების გასაგზავნად. ეს პარამეტრი სპეციფიკურია ამ დანამატისთვის და არ იზიარება დისკორდის სხვა ინტეგრაციებთან.';
