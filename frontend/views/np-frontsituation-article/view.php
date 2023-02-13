<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/**
 * TEAM：张书睿队 NKU
 * Coding by zhouhaoran 1911528
 * This is np-frontsituation-article
 */
/** @var yii\web\View $this */
/** @var frontend\models\NpFrontsituationArticle $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Np Frontsituation Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="np-frontsituation-article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tittle',
            'time',
            'writer',
            'content',
        ],
    ]) ?>

</div>
