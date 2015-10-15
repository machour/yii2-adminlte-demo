<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Box extends Widget {

    public static $config = [
        'type' => 'solid',
        'noPadding' => false,
        'header' => [
            'title' => '',
            'baseOptions' => [
                'collapse' => true,
                'remove' => true,
            ]
        ],
        'footer' => '',
    ];

    public static function begin($config = []) {

        self::$config = ArrayHelper::merge(self::$config, $config);

        echo Html::beginTag('div', ['class' => 'box box-' . self::$config['type']]);

        if (!empty(self::$config['header']['title'])) {
            $header = self::$config['header'];
            echo Html::beginTag('div', ['class' => 'box-header']);

            if (!empty($header['title'])) {
                echo Html::tag('h3', Html::encode($header['title']), ['class' => 'box-title']);
            }

            if (array_sum($header['baseOptions'])) {
                echo Html::beginTag('div', ['class' => 'box-tools pull-right']);

                if ($header['baseOptions']['collapse']) {
                    echo self::tool('collapse', 'minus');
                }
                if ($header['baseOptions']['remove']) {
                    echo self::tool('remove', 'times');
                }

                echo Html::endTag('div');
            }

            echo Html::endTag('div');
        }

        $class = 'box-body';
        if (self::$config['noPadding']) {
            $class .= ' no-padding';
        }
        echo Html::beginTag('div', ['class' => $class]);
    }

    public static function end() {
        echo Html::endTag('div');
        if (!empty(self::$config['footer'])) {
            echo Html::beginTag('div', ['class' => 'box-footer']);
            echo self::$config['footer'];
            echo Html::endTag('div');
        }
        echo Html::endTag('div');
    }

    private static function tool($widget, $icon) {
        return Html::tag(
            'button',
            Html::tag('i', null, ['class' => 'fa fa-' . $icon]),
            ['data-widget' => $widget, 'class' => 'btn btn-box-tool']
        );
    }

}