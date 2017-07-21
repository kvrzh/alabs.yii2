<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 08.07.2017
 * Time: 11:01
 */

namespace app\models;


use yii\base\Model;

class ProductForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $model;
    public $color;

    public function rules()
    {
        return [
            [['name','email','phone','model','color'], 'required'],
            ['email','email']
        ];
    }
}