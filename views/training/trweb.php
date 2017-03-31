<?php
use yii\helpers\Html;

//1. Training page one
?>

    <h1>training/web</h1>
<h5><?= $this->context->action->uniqueId ?></h5>
<?= 'lang id: '.Html::encode($lng); ?>


<p>
    the file <code><?= __FILE__; ?></code>.
</p>
