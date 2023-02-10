<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "expertviews".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $content
 * @property string|null $time
 */
class Expertviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'expertviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['time'], 'safe'],
            [['name', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'content' => 'Content',
            'time' => 'Time',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ExpertviewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ExpertviewsQuery(get_called_class());
    }
}
