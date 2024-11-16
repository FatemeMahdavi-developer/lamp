<?php
function resize_image()
{
    $resizes = [
        'manager' => [
            'pic' => [
                [
                    '100' => '100',
                ],
                [
                    '30' => '30',
                ],
            ]
        ],
        'news_cat' => [
            'pic_banner' => [
                [
                    '1920' => '1080',
                ],
            ]
        ],
        'news' => [
            'pic' => [
                [
                    '900' => '800',
                ],
            ],
            'pic_banner'=>[
                [
                    '1920' => '1080',
                ],
            ]
        ],
        'content_news' => [
            'pic' => [
                [
                    '900' => '800',
                ],
            ],
            'pics' => [
                [
                    '1300' => '200',
                ],
                [
                    '700' => '700',
                ],

            ],
            'catalog' => [
                [
                    '1360' => '318',
                ],
                [
                    '1360' => '350',
                ],
            ],
            'video'=>[
                [
                    '1122'=>'333'
                ],
                [
                    '695'=>'333'
                ]
            ],
            'pic_video'=>[
                [
                    '1122'=>'333'
                ],
                [
                    '695'=>'333'
                ]
            ],
        ],
        'content_project' => [
            // 'pic' => [
            //     [
            //         '300' => '200',
            //     ],
            //     [
            //         '700' => '700',
            //     ],
            //     [
            //         '400' => '500',
            //     ],
            // ],
            'pics' => [
                [
                    '900' => '550',
                ],
                [
                    '900' => '900',
                ],
                [
                    '1920' => '1000',
                ],

            ],
            // 'catalog' => [
            //     [
            //         '1360' => '318',
            //     ],
            //     [
            //         '1360' => '350',
            //     ],
            // ],
            'video'=>[
                [
                    '1122'=>'333'
                ],
                // [
                //     '695'=>'333'
                // ]
            ],
            'pic_video'=>[
                [
                    '1920'=>'900'
                ],
                // [
                //     '695'=>'333'
                // ]
            ],
        ],
        'content_page' => [
            'pic' => [
                [
                    '300' => '200',
                ],
                [
                    '700' => '700',
                ],
                [
                    '400' => '500',
                ],
            ],
            'pics' => [
                [
                    '372' => '358',
                ],

            ],
            'catalog' => [
                [
                    '1360' => '318',
                ],
                [
                    '1360' => '350',
                ],
            ],
            'video'=>[
                [
                    '1122'=>'333'
                ],
                [
                    '695'=>'333'
                ]
            ],
            'pic_video'=>[
                [
                    '1122'=>'333'
                ],
                [
                    '695'=>'333'
                ]
            ],
        ],
        'content_product' => [
            // 'pic' => [
            //     [
            //         '300' => '200',
            //     ],
            //     [
            //         '78' => '78',
            //     ],
            // ],
            'pics' => [
                [
                    '78' => '78',
                ]
            ],
            // 'catalog' => [
            //     [
            //         '1360' => '318',
            //     ],
            //     [
            //         '1360' => '350',
            //     ],
            // ],
            // 'video'=>[
            //     [
            //         '1122'=>'333'
            //     ],
            //     [
            //         '695'=>'333'
            //     ]
            // ],
            // 'pic_video'=>[
            //     [
            //         '1122'=>'333'
            //     ],
            //     [
            //         '695'=>'333'
            //     ]
            // ],
        ],
        'banner_type_1' => [
            'pic' => [
                [
                    '1360' => '718',
                ],
            ],
            'pic_mobile' => [
                [
                    '620' => '600',
                ],
                [
                    '310' => '300',
                ],
            ]
        ],
        'banner_type_2' => [
            'pic' => [
                [
                    '1360' => '400',
                ],
            ]
        ],
        'instagram'=>[
            'pic' => [
                [
                    '274' => '264',
                ],
            ]
        ],
        'menu' => [
            'pic' => [
                [
                    '380' => '380',
                ],
            ]
        ],
        'product_cat' => [
            'pic' => [
                [
                    '160' => '160',
                ],
            ],
            'pic_banner' => [
                [
                    '1360' => '317',
                ],
            ],
        ],
        'project_cat' => [
            'pic' => [
                [
                    '25' => '25',
                ],
            ],
            'pic_banner' => [
                [
                    '1360' => '317',
                ],
            ],
        ],
        'project' => [
            'pic' => [
                [
                    '1170' => '605',
                ],
            ],
            'pic_banner' => [
                [
                    '1920' => '1080',
                ],
            ],
        ],
        'product'=>[
            'pic'=>[
                [
                    '470' => '470',
                ],
                [
                    '328' => '328',
                ],
                [
                    '234' => '234',
                ],
                [
                    '78' => '78',
                ]
            ],
            'pic_banner' => [
                [
                    '1360' => '317',
                ],
            ],
        ],
        'photo_cat' => [
            'pic_banner' => [
                [
                    '1360' => '317',
                ]
            ],
            'pic'=>[
                [
                    '372' => '303',
                ]
            ]
        ],
        'photo' => [
            'pic'=>[
                [
                    '372' => '303',
                ]
            ]
        ],
        'video_cat' => [
            'pic_banner' => [
                [
                    '1360' => '317',
                ]
            ],
            'pic'=>[
                [
                    '372' => '303',
                ]
            ]
        ],
        'video' => [
            'pic'=>[
                [
                    '372' => '303',
                ]
            ],
            'pic_banner' => [
                [
                    '1360' => '317',
                ]
            ]
        ],

    ];

    return $resizes;
}
