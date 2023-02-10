<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\NpGlobalsituationArticle $model */

$this->title = 'Update Np Globalsituation Article: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Np Globalsituation Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="np-globalsituation-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
