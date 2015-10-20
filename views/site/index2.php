<?php

/* @var $this app\components\View */

use app\components\Html;
use app\widgets\Box;
use app\widgets\ChartJs;
use app\widgets\InfoBox;
use app\widgets\Table;
use machour\sparkline\Sparkline;
use yii\bootstrap\Progress;

$this->title = 'Dashboard';
$this->subTitle = 'Version 2.0';

$this->params['breadcrumbs'] = [
    'Dashboard',
];

$this->registerCssFile('/plugins/jvectormap/jquery-jvectormap-1.2.2.css');
$this->registerJsFile('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', ['depends' => 'yii\web\YiiAsset']);
$this->registerJsFile('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', ['depends' => 'yii\web\YiiAsset']);
$this->registerJsFile('/plugins/chartjs/Chart.min.js', ['depends' => 'yii\web\YiiAsset']);
$this->registerJsFile('js/pages/dashboard2.js', ['depends' => 'yii\web\YiiAsset']);


$data = [
    ['OR9842', 'Call of Duty IV', 'Shipped', 'success', [90,80,90,-70,61,-83,63], '#00a65a'],
    ['OR1848', 'Samsung Smart TV', 'Pending', 'warning', [90,80,-90,70,61,-83,68], '#f39c12'],
    ['OR7429', 'iPhone 6 Plus', 'Delivered', 'danger', [90,-80,90,70,-61,83,63], '#f56954'],
    ['OR7429', 'Samsung Smart TV', 'Processing', 'info', [90,80,-90,70,-61,83,63], '#00c0ef'],
    ['OR1848', 'Samsung Smart TV', 'Pending', 'warning', [90,80,-90,70,61,-83,68], '#f39c12'],
    ['OR7429', 'iPhone 6 Plus', 'Delivered', 'danger', [90,-80,90,70,-61,83,63], '#f56954'],
    ['OR9842', 'Call of Duty IV', 'Shipped', 'success', [90,80,90,-70,61,-83,63], '#00a65a'],
];

$models = [];

foreach ($data as $datum) {
    $models[] = [
        'Order ID' => Html::a($datum[0], ['site/index']),
        'Item' => $datum[1],
        'Status' => Html::aLabel($datum[2], $datum[3]),
        'Popularity' => Sparkline::widget(['clientOptions' => ['type' => 'bar', 'height' => 20, 'barColor' => $datum[5]], 'data' => $datum[4]]), // Html::badge($datum[1] . '%', 'bg-' . $datum[3]),
    ];
}

$columns = [
    'Order ID:html',
    'Item',
    'Status:html',
    'Popularity:raw',
];


$salesChartData = [
    'labels' => ["January", "February", "March", "April", "May", "June", "July"],
    'datasets' => [
        [
            'label' => "Electronics",
            'fillColor' => "rgb(210, 214, 222)",
            'strokeColor' => "rgb(210, 214, 222)",
            'pointColor' => "rgb(210, 214, 222)",
            'pointStrokeColor' => "#c1c7d1",
            'pointHighlightFill' => "#fff",
            'pointHighlightStroke' => "rgb(220,220,220)",
            'data' => [65, 59, 80, 81, 56, 55, 40]
        ],
        [
            'label' => "Digital Goods",
            'fillColor' => "rgba(60,141,188,0.9)",
            'strokeColor' => "rgba(60,141,188,0.8)",
            'pointColor' => "#3b8bba",
            'pointStrokeColor' => "rgba(60,141,188,1)",
            'pointHighlightFill' => "#fff",
            'pointHighlightStroke' => "rgba(60,141,188,1)",
            'data' => [28, 48, 40, 19, 86, 27, 90]
        ]
    ]
];

