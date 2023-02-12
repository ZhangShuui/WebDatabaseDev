<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Expertviews]].
 *
 * @see Expertviews
 */
class ExpertviewsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Expertviews[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Expertviews|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
