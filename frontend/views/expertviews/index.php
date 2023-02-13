<?php

use frontend\models\Expertviews;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\ExpertviewsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '专家点评';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expertviews-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'content',
            'time',
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
