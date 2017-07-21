<?php

namespace app\modules\api\models;

use Yii;

/**
 * This is the model class for table "{{%colors}}".
 *
 * @property integer $color_id
 * @property string $color_name
 * @property string $hex
 */
class Colors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%colors}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['color_name', 'hex'], 'required'],
            [['color_name'], 'string', 'max' => 55],
            [['hex'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'color_id' => 'Color ID',
            'color_name' => 'Color Name',
            'hex' => 'Hex',
        ];
    }
}
