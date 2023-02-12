<?php

use backend\models\Friendlink;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\FriendlinkSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '友链一览';
$this->params['breadcrumbs'][] = $this->title;
$this->context->layout = 'main_layout';
?>
<div class="friendlink-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建友链', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Friendlink $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
