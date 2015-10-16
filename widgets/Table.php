<?php

namespace app\widgets;

use yii\data\ArrayDataProvider;
use yii\grid\GridView;

class Table extends GridView
{
    use BoxTrait;

    public $data = [];

    public function init()
    {
        $this->dataProvider = new ArrayDataProvider([
            'allModels' => $this->data,
            'pagination' => false,
        ]);

        $this->layout = '{items}';

        parent::init();

    }

    public function run() {

        if ($this->box) {
            self::boxBegin($this->box);
        }

        parent::run();

        if ($this->box) {
            self::boxEnd();
        }

    }

}