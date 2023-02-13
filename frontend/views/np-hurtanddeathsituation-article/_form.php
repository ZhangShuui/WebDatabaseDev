<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * TEAM：张书睿队 NKU
 * Coding by zhoumingxi 2013837
 * This is np-hurtanddeathsituation views
 */
/** @var yii\web\View $this */
/** @var frontend\models\NpHurtanddeathsituationArticle $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="np-hurtanddeathsituation-article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tittle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'writer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
