<?php

/* @var $this app\components\View */

use app\widgets\Box;
use ekaragodin\bootstrap\Slider;
use yii2mod\slider\IonSlider;

$this->title = 'Sliders';
$this->subTitle = 'range sliders';

$this->registerCssFile('/plugins/bootstrap-slider/slider.css', ['depends' => 'ekaragodin\bootstrap\SliderAsset']);

?>

<div class="row">
    <div class="col-xs-12">
        <?= Box::begin([
            'type' => 'primary',
            'header' => [
                'title' => 'Ion Slider',
            ]
        ]) ?>
                <div class="row margin">
                    <div class="col-sm-6">
                        <?= IonSlider::widget([
                            'name' => "range_1",
                            'type' =>'double',
                            'pluginOptions' => [
                                'min' => 0,
                                'max' => 5000,
                                'from' => 1000,
                                'to' => 4000,
                                'step' =>1,
                                'prefix' => "$",
                                'prettify' => false,
                                'grid' => true,
                            ]
                        ]); ?>
                    </div>

                    <div class="col-sm-6">
                        <?= IonSlider::widget([
                            'name' => "range_2",
                            'type' =>'double',
                            'pluginOptions' => [
                                'min' => 1000,
                                'max' => 100000,
                                'from' => 30000,
                                'to' => 90000,
                                'step' => 500,
                                'postfix' => ' &euro;',
                                'grid' => true,
                            ]
                        ]); ?>
                    </div>
                </div>
                <div class="row margin">
                    <div class="col-sm-6">
                        <?= IonSlider::widget([
                            'name' => "range_5",
                            'type' =>'single',
                            'pluginOptions' => [
                                'min' =>  0,
                                'max' =>  10,
                                'step' => 0.1,
                                'postfix' =>  " mm",
                                'prettify' =>  false,
                                'grid' =>  true
                            ]
                        ]); ?>
                    </div>
                    <div class="col-sm-6">
                        <?= IonSlider::widget([
                            'name' => "range_6",
                            'type' =>'single',
                            'pluginOptions' => [
                                'min' =>  -50,
                                'max' =>  50,
                                'step' => 1,
                                'from' => 0,
                                'postfix' =>  "°",
                                'prettify' =>  false,
                                'grid' =>  true
                            ]
                        ]); ?>
                    </div>
                </div>
                <div class="row margin">
                    <div class="col-sm-12">
                        <?= IonSlider::widget([
                            'name' => "range_4",
                            'type' =>'single',
                            'pluginOptions' => [
                                'min' => 10000,
                                'max' => 100000,
                                'postfix' => " light years",
                                'from' => 55000,
                                'hide_min_max' => true,
                                'hide_from_to' => false,
                            ]
                        ]); ?>
                    </div>
                </div>
        <?= app\widgets\Box::end() ?>
    </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
    <div class="col-xs-12">
        <?= Box::begin([
            'type' => 'primary',
            'header' => [
                'title' => 'Bootstrap Slider',
            ]
        ]) ?>
                <div class="row margin">
                    <div class="col-sm-6">
                        <?php foreach (['red', 'blue', 'green', 'yellow', 'aqua', 'purple'] as $color) : ?>
                        <?= Slider::widget([
                            'name' => 'price',
                            'value' => [-100, 100],
                            'options' => [
                                'class' => ['form-control'],
                                'data' => [
                                    'slider-min' => -200,
                                    'slider-max' => 200,
                                    'slider-step' => 5,
                                    'slider-orientation' => 'horizontal',
                                    'slider-selection' => 'before',
                                    'slider-tooltip' => 'show',
                                    'slider-id' => $color,
                                ],
                            ],
                        ]) ?>
                        <p>data-slider-id="<?= $color ?>"</p>
                        <?php endforeach ?>
                    </div>
                    <div class="col-sm-6 text-center">
                        <?php foreach (['red', 'blue', 'green', 'yellow', 'aqua', 'purple'] as $color) : ?>
                        <?= Slider::widget([
                            'name' => 'price',
                            'value' => [-100, 100],
                            'options' => [
                                'class' => ['form-control'],
                                'data' => [
                                    'slider-min' => -200,
                                    'slider-max' => 200,
                                    'slider-step' => 5,
                                    'slider-orientation' => 'vertical',
                                    'slider-selection' => 'before',
                                    'slider-tooltip' => 'show',
                                    'slider-id' => $color,
                                ],
                            ],
                        ]) ?>
                        <?php endforeach ?>
                    </div>
                </div>
        <?= app\widgets\Box::end() ?>
    </div><!-- /.col -->
</div><!-- /.row -->