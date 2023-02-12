<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Expertviews $model */

$this->title = '创建文章';
$this->params['breadcrumbs'][] = ['label' => 'Expertviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expertviews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
