<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property string $id
 * @property string $name
 * @property string $tel
 * @property string $describe
 * @property string $img
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['describe', 'img'], 'string'],
            [['name', 'tel'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'tel' => 'Tel',
            'describe' => 'Describe',
            'img' => 'Img',
        ];
    }
}
