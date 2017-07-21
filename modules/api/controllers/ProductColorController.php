<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 11.07.2017
 * Time: 17:57
 */

namespace app\modules\api\controllers;


use yii\rest\ActiveController;

class ProductColorController extends ActiveController
{
    public $modelClass = 'app\modules\api\models\ProductsColors';

    public function behaviors()
    {
        return
            \yii\helpers\ArrayHelper::merge(parent::behaviors(), [
                'corsFilter' => [
                    'class' => \yii\filters\Cors::className(),
                ],
            ]);
    }
}