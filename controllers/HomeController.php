<?php

namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\TrainingMenu;
use app\models\MarketingMenu;
use app\models\Slider;

class HomeController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex($lng = 1)
    {

        $this->layout = 'home-layout';

        $trmenu = TrainingMenu::getTrainingMenuItems($lng);
        $read_more = TrainingMenu::btnTranslate($lng);

        $mkmenu = MarketingMenu::getMarketingMenuItems($lng);
        $slider = Slider::getAllitems($lng);



        return $this->render('index',
            [
                'trmenu' => $trmenu,
                'read_more' => $read_more,
                'mkmenu'=>$mkmenu,
                'slider' => $slider,
                'lng' => $lng,
            ]);
    }


    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            if ($model->contact(\Yii::$app->params['adminEmail'])) {
                \Yii::$app->session->setFlash(
                    'contactFormSubmitTrue',
                    'Thank you for contacting us. We will respond to you as soon as possible.');
                return $this->refresh();
            }
        }
        return $this->render('contact', [ 'model' => $model ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }



}
