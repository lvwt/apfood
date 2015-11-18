<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dish".
 *
 * @property string $id
 * @property integer $sid
 * @property string $name
 * @property string $price
 * @property string $des
 * @property string $pic
 */
class Dish extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dish';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sid', 'name'], 'required'],
            [['sid'], 'integer'],
            [['price'], 'number'],
            [['des'], 'string'],
            [['name', 'pic'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sid' => 'Sid',
            'name' => 'Name',
            'price' => 'Price',
            'des' => 'Des',
            'pic' => 'Pic',
        ];
    }
}
