<?php

namespace app\controllers;
use app\models\MarketingMenu;



class MarketingController extends \yii\web\Controller
{
    public function actionIndex($lng)
    {
        $mkmenu = MarketingMenu::getMarketingMenuItems($lng);
        return $this->render('index', ['lng' => $lng, 'mkmenu' => $mkmenu]);
    }

    /* WEB */
    public function actionWeb($lng)
    {
        return $this->render('mkweb', ['lng' => $lng]);
    }

    /* DESIGN */
    public function actionDesign($lng)
    {
        return $this->render('mkdesign', ['lng' => $lng]);
    }

    /* BUSINESS */
    public function actionBusiness($lng)
    {
        return $this->render('mkbusiness', ['lng' => $lng]);
    }

}