$salesChartOptions = [
    //Boolean - If we should show the scale at all
    'showScale' => true,
    //Boolean - Whether grid lines are shown across the chart
    'scaleShowGridLines' => false,
    //String - Colour of the grid lines
    'scaleGridLineColor' => "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    'scaleGridLineWidth' => 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    'scaleShowHorizontalLines' => true,
    //Boolean - Whether to show vertical lines (except Y axis)
    'scaleShowVerticalLines' => true,
    //Boolean - Whether the line is curved between points
    'bezierCurve' => true,
    //Number - Tension of the bezier curve between points
    'bezierCurveTension' => 0.3,
    //Boolean - Whether to show a dot for each point
    'pointDot' => false,
    //Number - Radius of each point dot in pixels
    'pointDotRadius' => 4,
    //Number - Pixel width of point dot stroke
    'pointDotStrokeWidth' => 1,
    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    'pointHitDetectionRadius' => 20,
    //Boolean - Whether to show a stroke for datasets
    'datasetStroke' => true,
    //Number - Pixel width of dataset stroke
    'datasetStrokeWidth' => 2,
    //Boolean - Whether to fill the dataset with a color
    'datasetFill' => true,
    //String - A legend template
    'legendTemplate' => "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    'maintainAspectRatio' => true,
    //Boolean - whether to make the chart responsive to window resizing
    'responsive' => true,
];



?>

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <?= InfoBox::widget([
            'text' => 'CPU TRAFFIC',
            'number' => '90%',
            'icon' => 'gear'
        ]) ?>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <?= InfoBox::widget([
            'bg' => 'bg-red',
            'icon' => 'google-plus',
            'text' => 'LIKES',
            'number' => '41,410',
        ]) ?>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <?= InfoBox::widget([
            'bg' => 'bg-green',
            'icon' => 'shopping-cart',
            'text' => 'SALES',
            'number' => '760',
        ]) ?>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <?= InfoBox::widget([
            'bg' => 'bg-yellow',
            'icon' => 'users',
            'text' => 'NEW MEMBERS',
            'number' => '2,000',
        ]) ?>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <?= Box::begin([
            'type' => '',
            'header' => [
                'title' => 'Monthly Recap Report',
            ]
        ]) ?>
        <div class="row">
            <div class="col-md-8">
                <p class="text-center">
                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p>

                <div class="chart">
                    <?= ChartJs::widget([
                        'type' => 'Line',
                        'data' => $salesChartData,
                        'clientOptions' => $salesChartOptions,
                        'options' => ['style' => 'height: 180px'],
                    ]);
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <p class="text-center">
                    <strong>Goal Completion</strong>
                </p>
                <?php foreach ([
                    ['label' => 'Add Products to Cart', 'progress' => 80, 'number' => 160, 'total' => 200, 'color' => 'aqua'],
                    ['label' => 'Complete Purchase', 'progress' => 80, 'number' => 310, 'total' => 400, 'color' => 'red'],
                    ['label' => 'Visit Premium Page', 'progress' => 80, 'number' => 480, 'total' => 800, 'color' => 'green'],
                    ['label' => 'Send Inquiries', 'progress' => 80, 'number' => 250, 'total' => 500, 'color' => 'yellow'],
                               ] as $item): ?>
                <div class="progress-group">
                    <span class="progress-text"><?= $item['label'] ?></span>
                    <span class="progress-number"><b><?= $item['number'] ?></b>/<?= $item['total'] ?></span>
                    <?= Progress::widget([
                        'percent' => $item['progress'],
                        'options' => [
                            'class' => 'sm',
                        ],
                        'barOptions' => ['class' => 'progress-bar-' . $item['color']],
                    ]) ?>
                </div>
                <?php endforeach ?>
            </div>

        </div>
        <?= Box::footer() ?>
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="description-block border-right">
                    <span class="description-percentage text-green"><?= Html::fa('caret-up') ?> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL REVENUE</span>
                </div><!-- /.description-block -->
            </div><!-- /.col -->
            <div class="col-sm-3 col-xs-6">
                <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><?= Html::fa('caret-left') ?> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                </div><!-- /.description-block -->
            </div><!-- /.col -->
            <div class="col-sm-3 col-xs-6">
                <div class="description-block border-right">
                    <span class="description-percentage text-green"><?= Html::fa('caret-up') ?> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                </div><!-- /.description-block -->
            </div><!-- /.col -->
            <div class="col-sm-3 col-xs-6">
                <div class="description-block">
                    <span class="description-percentage text-red"><?= Html::fa('caret-down') ?> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                </div><!-- /.description-block -->
            </div>
        </div>
        <?= Box::end() ?>
    </div>

