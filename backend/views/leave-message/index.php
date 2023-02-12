<?php

use backend\models\LeaveMessage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\LeaveMessageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '留言';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-message-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建留言', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user',
            'time',
            'content',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, LeaveMessage $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
<!--    --><?php //= GridView::widget([
//        'dataProvider' => $dataProvider,
//        //'filterModel' => $searchModel,
//        'options' => [
//            'style'=>'overflow: auto; word-wrap: break-word;'
//        ],
//        'columns' => [
//            //['class' => 'yii\grid\SerialColumn'],
//
//            //'bId',
//            'id',
//            [
//                'attribute'=>'content',
//                // 'contentOptions' => [
//                // 'style'=>'word-wrap:break-word;word-break:break-all'
//                // ],
//                'headerOptions' => ['width' => '700']
//            ],
//            [
//                'attribute'=>'time',
//                'value'=>function($model){
//                    return date('Y-m-d', $model->time);
//
//                },
//            ]
//
//            //['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]); ?>

    <?php Pjax::end(); ?>

</div>
