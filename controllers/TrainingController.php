<?php

namespace app\controllers;

use app\models\TrainingMenu;

class TrainingController extends \yii\web\Controller
{
    /**
     * @param $lng
     * @return string
     */
    public function actionIndex($lng)
    {
        $trmenu = TrainingMenu::getTrainingMenuItems($lng);
        return $this->render('index', [ 'lng' => $lng, 'trmenu' => $trmenu]);
    }

    /* WEB */
    public function actionWeb($lng)
    {
        return $this->render('trweb', ['lng' => $lng ]);
    }

    /* DESIGN */
    public function actionDesign($lng)
    {
        return $this->render('trdesign', ['lng' => $lng]);
    }

    /* BUSINESS */
    public function actionBusiness($lng) {
        return $this->render('trbusiness', ['lng' => $lng]);
    }

}
