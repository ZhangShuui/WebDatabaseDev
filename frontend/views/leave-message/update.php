<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LeaveMessage $model */

$this->title = 'Update Leave Message: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Leave Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="leave-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
