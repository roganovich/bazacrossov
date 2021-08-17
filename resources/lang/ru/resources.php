<?php

return [

    /*
    |--------------------------------------------------------------------------
    | English Application App Specific Resources
    |--------------------------------------------------------------------------
    */

    'article' => [
        'create' => 'Добавить',
        'edit'   => 'Изменить',
        'fields' => [
            'category_id'  => 'Категория',
            'content'      => 'Содержание',
            'description'  => 'Описание',
            'published_at' => 'Опубликован',
            'title'        => 'Название',
            'file'         => 'Файл',
            'price'        => 'Цена',
            'thumb'        => 'Путь к иконке',
        ],
        'index'  => 'Материалы',
        'show'   => 'Подробнее'
    ],
    'category' => [
        'create' => 'Добавить',
        'edit'   => 'Изменить',
        'fields' => [
            'article_count' => 'Кол-во',
            'description'   => 'Подрробное описание',
            'title'         => 'Название'
        ],
        'index'  => 'Категории',
        'show'   => 'Подробнее'
    ],
    'download' => [
        'fields' => [
            'link'  => 'Файл',
            'ip'  => 'Ip',
            'download_at'  => 'Время',
        ],
        'index'  => 'Скачивания',
    ],
    'dashboard' => [
        'fields' => [
            'alexa_local'     => 'Alexa Local',
            'alexa_world'     => 'Alexa World',
            'average_time'    => 'Average Time',
            'bounce_rate'     => 'Bounce Rate',
            'browsers'        => 'Browsers',
            'chart_country'   => 'Country',
            'chart_region'    => 'Region',
            'chart_visitors'  => 'Visitors',
            'entrance_pages'  => 'Entrance',
            'exit_pages'      => 'Exit',
            'keywords'        => 'Keywords',
            'os'              => 'OS',
            'page_visits'     => 'Page Visits',
            'pages'           => 'Pages',
            'region_visitors' => 'Region Visitors',
            'time_pages'      => 'Time',
            'total_visits'    => 'Total Visits',
            'traffic_sources' => 'Traffic Sources',
            'unique_visits'   => 'Unique Visits',
            'visitors'        => 'Visitors',
            'visits'          => 'Visits',
            'visits_today'    => 'Visits Today',
            'world_visitors'  => 'World Visitor Distribution'
        ],
        'index' => 'Консоль'
    ],
    'elfinder' => [
        'index' => 'Файлы',
    ],
    'page' => [
        'create' => 'Добавить',
        'edit'   => 'Изменить',
        'fields' => [
            'content'      => 'Содержимое',
            'description'  => 'Подробное описание',
            'parent_id'    => 'Родитель',
            'title'        => 'Название',
        ],
        'index'  => 'Страницы',
        'show'   => 'Показать'
    ],
    'parent' => [
        'fields' => [
            'title' => 'Родитель',
        ]
    ],
    'user' => [
        'create' => 'Добавить',
        'edit'   => 'Изменить',
        'fields' => [
            'email'                 => 'Email',
            'ip_address'            => 'IP',
            'logged_in_at'          => 'Login At',
            'logged_out_at'         => 'Logout At',
            'password'              => 'Password',
            'password_confirmation' => 'Password Confirm'
        ],
        'index'  => 'Пользователи',
        'show'   => 'Показать'
    ]
];
