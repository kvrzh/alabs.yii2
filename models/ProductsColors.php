<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%products_colors}}".
 *
 * @property integer $products_id
 * @property integer $colors_id
 */
class ProductsColors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%products_colors}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['products_id', 'colors_id'], 'required'],
            [['products_id', 'colors_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'products_id' => 'Products ID',
            'colors_id' => 'Colors ID',
        ];
    }
    public function getProducts(){
        return $this->hasMany(Products::className(), ['id' => 'products_id']);
    }
}
