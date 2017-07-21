<?php

namespace app\controllers;

use app\models\MoreForm;
use app\models\ProductForm;
use app\models\Products;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new MoreForm();
        $modelProduct = new ProductForm();
        $products = Products::find()->with('colors')->asArray()->all();
        return $this->render('index', compact('products','model','modelProduct'));
    }

    public function actionSend(){
        if(Yii::$app->request->isAjax && Yii::$app->request->post('r')){
            $data = json_decode(Yii::$app->request->post('r'));
            $message = '<h3>Имя покупателя:</h3><p>'.$data->name.'</p><h3>Телефон покупателя:</h3><p>'.$data->phone.'</p><h3>Email покупателя:</h3><p>'.$data->email.'</p><h3>Текст сообщения</h3><p>'.$data->description.'</p><h3>Модель</h3><p>'.$data->model.'</p><h3>Цвет</h3><p>'.$data->color.'</p>';
            Yii::$app->mailer->compose()
                ->setFrom('kovr.anton@gmail.com')
                ->setTo('kovr.anton@gmail.com')
                ->setSubject('Новый заказ от '.date("Y-m-d H:i:s"))
                ->setTextBody('Текст сообщения')
                ->setHtmlBody($message)
                ->send();
            print_r('Заявка успешно отправлена');
        }
    }
}
