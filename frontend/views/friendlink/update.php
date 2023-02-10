<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Friendlink $model */

$this->title = 'Update Friendlink: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Friendlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="friendlink-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
