<?php

namespace app\widgets;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

trait BoxTrait {

    public $box = false;

    public static $boxConfig = [
        'type' => 'box-solid',
        'noPadding' => false,
        'header' => [
            'title' => '',
            'class' => '',
            'baseOptions' => [
                'collapse' => true,
                'remove' => true,
            ]
        ],
        'body' => [
            'class' => ''
        ],
        'footer' => '',
    ];

    public static function boxBegin($boxConfig = []) {

        self::$boxConfig = ArrayHelper::merge(self::$boxConfig, $boxConfig);

        echo Html::beginTag('div', ['class' => 'box ' . self::$boxConfig['type']]);

        if (!empty(self::$boxConfig['header']['title'])) {
            $header = self::$boxConfig['header'];
            echo Html::beginTag('div', ['class' => 'box-header ' . $header['class']]);

            if (!empty($header['title'])) {
                echo Html::tag('h3', Html::encode($header['title']), ['class' => 'box-title']);
            }

            if (array_sum($header['baseOptions'])) {
                echo Html::beginTag('div', ['class' => 'box-tools pull-right']);

                if ($header['baseOptions']['collapse']) {
                    echo self::boxTool('collapse', 'minus');
                }
                if ($header['baseOptions']['remove']) {
                    echo self::boxTool('remove', 'times');
                }

                echo Html::endTag('div');
            }

            echo Html::endTag('div');
        }

        $class = 'box-body ';
        $class .= self::$boxConfig['body']['class'];
        if (self::$boxConfig['noPadding']) {
            $class .= ' no-padding';
        }
        echo Html::beginTag('div', ['class' => $class]);
    }

    static $footerUsed = false;
    public static function footer() {
        self::$footerUsed = true;
        echo Html::endTag('div');
        if (!empty(self::$boxConfig['footer'])) {
            echo Html::beginTag('div', ['class' => 'box-footer']);
            echo self::$boxConfig['footer'];
            echo Html::endTag('div');
        } else {
            echo Html::beginTag('div', ['class' => 'box-footer']);
        }
    }

    public static function boxEnd() {
        if (!self::$footerUsed) {
            echo Html::endTag('div');
            if (!empty(self::$boxConfig['footer'])) {
                echo Html::beginTag('div', ['class' => 'box-footer']);
                echo self::$boxConfig['footer'];
                echo Html::endTag('div');
            }
        } elseif (empty(self::$boxConfig['footer'])) {
            echo Html::endTag('div');
        }
        echo Html::endTag('div');
    }

    private static function boxTool($widget, $icon) {
        return Html::tag(
            'button',
            Html::tag('i', null, ['class' => 'fa fa-' . $icon]),
            ['data-widget' => $widget, 'class' => 'btn btn-box-tool']
        );
    }

}