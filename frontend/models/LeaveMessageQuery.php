<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[LeaveMessage]].
 *
 * @see LeaveMessage
 */
class LeaveMessageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return LeaveMessage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return LeaveMessage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
