<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DoubleDeathandhurt;

/**
 * DoubleDeathandhurtSearch represents the model behind the search form of `frontend\models\DoubleDeathandhurt`.
 */
class DoubleDeathandhurtSearch extends DoubleDeathandhurt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'citizens_death', 'ukraine_death', 'russia_death', 'double_hurt'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DoubleDeathandhurt::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'citizens_death' => $this->citizens_death,
            'ukraine_death' => $this->ukraine_death,
            'russia_death' => $this->russia_death,
            'double_hurt' => $this->double_hurt,
        ]);

        return $dataProvider;
    }
}
