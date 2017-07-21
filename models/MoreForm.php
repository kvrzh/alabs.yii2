<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 07.07.2017
 * Time: 16:04
 */

namespace app\models;


use yii\base\Model;

class MoreForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $description;

    public function rules()
    {
        return [
          [['name','surname','email','description','phone'], 'required'],
            ['description','trim'],
            ['email','email']
        ];
    }
}