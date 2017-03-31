<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>

    <h1>marketing/index</h1>
<div>
    <ul class="Marketing-menu">
        <li>
            <a href="<?= Url::to(['site/marketing-web', 'lng' => $lng]) ?>">
                <?= $mkmenu[0]["mklink1"]; ?>
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['site/marketing-design', 'lng' => $lng]) ?>">
                <?= $mkmenu[0]["mklink2"]; ?>
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['site/marketing-mark','lng'=>$lng]) ?>">
                <?= $mkmenu[0]["mklink3"]; ?>
            </a>
        </li>
    </ul>
</div>

<p>
    the file <code><?= __FILE__; ?></code>.
</p>
