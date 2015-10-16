<?php

/* @var $this app\components\View */

use app\widgets\Box;
use machour\adminlte\widgets\Timeline;
use machour\sparkline\Sparkline;

$this->title = 'Timeline';
$this->subTitle = 'example';

?>



<div class="row">
    <div class="col-md-12">

        <?= Box::begin([
            'type' => 'info',
            'header' => [
                'title' => 'Timeline',
            ]
        ]) ?>


        <?= Timeline::widget([
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

        <?= app\widgets\Box::end() ?>

    </div>

    <div class="row">
        <div class="col-md-8">
            <p class="text-center">
                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
            </p>
            <div class="chart">
                <!-- Sales Chart Canvas -->
                <canvas id="salesChart" style="height: 180px;"></canvas>
                <canvas id="pieChart" style="height: 180px;"></canvas>
            </div><!-- /.chart-responsive -->
        </div><!-- /.col -->
    </div>
    <!--
        <?= Sparkline::widget([
        'data' => [1, 2, 3],
        'clientOptions' => [

        ]
    ]); ?>


    -->
</div>
