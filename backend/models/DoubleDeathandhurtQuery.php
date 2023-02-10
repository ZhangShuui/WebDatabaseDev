<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[DoubleDeathandhurt]].
 *
 * @see DoubleDeathandhurt
 */
class DoubleDeathandhurtQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return DoubleDeathandhurt[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return DoubleDeathandhurt|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
