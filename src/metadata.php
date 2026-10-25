<?php

/**
 * Plugin Information File
 *
 * Provides metadata for the OAuth Authentication plugin, allowing the
 * plugin manager and marketplace to identify, display, and manage it.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  Discord Visitor Logger
 * @category    Metadata
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

return [
	// Info
	'name' => 'Discord Visitor Logger',
	'description' => 'Receive Discord notifications when new visitors access your {platform_name} application.',
	'version' => '0.0.1',
	'version_id' => 1,
	'repository' => 'https://github.com/ciskeleton/discord-visitor-logger',
	'settings_uri' => 'settings/discord',

	// Presentation.
	'icon' => 'eye',
	'icon_fg' => '#ffffff',
	'icon_bg' => '#5865f2',

	// Author.
	'author' => [
		'name' => Platform::AUTHOR,
		'url' => Platform::AUTHOR_URL,
	],

	// License.
	'license' => [
		'name' => 'MIT',
		'url' => 'https://opensource.org/license/mit',
	],

	// Translations.
	'translations' => [
		// Arabic
		'arabic' => [
			'name' => 'مسجّل زوار ديسكورد',
			'description' => 'احصل على إشعارات عبر ديسكورد عند دخول زوار جدد إلى تطبيق {platform_name} الخاص بك.',
		],

		// Armenian
		'armenian' => [
			'name' => 'Դիսքորդ այցելուների գրանցող',
			'description' => 'Ստացեք Դիսքորդ ծանուցումներ, երբ նոր այցելուներ մուտք են գործում ձեր {platform_name} հավելվածում։',
		],

		// Azerbaijani
		'azerbaijani' => [
			'name' => 'Discord Ziyarətçi Qeydiyyatçısı',
			'description' => '{platform_name} tətbiqinizə yeni ziyarətçilər daxil olduqda Discord bildirişləri alın.',
		],

		// Bengali
		'bengali' => [
			'name' => 'ডিসকর্ড ভিজিটর লগার',
			'description' => 'আপনার {platform_name} অ্যাপ্লিকেশনে নতুন ভিজিটর প্রবেশ করলে ডিসকর্ড নোটিফিকেশন পান।',
		],

		// Brazilian Portuguese
		'brazilian' => [
			'name' => 'Registrador de Visitantes do Discord',
			'description' => 'Receba notificações do Discord quando novos visitantes acessarem sua aplicação {platform_name}.',
		],

		// Bulgarian
		'bulgarian' => [
			'name' => 'Дискорд Регистратор на посетители',
			'description' => 'Получавайте известия в Дискорд, когато нови посетители влязат в приложението ви {platform_name}.',
		],

		// Catalan
		'catalan' => [
			'name' => 'Registrador de Visitants de Discord',
			'description' => 'Rebeu notificacions de Discord quan nous visitants accedeixin a la vostra aplicació {platform_name}.',
		],

		// Simplified Chinese
		'chinese' => [
			'name' => 'Discord 访客记录器',
			'description' => '当新访客访问您的 {platform_name} 应用程序时，接收 Discord 通知。',
		],

		// Croatian
		'croatian' => [
			'name' => 'Discord zapisnik posjetitelja',
			'description' => 'Primajte Discord obavijesti kada novi posjetitelji pristupe vašoj aplikaciji {platform_name}.',
		],

		// Czech
		'czech' => [
			'name' => 'Záznamník návštěvníků Discord',
			'description' => 'Dostávejte oznámení na Discordu, když do vaší aplikace {platform_name} vstoupí noví návštěvníci.',
		],

		// Danish
		'danish' => [
			'name' => 'Discord Besøgslogger',
			'description' => 'Modtag Discord-notifikationer, når nye besøgende tilgår din {platform_name}-applikation.',
		],

		// Dutch
		'dutch' => [
			'name' => 'Discord Bezoekerslogger',
			'description' => 'Ontvang Discord-meldingen wanneer nieuwe bezoekers uw {platform_name}-applicatie bezoeken.',
		],

		// Estonian
		'estonian' => [
			'name' => 'Discordi Külastajate Logija',
			'description' => 'Saage Discordi teavitusi, kui uued külastajad kasutavad teie {platform_name} rakendust.',
		],

		// Filipino
		'filipino' => [
			'name' => 'Tagatala ng Bisita ng Discord',
			'description' => 'Tumanggap ng mga abiso sa Discord kapag may bagong bisita na nag-a-access sa iyong {platform_name} application.',
		],

		// Finnish
		'finnish' => [
			'name' => 'Discord-kävijälokittaja',
			'description' => 'Vastaanota Discord-ilmoituksia, kun uusia kävijöitä siirtyy {platform_name}-sovellukseesi.',
		],

		// French
		'french' => [
			'name' => 'Journal des visiteurs Discord',
			'description' => 'Recevez des notifications Discord lorsque de nouveaux visiteurs accèdent à votre application {platform_name}.',
		],

		// Georgian
		'georgian' => [
			'name' => 'დისკორდის ვიზიტორთა ჟურნალი',
			'description' => 'მიიღეთ დისკორდის შეტყობინებები, როდესაც ახალი ვიზიტორები შედიან თქვენს {platform_name} აპლიკაციაში.',
		],

		// German
		'german' => [
			'name' => 'Discord-Besucherprotokollierung',
			'description' => 'Erhalten Sie Discord-Benachrichtigungen, wenn neue Besucher auf Ihre {platform_name}-Anwendung zugreifen.',
		],

		// Greek
		'greek' => [
			'name' => 'Καταγραφέας Επισκεπτών Ντίσκορντ',
			'description' => 'Λάβετε ειδοποιήσεις Ντίσκορντ όταν νέοι επισκέπτες έχουν πρόσβαση στην εφαρμογή σας {platform_name}.',
		],

		// Hindi
		'hindi' => [
			'name' => 'डिस्कॉर्ड विज़िटर लॉगर',
			'description' => 'जब नए विज़िटर आपके {platform_name} एप्लिकेशन तक पहुँचते हैं, तो डिस्कॉर्ड सूचनाएं प्राप्त करें।',
		],

		// Hungarian
		'hungarian' => [
			'name' => 'Discord Látogatónapló',
			'description' => 'Kapjon Discord-értesítéseket, amikor új látogatók lépnek be a(z) {platform_name} alkalmazásába.',
		],

		// Indonesian
		'indonesian' => [
			'name' => 'Pencatat Pengunjung Discord',
			'description' => 'Terima notifikasi Discord saat pengunjung baru mengakses aplikasi {platform_name} Anda.',
		],

		// Italian
		'italian' => [
			'name' => 'Registro Visitatori Discord',
			'description' => 'Ricevi notifiche Discord quando nuovi visitatori accedono alla tua applicazione {platform_name}.',
		],

		// Japanese
		'japanese' => [
			'name' => 'ディスコード訪問者ロガー',
			'description' => '新しい訪問者があなたの {platform_name} アプリケーションにアクセスすると、ディスコード通知を受け取れます。',
		],

		// Khmer
		'khmer' => [
			'name' => 'កម្មវិធីកត់ត្រាអ្នកចូលមើល Discord',
			'description' => 'ទទួលការជូនដំណឹងតាម Discord នៅពេលអ្នកចូលមើលថ្មីចូលប្រើកម្មវិធី {platform_name} របស់អ្នក។',
		],

		// Korean
		'korean' => [
			'name' => '디스코드 방문자 로거',
			'description' => '새로운 방문자가 {platform_name} 애플리케이션에 접속하면 디스코드 알림을 받습니다.',
		],

		// Latvian
		'latvian' => [
			'name' => 'Discord Apmeklētāju Žurnāls',
			'description' => 'Saņemiet Discord paziņojumus, kad jūsu {platform_name} lietotnei piekļūst jauni apmeklētāji.',
		],

		// Lithuanian
		'lithuanian' => [
			'name' => 'Discord lankytojų registratorius',
			'description' => 'Gaukite „Discord“ pranešimus, kai nauji lankytojai pasiekia jūsų {platform_name} programą.',
		],

		// Malay
		'malay' => [
			'name' => 'Pencatat Pelawat Discord',
			'description' => 'Terima pemberitahuan Discord apabila pelawat baharu mengakses aplikasi {platform_name} anda.',
		],

		// Marathi
		'marathi' => [
			'name' => 'डिस्कॉर्ड व्हिजिटर लॉगर',
			'description' => 'जेव्हा नवीन अभ्यागत तुमच्या {platform_name} अ‍ॅप्लिकेशनमध्ये प्रवेश करतात, तेव्हा डिस्कॉर्ड सूचना प्राप्त करा.',
		],

		// Norwegian
		'norwegian' => [
			'name' => 'Discord Besøkslogger',
			'description' => 'Motta Discord-varsler når nye besøkende får tilgang til {platform_name}-applikasjonen din.',
		],

		// Persian
		'persian' => [
			'name' => 'ثبت‌کننده بازدیدکنندگان دیسکورد',
			'description' => 'هنگامی که بازدیدکنندگان جدید به برنامه {platform_name} شما دسترسی پیدا می‌کنند، اعلان‌های دیسکورد دریافت کنید.',
		],

		// Polish
		'polish' => [
			'name' => 'Rejestrator Odwiedzających Discord',
			'description' => 'Otrzymuj powiadomienia Discord, gdy nowi odwiedzający uzyskają dostęp do Twojej aplikacji {platform_name}.',
		],

		// European Portuguese
		'portuguese' => [
			'name' => 'Registador de Visitantes do Discord',
			'description' => 'Receba notificações do Discord quando novos visitantes acederem à sua aplicação {platform_name}.',
		],

		// Romanian
		'romanian' => [
			'name' => 'Jurnal de Vizitatori Discord',
			'description' => 'Primiți notificări Discord atunci când vizitatori noi accesează aplicația dvs. {platform_name}.',
		],

		// Russian
		'russian' => [
			'name' => 'Дискорд Регистратор Посетителей',
			'description' => 'Получайте уведомления в Дискорд, когда новые посетители заходят в ваше приложение {platform_name}.',
		],

		// Serbian (Latin)
		'serbian' => [
			'name' => 'Discord Dnevnik Posetilaca',
			'description' => 'Primajte Discord obaveštenja kada novi posetioci pristupe vašoj aplikaciji {platform_name}.',
		],

		// Slovak
		'slovak' => [
			'name' => 'Discord Záznamník Návštevníkov',
			'description' => 'Dostávajte oznámenia na Discorde, keď do vašej aplikácie {platform_name} vstúpia noví návštevníci.',
		],

		// Slovenian
		'slovenian' => [
			'name' => 'Discord Beležnik Obiskovalcev',
			'description' => 'Prejemajte Discord obvestila, ko novi obiskovalci dostopajo do vaše aplikacije {platform_name}.',
		],

		// Spanish
		'spanish' => [
			'name' => 'Registrador de Visitantes de Discord',
			'description' => 'Recibe notificaciones de Discord cuando nuevos visitantes accedan a tu aplicación {platform_name}.',
		],

		// Swahili
		'swahili' => [
			'name' => 'Kisajili cha Wageni cha Discord',
			'description' => 'Pokea arifa za Discord wakati wageni wapya wanapofikia programu yako ya {platform_name}.',
		],

		// Swedish
		'swedish' => [
			'name' => 'Discord Besökarloggare',
			'description' => 'Ta emot Discord-aviseringar när nya besökare öppnar din {platform_name}-applikation.',
		],

		// Traditional Chinese
		'taiwanese' => [
			'name' => 'Discord 訪客記錄器',
			'description' => '當新訪客存取您的 {platform_name} 應用程式時，接收 Discord 通知。',
		],

		// Tamil
		'tamil' => [
			'name' => 'டிஸ்கார்ட் பார்வையாளர் பதிவாளர்',
			'description' => 'புதிய பார்வையாளர்கள் உங்கள் {platform_name} பயன்பாட்டை அணுகும்போது டிஸ்கார்ட் அறிவிப்புகளைப் பெறுங்கள்.',
		],

		// Thai
		'thai' => [
			'name' => 'ตัวบันทึกผู้เยี่ยมชม ดิสคอร์ด',
			'description' => 'รับการแจ้งเตือนทาง ดิสคอร์ด เมื่อผู้เยี่ยมชมรายใหม่เข้าถึงแอปพลิเคชัน {platform_name} ของคุณ',
		],

		// Turkish
		'turkish' => [
			'name' => 'Discord Ziyaretçi Kaydedici',
			'description' => '{platform_name} uygulamanıza yeni ziyaretçiler eriştiğinde Discord bildirimleri alın.',
		],

		// Ukrainian
		'ukrainian' => [
			'name' => 'Дискорд Реєстратор Відвідувачів',
			'description' => 'Отримуйте сповіщення в Дискорд, коли нові відвідувачі заходять у ваш застосунок {platform_name}.',
		],

		// Urdu
		'urdu' => [
			'name' => 'ڈسکارڈ وزیٹر لاگر',
			'description' => 'جب نئے وزیٹرز آپ کے {platform_name} ایپلیکیشن تک رسائی حاصل کریں تو ڈسکارڈ اطلاعات حاصل کریں۔',
		],

		// Vietnamese
		'vietnamese' => [
			'name' => 'Trình ghi nhật ký khách truy cập Discord',
			'description' => 'Nhận thông báo Discord khi có khách truy cập mới truy cập vào ứng dụng {platform_name} của bạn.',
		],
	],
];
