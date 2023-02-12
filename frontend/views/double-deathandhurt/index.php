<?php

use frontend\models\DoubleDeathandhurt;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\DoubleDeathandhurtSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '双方伤亡情况';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="double-deathandhurt-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'citizens_death',
            'ukraine_death',
            'russia_death',
            'double_hurt',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DoubleDeathandhurt $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
