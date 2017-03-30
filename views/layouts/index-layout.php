<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
    <?php        
        if(empty(Yii::$app->request->get('lang_id'))){
            $lang_id = 1;
        }else{
            $lang_id = Yii::$app->request->get('lang_id');
        }   
    ?>    
<div class="wrap">    
    <?php
    //NsvBar
    ?>
        <div class="lang-bar">
            <a href="<?= Url::to(['site/index', 'lng' => '1']) ?>" >arm</a>
            <a href="<?= Url::to(['site/index', 'lng' => '2']) ?>" >eng</a>
            <a href="<?= Url::to(['site/index', 'lng' => '3']) ?>" >rus</a>            
        </div>
    <div class="wrap">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


