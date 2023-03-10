<?php

use yii\helpers\Html;
/**
 * TEAM：张书睿队 NKU
 * Coding by houshunan 1911418
 * This is the expertviews views
 */
/** @var yii\web\View $this */
/** @var frontend\models\Expertviews $model */

$this->title = 'Update Expertviews: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Expertviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="expertviews-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
