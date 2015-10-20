<?php

namespace app\widgets;


use app\components\Html;

class Breadcrumbs extends \yii\widgets\Breadcrumbs
{

    public function init() {
        $this->homeLink = [
            'label' => Html::fa('dashboard') .  ' Home',
            'url' => ['site/index'],
            'encode' => false,
        ];
        parent::init();
    }
}