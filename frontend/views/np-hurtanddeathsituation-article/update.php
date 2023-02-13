<?php

use yii\helpers\Html;
/**
 * TEAM：张书睿队 NKU
 * Coding by zhoumingxi 2013837
 * This is np-hurtanddeathsituation views
 */
/** @var yii\web\View $this */
/** @var frontend\models\NpHurtanddeathsituationArticle $model */

$this->title = 'Update Np Hurtanddeathsituation Article: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Np Hurtanddeathsituation Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="np-hurtanddeathsituation-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
