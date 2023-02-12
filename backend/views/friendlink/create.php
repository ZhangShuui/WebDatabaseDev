<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Friendlink $model */

$this->title = '创建友链';
$this->params['breadcrumbs'][] = ['label' => 'Friendlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="friendlink-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
