<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%leave_message}}".
 *
 * @property int $id
 * @property string|null $user
 * @property string|null $time
 * @property string|null $content
 */
class LeaveMessage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%leave_message}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['time'], 'safe'],
            [['user', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'time' => 'Time',
            'content' => 'Content',
        ];
    }

    /**
     * {@inheritdoc}
     * @return LeaveMessageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LeaveMessageQuery(get_called_class());
    }
}
