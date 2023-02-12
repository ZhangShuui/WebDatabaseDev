<?php

use frontend\models\NpGlobalsituationArticle;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\NpGlobalsituationArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '国际视野';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-globalsituation-article-index">

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
