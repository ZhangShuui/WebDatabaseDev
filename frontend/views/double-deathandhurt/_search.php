<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DoubleDeathandhurtSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="double-deathandhurt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'citizens_death') ?>

    <?= $form->field($model, 'ukraine_death') ?>

    <?= $form->field($model, 'russia_death') ?>

    <?= $form->field($model, 'double_hurt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
