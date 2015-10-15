<?php

/* @var $this app\components\View */

use app\widgets\Box;
use machour\adminlte\widgets\Timeline;
use machour\sparkline\Sparkline;
use yii\bootstrap\Carousel;

$this->title = 'General UI';
$this->subTitle = 'Preview of UI elements';

$this->registerJsFile('js/pages/UI/general.js', ['depends' => 'yii\web\YiiAsset']);

?>

<div class="row">
    <div class="col-md-6">
        <?= Box::begin([
            'type' => 'success',
            'noPadding' => true,
            'header' => [
                'title' => 'Carousel',
            ]
        ]) ?>
        <?php

        echo Carousel::widget([
            'items' => [
                // the item contains only the image
                '<img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap"/>',
                // equivalent to the above
                ['content' => '<img src="http://placehold.it/900x500/ff0000/ffffff&text=I+Love+Bootstrap"/>'],
                // the item contains both the image and the caption
                [
                    'content' => '<img src="http://placehold.it/900x500/ffcc00/ffffff&text=I+Love+Bootstrap"/>',
                    'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                    'options' => [],
                ],
            ],
            'controls' => ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
        ]);

        ?>
        <?= Box::end() ?>
    </div>

</div>

