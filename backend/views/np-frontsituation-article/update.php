<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\NpFrontsituationArticle $model */

$this->title = '更新文章信息： ' . $model->id;
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
