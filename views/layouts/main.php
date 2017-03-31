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


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<?php $this->beginBody() ?>
    <?php
        if(empty(Yii::$app->request->get('lng'))){
            $lng = 1;
        }else{
            $lng = Yii::$app->request->get('lng');
        }
    ?>

<div class="body-content">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
           <ul class="nav"> <!--nav-tabs -->
                <li class='menu-items'>
                    <a class='page-scroll' href="<?= Url::to(['site/index', 'lng' => $lng]) ?>">
                        Home
                    </a>
                </li>
                <li class='menu-items'>                    
                    <a class='page-scroll' href="<?= Url::to(['site/index','#'=>'about', 'lng' => $lng]) ?>">
                        About Us
                    </a>
                </li>
                <li class="dropdown menu-items">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        Trainings
                    <b class="caret right-carret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= Url::to(['training/index', 'lng' => $lng]) ?>">
                                <small>
                                    All Trainings
                                </small>
                            </a>
                        </li>
                            <li class="divider"></li>
                            <li><a href="<?= Url::to(['training/web', 'lng' => $lng])?>">
                                <small>
                                    Training Web
                                </small>
                            </a>
                        </li>
                            <li class="divider"></li>
                            <li><a href="<?= Url::to(['training/design', 'lng' => $lng]) ?>">
                                <small>
                                    Training Design
                                </small>
                            </a>
                        </li>
                            <li class="divider"></li>
                            <li><a href="<?= Url::to(['training/business', 'lng' => $lng]) ?>">
                                <small>
                                    Training Business
                                </small>
                            </a>
                        </li>                
                    </ul>
                </li>
                <li class="dropdown menu-items" >
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Marketing
                        <b class="caret right-carret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= Url::to(['marketing/index', 'lng' => $lng]); ?>">
                                <small>
                                    Marketing Services
                                </small>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?= Url::to(['marketing/web', 'lng' => $lng]); ?>">
                                <small>
                                    Web Marketing
                                </small>
                            </a>
                        </li>
                            <li class="divider"></li>
                        <li>
                            <a href="<?= Url::to(['marketing/design', 'lng' => $lng]); ?>">
                                <small>
                                    Design Marketing
                                </small>
                            </a>
                        </li>
                            <li class="divider"></li>
                            <li><a href="<?= Url::to(['marketing/business' , 'lng' => $lng]); ?>">
                                <small>
                                    Business Marketing
                                </small>
                            </a>
                        </li>					
                    </ul>
                </li>
                <li class='menu-items'><a class="page-scroll" href="#contact">Contact</a></li>
            </ul>
    </div>

    <!-- Use any element to open the sidenav -->
    <header id="header">
        <h1>
            <a href="<?= Url::to(['site/index', 'lng' => $lng]) ?>">
                Your Business
            </a>
        </h1>
        <span id="menu-button" onclick="openNav()">Menu &#9776;</span>
    </header>
	<!-- NavBar here. -->

    <div class="lang-bar">
        <a href="<?= Url::to(['site/index', 'lng' => '1']) ?>" >arm</a>
        <a href="<?= Url::to(['site/index', 'lng' => '2']) ?>" >eng</a>
        <a href="<?= Url::to(['site/index', 'lng' => '3']) ?>" >rus</a>
    </div>

        <div class="wrap" id="layout-wrap">
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




