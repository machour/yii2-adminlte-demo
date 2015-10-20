<?php

/* @var $this app\components\View */

use app\widgets\Flot;
use machour\flot\Plugin;

$this->title = 'Flot Charts';
$this->subTitle = 'Preview sample';

?>

<div class="row">
    <div class="col-xs-12">

    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <?php
        $sin = $cos = [];
        for ($i = 0; $i < 14; $i += 0.5) {
            $sin[] = [$i, sin($i)];
            $cos[] = [$i, cos($i)];
        }

        $line_data1 = [
            'data' =>  $sin,
            'color' => "#3c8dbc"
        ];
        $line_data2 = [
            'data' =>  $cos,
            'color' => "#00c0ef"
        ];

        echo Flot::widget([
            'box' => [
                'type' => 'primary',
                'header' => [
                    'title' => 'Line Chart',
                ],

            ],
            'data' => [
                $line_data1, $line_data2
            ],
            'options' => [
                'grid' => [
                    'hoverable' => true,
                    'borderColor' => "#f3f3f3",
                    'borderWidth' => 1,
                    'tickColor' => "#f3f3f3"
                  ],
                  'series' => [
                    'shadowSize' => 0,
                    'lines' => [
                        'show' => true
                    ],
                    'points' => [
                        'show' => true
                    ]
                  ],
                  'lines' => [
                    'fill' => false,
                    'color' => ["#3c8dbc", "#f56954"]
                  ],
                  'yaxis' => [
                    'show' => true,
                  ],
                  'xaxis' => [
                    'show' => true
                  ]

            ],
            'htmlOptions' => [
                'style' => 'height:300px;'
            ],

        ]); ?>


        <?php

        $areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
            [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
            [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]];

        echo Flot::widget([
            'box' => [
                'type' => 'primary',
                'header' => [
                    'title' => 'Full Width Area Chart',
                ],

            ],
            'data' => [$areaData],
            'options' => [
                'grid' => [
                    'borderWidth' => 0,
                ],
                'series' => [
                    'shadowSize' => 0,
                    'color' => '#00c0ef',
                ],
                'lines' => [
                    'fill' => true,
                ],
                'yaxis' => [
                    'show' => false,
                ],
                'xaxis' => [
                    'show' => false
                ]

            ],
            'htmlOptions' => [
                'style' => 'height:338px;',
                'class' => 'full-width-chart',
            ]
        ]);

        ?>
    </div>
    <div class="col-md-6">

        <?php

        $bar_data = [
            'data' => [["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9]],
            'color' => "#3c8dbc"
        ];


        echo Flot::widget([
            'box' => [
                'type' => 'primary',
                'header' => [
                    'title' => 'Bar Chart',
                ],
            ],
            'data' => [$bar_data],
            'options' => [
                'grid' => [
                    'borderWidth' => 1,
                    'borderColor' => "#f3f3f3",
                    'tickColor' => "#f3f3f3"
                ],
                'series' => [
                    'bars' => [
                        'show' => true,
                        'barWidth' => 0.5,
                        'align' => "center"
                    ]
                ],
                'xaxis' => [
                    'mode' => 'categories',
                    'tickLength' => 0,
                ]

            ],
            'htmlOptions' => [
                'style' => 'height:300px;',
            ],
            'plugins' => [Plugin::CATEGORIES],

        ]);

        ?>

        <?php

        $donutData = [
           ['label' => "Series2", 'data' => 30, 'color' => "#3c8dbc"],
           ['label' => "Series3", 'data' => 20, 'color' => "#0073b7"],
           ['label' => "Series4", 'data' => 50, 'color' => "#00c0ef"]
        ];

        echo Flot::widget([
            'box' => [
                'type' => 'primary',
                'header' => [
                    'title' => 'Donut Chart',
                ],
            ],
            'data' => $donutData,
            'options' => [
                'series' => [
                    'pie' => [
                        'show' => true,
                        'radius' => 1,
                        'innerRadius' => 0.5,
                        'label' => [
                            'show' => true,
                            'radius' => 2/3,
                            'formatter' => '',
                            'threshold' => 0.1
                        ]
                    ]
                ],
                'legend' => [
                    'show' => false,
                ]
            ],
            'htmlOptions' => [
                'style' => 'height:300px;',
            ],
            'plugins' => [Plugin::RESIZE, Plugin::PIE],

        ]);

        ?>

    </div>
</div>
