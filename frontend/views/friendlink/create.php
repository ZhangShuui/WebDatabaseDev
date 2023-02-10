<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Friendlink $model */

$this->title = 'Create Friendlink';
$this->params['breadcrumbs'][] = ['label' => 'Friendlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="friendlink-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
