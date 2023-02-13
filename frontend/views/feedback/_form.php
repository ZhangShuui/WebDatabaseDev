<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * TEAM：张书睿队 NKU
 * Coding by zhangshurui 2010521
 * This is views
 */
/** @var yii\web\View $this */
/** @var frontend\models\Feedback $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="feedback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('提交', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
