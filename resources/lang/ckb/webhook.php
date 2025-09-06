<?php

return [
    'resource_label' => 'Webhook|Webhooks',
    'event_selection' => [
        'all' => 'هەموو ڕووداوەکان نێرە',
        'selected' => 'تەنها ڕووداوە هەڵبژێردراوەکان نێرە',
    ],
    'form' => [
        'url_label' => 'ناونیشانی Payload',
        'url_helper' => 'ڕووداوەکان بۆ ئەم URL ـە نێردرێن.',
        'secret_label' => 'کلیلە نهێنی',
        'secret_helper' => 'Payload بەو نهێنیەوە نیشانکراوە. زانیاری زیاتر لە *بەڵگەنامەی Webhook* دەتوانیت بدۆزیتەوە.',
        'description_label' => 'وەسف',
        'event_selection_label' => 'هەموو ڕووداوەکان نێرە؟',
        'events_label' => 'ڕووداوەکان',
        'edit_secret_label' => 'دەستکاری کلیلە نهێنی',
        'update_secret_label' => 'نوێکردنەوەی کلیلە نهێنی',
    ],
    'attempts' => [
        'heading' => 'هەوڵەکان',
        'empty_state' => 'هیچ هەوڵێک بۆ ئەم Webhook ـە نەدراوە.',
    ],
    'list' => [
        'headers' => [
            'url' => 'ناونیشانی Payload',
            'success_rate_24h' => 'ڕێژەی سەرکەوتن (24 کاتژمێر)',
        ],
    ],
];
