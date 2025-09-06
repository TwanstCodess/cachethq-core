<?php

return [
    'resource_label' => 'خشتەی کات|خشتەکانی کات',
    'list' => [
        'headers' => [
            'name' => 'ناو',
            'status' => 'دۆخ',
            'scheduled_at' => 'پلاندانراو بۆ',
            'completed_at' => 'تەواو کرا لە',
            'created_at' => 'دروستکراوە لە',
            'updated_at' => 'نوێکرایەوە لە',
            'deleted_at' => 'سڕاوەتەوە لە',
        ],
        'empty_state' => [
            'heading' => 'خشتەکانی کات',
            'description' => 'پلاندان و پلاندانکردنی چاودێریەکانت بکە.',
        ],
        'actions' => [
            'record_update' => 'تۆمارکردنی نوێکردنەوە',
            'complete' => 'تەواوکردنی چاودێری',
        ],
    ],
    'form' => [
        'name_label' => 'ناو',
        'message_label' => 'پەیام',
        'scheduled_at_label' => 'دەستپێک',
        'completed_at_label' => 'کۆتایی',
    ],
    'add_update' => [
        'success_title' => 'خشتەی کات نوێکرایەوە - :name',
        'success_body' => 'نوێکردنەوەی خشتەی کات بڵاوکراوە.',
        'form' => [
            'message_label' => 'پەیام',
            'completed_at_label' => 'تەواو کرا لە',
        ],
    ],
    'status' => [
        'upcoming' => 'لێرە دێت',
        'in_progress' => 'چالاک',
        'complete' => 'تەواو',
    ],
    'planned_maintenance_header' => 'چاودێری پلاندانراو',
];
