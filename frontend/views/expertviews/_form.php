<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * TEAM：张书睿队 NKU
 * Coding by houshunan 1911418
 * This is the expertviews views
 */
/** @var yii\web\View $this */
/** @var frontend\models\Expertviews $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="expertviews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
