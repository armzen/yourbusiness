<?php

namespace app\controllers;

use phpDocumentor\Reflection\Types\Null_;


use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\TrainingMenu;
use app\models\MarketingMenu;
use app\models\Slider;

use app\models\Contacts;

class SiteController extends Controller
{

    //public $layout = 'main';

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

    public function actionIndex( $lng = 1)
    {

        $this->layout = 'menu-layout';

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

    

    // Trainig Main page
    public function actionTraining($lng)
    {
        $trmenu = TrainingMenu::getTrainingMenuItems($lng);
        return $this->render('training', ['lng' => $lng,'trmenu' => $trmenu]);
    }
        // page 1 tr web
        public function actionTrainingWeb($lng)
        {
            return $this->render('trweb',['lng' => $lng]);
        }

            // page 2 tr design
        public function actionTrainingDesign($lng)
        {
            return $this->render('trdesign',['lng' => $lng]);
        }

        // page 3 tr business
        public function actionTrainingBusiness($lng)
        {
            return $this->render('trbusiness',['lng' => $lng]);
        }


    // Marketing main page
    public function actionMarketing($lng)
    {
        $mkmenu = MarketingMenu::getMarketingMenuItems($lng);
        return $this->render('marketing', ['lng' => $lng,'mkmenu' => $mkmenu]);
    }
        // page 1 mk web
        public function actionMarketingWeb($lng)
        {
            return $this->render('mkweb', ['lng' => $lng]);
        }

        // page 2 mk design
        public function actionMarketingDesign($lng)
        {
            return $this->render('mkdesign', ['lng' => $lng]);
        }

        // page 3 mk marketing
        public function actionBusinessMarketing($lng)
        {
            return $this->render('mkbusiness', ['lng' => $lng]);
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
