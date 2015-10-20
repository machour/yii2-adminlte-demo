<?php

namespace app\widgets;

use app\components\Html;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;

class Table extends GridView
{
    use BoxTrait;

    public $type = 'table-bordered';

    public $data = [];

    public $responsive = true;

    public function init()
    {

        $this->tableOptions = ['class' => 'table ' . $this->type];

        $this->dataProvider = new ArrayDataProvider([
            'allModels' => $this->data,
            'pagination' => false,
        ]);

        $this->layout = '{items}';

        parent::init();
    }

    public function run() {

        if ($this->box) {
            if ($this->responsive) {
                $this->box['body']['class'] = 'table-responsive';
            }
            self::boxBegin($this->box);
        } elseif ($this->responsive) {
            Html::beginTag('div', ['class' => 'table-responsive']);
        }

        parent::run();

        if ($this->box) {
            self::boxEnd();
        } elseif ($this->responsive) {
            Html::endTag('div');
        }

    }

}