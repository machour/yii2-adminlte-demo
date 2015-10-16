<?php

namespace app\widgets;

use yii\base\Widget;

class Box extends Widget  {

    use BoxTrait;

    public static $config = [];

    public static function begin($config = []) {
        self::boxBegin($config);
    }

    public static function end() {
        self::boxEnd();
    }

}