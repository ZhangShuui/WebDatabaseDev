<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Friendlink]].
 *
 * @see Friendlink
 */
class FriendlinkQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Friendlink[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Friendlink|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
