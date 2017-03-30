<?php
use yii\helpers\Url;
?>

<div>
    <ul class="marketing-menu">                                
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

<?php
    echo '<pre>';
        var_dump($mkmenu);
    echo '</pre>';
?>

