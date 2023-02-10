<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\NpFrontsituationArticle $model */

$this->title = 'Update Np Frontsituation Article: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Np Frontsituation Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="np-frontsituation-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
