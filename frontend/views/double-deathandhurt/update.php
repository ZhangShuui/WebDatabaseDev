<?php

use yii\helpers\Html;
/**
 * TEAM：张书睿队 NKU
 * Coding by zhouhaoran 1911528
 * This is double-deathandhurt views
 */
/** @var yii\web\View $this */
/** @var frontend\models\DoubleDeathandhurt $model */

$this->title = 'Update Double Deathandhurt: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Double Deathandhurts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="double-deathandhurt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
