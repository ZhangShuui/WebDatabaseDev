<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Expertviews $model */

$this->title = 'Create Expertviews';
$this->params['breadcrumbs'][] = ['label' => 'Expertviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expertviews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
