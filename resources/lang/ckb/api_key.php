<?php

return [
    'resource_label' => 'کلیلەکانی API|کلیلەکانی API',
    'show_token' => [
        'heading' => 'Token ـی API ـت دروستکرا',
        'description' => 'تکایە Token ـی API بکۆپی بکە. بۆ هۆکاری پاراستن، ئەمە دووبارە نیشان نەدەدرێت.',
        'copy_tooltip' => 'Token کۆپی کرا!',
    ],
    'abilities_label' => ':ability :resource',
    'form' => [
        'name_label' => 'ناوی Token',
        'expires_at_label' => 'بەسەرچووە لە',
        'expires_at_helper' => 'لە نیوەشەوە بەسەر دەچێت. بە بەتاڵ جێبهێڵە بۆ ئەوەی بەسەرنچێت.',
        'expires_at_validation' => 'بەرواری بەسەرچوون پێویستە لە داهاتوو بێت.',
        'abilities_label' => 'مۆڵەتەکان',
        'abilities_hint' => 'ئەگەر بە بەتاڵ جێبهێڵیت، Token ـەکە دەبێتەوە بە هەموو مۆڵەتەکان.',
    ],
    'list' => [
        'actions' => [
            'revoke' => 'هەڵوەشاندنەوە',
        ],
        'headers' => [
            'name' => 'ناوی Token',
            'abilities' => 'مۆڵەتەکان',
            'created_at' => 'دروستکراوە لە',
            'expires_at' => 'بەسەر دەچێت لە',
            'updated_at' => 'نوێکرایەوە لە',
        ],
    ],
];
