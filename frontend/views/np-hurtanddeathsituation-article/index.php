<?php

use frontend\models\NpHurtanddeathsituationArticle;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/**
 * TEAM：张书睿队 NKU
 * Coding by zhoumingxi 2013837
 * This is np-hurtanddeathsituation views
 */
/** @var yii\web\View $this */
/** @var frontend\models\NpHurtanddeathsituationArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '伤亡报告';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="np-hurtanddeathsituation-article-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tittle',
            'time',
            'writer',
            'content',

        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
