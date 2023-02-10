<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[NpGlobalsituationArticle]].
 *
 * @see NpGlobalsituationArticle
 */
class NpGlobalsituationArticleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NpGlobalsituationArticle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NpGlobalsituationArticle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
