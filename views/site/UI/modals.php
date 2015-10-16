<?php

/* @var $this app\components\View */

use yii\bootstrap\Modal;

$this->title = 'Modals';
$this->subTitle = 'new';

$this->registerJs('$(".modal").removeClass("fade");');
$this->registerCss(<<<CSS
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }
      .example-modal .modal {
        background: transparent !important;
      }
CSS
);

?>

    <div class="example-modal">
<?php

foreach ([
    'Default' => '',
    'Primary' => 'primary',
    'Info' => 'info',
    'Warning' => 'warning',
    'Danger' => 'danger',] as $label => $type) {

    Modal::begin([
        'header' => '<h4 class="modal-title">' . $label . ' Modal</h4>',
        'footer' => $type == '' ?
            '<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>'
            :
            '<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline">Save changes</button>',
        'clientOptions' => false,
        'options' => [
            'class' => $type != '' ? 'modal-' . $type : '',
        ]
    ]);

    echo 'One fine body...';

    Modal::end();
}
?>
    </div>
