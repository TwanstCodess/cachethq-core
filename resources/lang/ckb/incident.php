<?php

return [
    'title' => 'ڕووداوەکان',
    'resource_label' => 'ڕووداو|ڕووداوەکان',
    'status' => [
        'investigating' => 'لە لێکۆڵینەوەدایە',
        'identified' => 'ناسراوە',
        'watching' => 'چاودێری دەکرێت',
        'fixed' => 'چارەسەرکرا',
        'reported' => 'راپۆرت کرا',
    ],
    'edit_button' => 'دەستکاری ڕووداو',
    'new_button' => 'زیادکردنی ڕووداو',
    'no_incidents_reported' => 'هیچ ڕووداوێک راپۆرت نەکراوە.',
    'timeline' => [
        'past_incidents_header' => 'ڕووداوەکانی ڕابردو',
        'recent_incidents_header' => 'دوایین ڕووداوەکان',
        'no_incidents_reported_between' => 'هیچ ڕووداوێک راپۆرت نەکراوە لەنێوان :from و :to',
        'navigate' => [
            'previous' => 'پێشووتر',
            'today' => 'ئەمڕۆ',
            'next' => 'دواتر',
        ],
    ],
    'list' => [
        'headers' => [
            'name' => 'ناو',
            'status' => 'دۆخ',
            'visible' => 'دیار',
            'stickied' => 'جێگیرکراو',
            'occurred_at' => 'ڕووداو لە',
            'notified_subscribers' => 'بەشداریوانی ئاگادارکراو',
            'created_at' => 'دروستکراوە لە',
            'updated_at' => 'نوێکرایەوە لە',
            'deleted_at' => 'سڕاوەتەوە لە',
        ],
        'actions' => [
            'record_update' => 'تۆمارکردنی نوێکردنەوە',
            'view_incident' => 'بینینی ڕووداو',
        ],
        'empty_state' => [
            'heading' => 'ڕووداوەکان',
            'description' => 'ڕووداوەکان بەکاردێن بۆ پەیامدان و چاودێری دۆخی خزمەتگوزاریەکانت.',
        ],
    ],
    'form' => [
        'name_label' => 'ناو',
        'status_label' => 'دۆخ',
        'message_label' => 'پەیام',
        'occurred_at_label' => 'ڕووداو لە',
        'occurred_at_helper' => 'ئەگەر ئەم خانەیە بە بەتاڵ جێبهێڵدرێت، بەرواری دروستکردنی ڕووداو بەکاردێت.',
        'visible_label' => 'دیار',
        'user_label' => 'بەکارهێنەر',
        'user_helper' => 'ئەو بەکارهێنەرەی ڕووداوەکەی راپۆرت کردوە.',
        'notifications_label' => 'ئاگادارکردنەوەی بەشداریوان؟',
        'stickied_label' => 'ڕووداو جێگیر بکرێت؟',
        'guid_label' => 'UUID ـی ڕووداو',
        'add_component' => [
            'action_label' => 'زیادکردنی کۆمپوونەنت',
            'header' => 'کۆمپوونەنتەکان',
            'component_label' => 'کۆمپوونەنت',
            'status_label' => 'دۆخ',
        ],
    ],
    'record_update' => [
        'success_title' => 'ڕووداو نوێکرایەوە - :name',
        'success_body' => 'نوێکردنەوەیەک بۆ ڕووداوێک بڵاوکراوە.',
        'form' => [
            'message_label' => 'پەیام',
            'status_label' => 'دۆخ',
            'user_label' => 'بەکارهێنەر',
            'user_helper' => 'کێ ئەم ڕووداوەی راپۆرت کرد.',
        ],
    ],
    'overview' => [
        'total_incidents_label' => 'کۆی گشتی ڕووداوەکان',
        'total_incidents_description' => 'ژمارەی هەموو ڕووداوەکان',
    ],
];
