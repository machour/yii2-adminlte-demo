<?php

namespace app\components;

class Html extends \yii\bootstrap\Html
{

    public static function badge($label, $bg = 'bg-blue')
    {
        return Html::tag('span', $label, ['class' => 'badge ' . $bg]);
    }

}