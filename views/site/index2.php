<?php

/* @var $this app\components\View */

use app\components\Html;
use app\widgets\Box;
use app\widgets\Table;
use app\widgets\Timeline;
use machour\sparkline\Sparkline;

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

?>

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <?= app\widgets\InfoBox::widget([
            'text' => 'CPU TRAFFIC',
            'number' => '90%',
            'icon' => 'gear'
        ]) ?>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <?= app\widgets\InfoBox::widget([
            'bg' => 'bg-red',
            'icon' => 'google-plus',
            'text' => 'LIKES',
            'number' => '41,410',
        ]) ?>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <?= app\widgets\InfoBox::widget([
            'bg' => 'bg-green',
            'icon' => 'shopping-cart',
            'text' => 'SALES',
            'number' => '760',
        ]) ?>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <?= app\widgets\InfoBox::widget([
            'bg' => 'bg-yellow',
            'icon' => 'users',
            'text' => 'NEW MEMBERS',
            'number' => '2,000',
        ]) ?>
    </div>

</div>

<div class="row">
    <div class="col-md-8">
        <?= Box::begin([
            'type' => 'success',
            'noPadding' => true,
            'header' => [
                'title' => 'Timeline',
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
                    <div class="description-block margin-bottom">
                        <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                        <h5 class="description-header">8390</h5>
                        <span class="description-text">Visits</span>
                    </div><!-- /.description-block -->
                    <div class="description-block margin-bottom">
                        <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                        <h5 class="description-header">30%</h5>
                        <span class="description-text">Referrals</span>
                    </div><!-- /.description-block -->
                    <div class="description-block">
                        <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                        <h5 class="description-header">70%</h5>
                        <span class="description-text">Organic</span>
                    </div><!-- /.description-block -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <?= Box::end() ?>
    </div>
    <div class="col-md-4">
        <?= app\widgets\InfoBox::widget([
            'bg' => 'bg-yellow',
            'bgFill' => true,
            'icon' => 'tag',
            'text' => 'INVENTORY',
            'number' => '5,200',
            'progress' => '50',
            'progressText' => '50% Increase in 30 Days',
        ]) ?>
        <?= app\widgets\InfoBox::widget([
            'bg' => 'bg-green',
            'bgFill' => true,
            'icon' => 'heart',
            'text' => 'MENTIONS',
            'number' => '92,050',
            'progress' => '20',
            'progressText' => '20% Increase in 30 Days',
        ]) ?>
        <?= app\widgets\InfoBox::widget([
            'bg' => 'bg-red',
            'bgFill' => true,
            'icon' => 'download',
            'text' => 'DOWNLOADS',
            'number' => '114,381',
            'progress' => '70',
            'progressText' => '70% Increase in 30 Days',
        ]) ?>
        <?= app\widgets\InfoBox::widget([
            'bg' => 'bg-aqua',
            'bgFill' => true,
            'icon' => 'comment',
            'text' => 'DIRECT MESSAGES',
            'number' => '163,921',
            'progress' => '40',
            'progressText' => '40% Increase in 30 Days',
        ]) ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <?= Timeline::widget([
            'box' => [
                'type' => 'info',
                'header' => [
                    'title' => 'Timeline',
                ]
            ],
            'data' => [
                ['date' => '12 Juin 2015', 'items' => [
                    [
                        'time' => 'il y a 30 secondes',
                        'header' => 'header',
                        'body' => 'body',
                        'footer' => 'footer',
                    ],
                    [
                        'time' => 'il y a 20 secondes',
                        'header' => 'header2',
                        'body' => 'body2',
                        'footer' => 'footer2',
                    ]
                ]]
            ]
        ]) ?>

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
</div>

