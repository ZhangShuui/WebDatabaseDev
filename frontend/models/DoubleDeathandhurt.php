<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%double_deathandhurt}}".
 *
 * @property int $id
 * @property int $citizens_death
 * @property int $ukraine_death
 * @property int $russia_death
 * @property int $double_hurt
 */
class DoubleDeathandhurt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%double_deathandhurt}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['citizens_death', 'ukraine_death', 'russia_death', 'double_hurt'], 'required'],
            [['citizens_death', 'ukraine_death', 'russia_death', 'double_hurt'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'citizens_death' => 'Citizens Death',
            'ukraine_death' => 'Ukraine Death',
            'russia_death' => 'Russia Death',
            'double_hurt' => 'Double Hurt',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DoubleDeathandhurtQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DoubleDeathandhurtQuery(get_called_class());
    }
}
