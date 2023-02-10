<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[NpFrontsituationArticle]].
 *
 * @see NpFrontsituationArticle
 */
class NpFrontsituationArticleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NpFrontsituationArticle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NpFrontsituationArticle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
