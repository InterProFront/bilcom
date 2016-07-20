<?php

return [

    'static_all_site' => [
        'images' => ['logo'],
        'stringfields' => ['phone', 'map_link', 'copyright', 'adress', 'mail']
    ],
    'static_main_page' => [
        'title' => 'Безлимитный интернет в офис в Алматы',
        'stringfields' => ['unlimit_text', 'tarif_h1', 'sales_text', 'speed_h1', 'speed_text', 'individual_h1', 'individual_text','page_title'],
        'groups' => [
            'advantage' => [
                'stringfields' => ['adv_text']
            ],
        ]
    ],
    'static_connect' => [
        'title' => 'Как подключиться',
        'stringfields' => ['connect_text','page_title'],
        'groups' => [
            'steps' => [
                'stringfields' => ['step_title'],
                'textfields' => ['step_text']
            ]
        ]
    ],
    'static_about_company' => [
        'title' => 'О Компании',
        'images' => ['head'],
        'stringfields'=> ['page_title'],
        'textfields' => ['about_company', 'right_text', 'consult_text']
    ],
    'dom_rollback' => [
        'title' => 'Отзывы клиентов',
        'groups' => [
            'comment' => [
                'images' => ['avatar'],
                'stringfields' => ['name', 'prof', 'speed'],
                'textfields' => ['comment_text'],
            ]
        ]
    ],
    'dom_tarifs' => [
        'title' => 'Безлимитные интернет-тарифы в офис',
        'stringfields' => ['tarif_text', 'free_connect','page_title'],
        'groups' => [
            'tarif_adv' => [
                'images' => ['icon'],
                'stringfields' => ['adv_text']
            ],
            'tarif_category' => [
                'strinfields' => ['tarif_title'],
                'textfields' => ['about_tarif'],
            ],
            'tarif' => [
                'owner' => 'tarif_category',
                'stringfields' => ['tarif_name'],
                'images' => ['tarif_pict', 'hover_pict'],
            ],
            'tarif_fact' => [
                'owner' => 'tarif_category',
                'images' => ['fact'],
                'textfields' => ['fact_text']
            ]
        ]
    ],

    'dom_all_images' => [
        'groups' => [
            'images_set' => [
                'images' => ['text_pict']
            ]
        ]
    ],
    'fidback' => [
        'stringfields' => ['mail_rec','mail_username','site_name'],
        'groups' => [
            'application' => [
                'stringfields' => ['address','name','phone','speed'],
                'bools'         => ['is_public','mailed']
            ],
            'consultation'     => [
                'stringfields' => ['name','phone'],
                'textfields'   => ['comment'],
                'numbs'        => ['service_id'],
                'bools'        => ['mailed']
            ]
        ]
    ]

];