</div>

<div class="row">
    <div class="col-md-8">
        <?= Box::begin([
            'type' => 'box-success',
            'noPadding' => true,
            'header' => [
                'title' => 'Visitors Report',
            ]
        ]) ?>
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div class="pad">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px;"></div>
                </div>
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-4">
                <div class="pad box-pane-right bg-green" style="min-height: 280px">
                    <?php foreach ([
                                       ['data' => [90,70,90,70,75,80,70], 'label' => 'Visits', 'number' => 8390],
                                       ['data' => [90,50,90,70,61,83,63], 'label' => 'Referrals', 'number' => '30%'],
                                       ['data' => [90,50,90,70,61,83,63], 'label' => 'Organic', 'number' => '70%'],
                                   ] as $item) : ?>
                        <div class="description-block margin-bottom">
                            <?= Sparkline::widget([
                                'options' => ['class' => 'pad'],
                                'clientOptions' => ['type' => 'bar', 'height' => 30, 'barColor' => '#ffffff'],
                                'data' => $item['data'],
                                'tag' => 'div',
                            ]) ?>
                            <h5 class="description-header"><?= $item['number'] ?></h5>
                            <span class="description-text"><?= $item['label'] ?></span>
                        </div><!-- /.description-block -->
                    <?php endforeach ?>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <?= Box::end() ?>

        <div class="row">
            <div class="col-md-6">
                <?= Box::begin([
                    'type' => 'box-warning',
                    'header' => [
                        'title' => 'Direct Chat',
                    ]
                ]) ?>
                <?= Box::end() ?>
            </div>
            <div class="col-md-6">
                <?= Box::begin([
                    'type' => 'box-danger',
                    'header' => [
                        'title' => 'Latest Members',
                    ]
                ]) ?>
                <?= Box::end() ?>
            </div>
        </div>

    </div>
    <div class="col-md-4">
        <?= InfoBox::widget([
            'bg' => 'bg-yellow',
            'bgFill' => true,
            'icon' => 'tag',
            'text' => 'INVENTORY',
            'number' => '5,200',
            'progress' => '50',
            'progressText' => '50% Increase in 30 Days',
        ]) ?>
        <?= InfoBox::widget([
            'bg' => 'bg-green',
            'bgFill' => true,
            'icon' => 'heart',
            'text' => 'MENTIONS',
            'number' => '92,050',
            'progress' => '20',
            'progressText' => '20% Increase in 30 Days',
        ]) ?>
        <?= InfoBox::widget([
            'bg' => 'bg-red',
            'bgFill' => true,
            'icon' => 'download',
            'text' => 'DOWNLOADS',
            'number' => '114,381',
            'progress' => '70',
            'progressText' => '70% Increase in 30 Days',
        ]) ?>
        <?= InfoBox::widget([
            'bg' => 'bg-aqua',
            'bgFill' => true,
            'icon' => 'comment',
            'text' => 'DIRECT MESSAGES',
            'number' => '163,921',
            'progress' => '40',
            'progressText' => '40% Increase in 30 Days',
        ]) ?>

        <?= Box::begin([
            'type' => '',
            'header' => [
                'title' => 'Browser Usage',
            ]
        ]) ?>
        <?= Box::end() ?>

    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <?= Table::widget([
            'box' => [
                'type' => 'box-info',
                'header' => [
                    'title' => 'Latest Orders',
                ],
                'noPadding' => true,
            ],
            'responsive' => true,
            'type' => 'table-striped',
            'data' => $models,
            'columns' => $columns
        ]) ?>
    </div>

    <div class="col-md-4">
        <?= Box::begin([
            'type' => 'box-primary',
            'header' => [
                'title' => 'Recently Added Products',
            ]
        ]) ?>
        <?= Box::end() ?>
    </div>
</div>

