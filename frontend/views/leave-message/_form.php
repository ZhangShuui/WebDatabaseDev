<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * TEAM：张书睿队 NKU
 * Coding by houshunan 1911418
 * This is the leave-message views
 */
/** @var yii\web\View $this */
/** @var frontend\models\LeaveMessage $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="leave-message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('提交留言', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
