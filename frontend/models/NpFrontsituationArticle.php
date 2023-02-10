<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%np_frontsituation_article}}".
 *
 * @property int $id
 * @property string $tittle
 * @property string $time
 * @property string $writer
 * @property string $content
 */
class NpFrontsituationArticle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%np_frontsituation_article}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tittle', 'time', 'writer', 'content'], 'required'],
            [['time'], 'safe'],
            [['tittle', 'writer', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tittle' => 'Tittle',
            'time' => 'Time',
            'writer' => 'Writer',
            'content' => 'Content',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NpFrontsituationArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NpFrontsituationArticleQuery(get_called_class());
    }
}
