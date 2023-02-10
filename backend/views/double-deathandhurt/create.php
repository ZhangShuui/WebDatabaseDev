<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DoubleDeathandhurt $model */

$this->title = 'Create Double Deathandhurt';
$this->params['breadcrumbs'][] = ['label' => 'Double Deathandhurts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="double-deathandhurt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
