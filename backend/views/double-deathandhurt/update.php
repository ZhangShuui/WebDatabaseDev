<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DoubleDeathandhurt $model */

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
