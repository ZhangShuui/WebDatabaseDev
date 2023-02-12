<?php

use frontend\models\NpFrontsituationArticle;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\NpFrontsituationArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '前线局势';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-frontsituation-article-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
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
