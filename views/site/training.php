<?php
use yii\helpers\Url;
?>

<div>
    <ul class="training-menu">                                
        <li>
            <a href="<?= Url::to(['site/training-web', 'lng' => $lng ]) ?>">
                <?= $trmenu[0]["trlink1"]; ?>
            </a>
        </li>
        <li>
            <a href="<?=Url::to(['site/training-design', 'lng' => $lng ]) ?>">
                <?= $trmenu[0]["trlink2"]; ?>
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['site/training-business','lng' => $lng]) ?>">
                <?= $trmenu[0]["trlink3"]; ?>
            </a>
        </li>                                
    </ul>
</div>

<?php
    echo '<pre>';
        print_r($trmenu);
    echo '</pre>';
?>
