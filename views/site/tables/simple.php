<?php

/* @var $this app\components\View */

use app\components\Html;
use app\widgets\Table;
use yii\bootstrap\Progress;
use yii\widgets\Pjax;

$this->title = 'Simple Tables';
$this->subTitle = 'preview of simple tables';

$labels = ['#', 'Task', 'Progress', 'Label'];

$data = [
    ['Update software', 55, 'danger', 'red'],
    ['Clean database', 70, 'warning', 'yellow'],
    ['Cron job running', 30, 'info', 'blue'],
    ['Fix and squish bugs', 90, 'success', 'green'],
];

$models = [];

$cnt = 0;
foreach ($data as $datum) {
    $models[] = [
        '#' => ++$cnt . '.',
        'task' => $datum[0],
        'progress' => Progress::widget([
            'percent' => $datum[1],
            'options' => [
                'class' => 'progress-xs',
            ],
            'barOptions' => ['class' => 'progress-bar-' . $datum[2]],
        ]),
        'label' => Html::badge($datum[1] . '%', 'bg-' . $datum[3]),

    ];
}

$columns = [
    '#',
    'task',
    'progress:html',
    'label:html',
];

?>


<div class="row">
    <div class="col-xs-6">
        <?= Table::widget([
            'box' => [
                'type' => 'primary',
                'header' => [
                    'title' => 'Bordered Table',
                ]
            ],
            'data' => $models,
            'columns' => $columns
        ]) ?>
    </div><!-- /.col -->
</div><!-- /.row -->