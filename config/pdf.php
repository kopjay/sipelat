<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'pdf_a'                 => false,
	'pdf_a_auto'            => false,
	'icc_profile_path'      => '',
	'font_path' => base_path('resources'),
	'font_data' => [
		'bookos' => [
			'R'  => 'BOOKOS.TTF',    // regular font
			'B'  => 'BOOKOS.TTF',       // optional: bold font
			'I'  => 'BOOKOS.TTF',     // optional: italic font
			'BI' => 'BOOKOS.TTF' // optional: bold-italic font
			//'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
			//'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
		]
		// ...add as many as you want.
	],
];
