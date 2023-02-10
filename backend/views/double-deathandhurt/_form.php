<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DoubleDeathandhurt $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="double-deathandhurt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'citizens_death')->textInput() ?>

    <?= $form->field($model, 'ukraine_death')->textInput() ?>

    <?= $form->field($model, 'russia_death')->textInput() ?>

    <?= $form->field($model, 'double_hurt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
