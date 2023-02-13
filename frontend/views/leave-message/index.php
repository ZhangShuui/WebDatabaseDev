<?php

use frontend\models\LeaveMessage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/*
 * TEAM：张书睿队 NKU
 * Coding by houshunan 1911418
 * This is the leave-message views
/** @var yii\web\View $this */
/** @var frontend\models\LeaveMessageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '留言板';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-message-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    if(!Yii::$app->user->isGuest){
        echo Html::a('点击进行留言', ['create'], ['class' => 'btn btn-success']);
    }
    else
    {
        echo Html::a('登陆后进行留言', yii\helpers\Url::to(['/site/login']), ['class' => 'btn btn-info']);
    }
    ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
            ],
            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],
                ['class' => 'yii\grid\DataColumn'],
                'id',
                [
                    'attribute'=>'content',
                    // 'contentOptions' => [
                    // 'style'=>'word-wrap:break-word;word-break:break-all'
                    // ],
                    'headerOptions' => ['width' => '700']
                ],
                [
                    'attribute'=>'time',
                ]

                //['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    <?php Pjax::end(); ?>

</div>
