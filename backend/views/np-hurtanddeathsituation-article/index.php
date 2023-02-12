<?php

use backend\models\NpHurtanddeathsituationArticle;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\NpHurtanddeathsituationArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '伤亡信息管理';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="np-hurtanddeathsituation-article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建新的伤亡报告', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tittle',
            'time',
            'writer',
            'content',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, NpHurtanddeathsituationArticle $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
