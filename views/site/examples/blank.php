<?php

/* @var $this app\components\View */

use app\widgets\Box;

$this->title = 'Blank page';
$this->subTitle = 'it all starts here';

?>

<?= Box::begin([
    'type' => '',
    'header' => [
        'title' => 'Title',
        'class' => 'with-border',
    ],
    'footer' => 'Footer'
]) ?>
Start creating your amazing application!
<?= Box::end() ?>
