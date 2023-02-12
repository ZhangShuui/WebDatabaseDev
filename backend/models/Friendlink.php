<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "friendlink".
 *
 * @property int $id
 * @property string|null $url
 */
class Friendlink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'friendlink';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
        ];
    }

    /**
     * {@inheritdoc}
     * @return FriendlinkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FriendlinkQuery(get_called_class());
    }
}
