<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\NpFrontsituationArticle $model */

$this->title = '创建新文章：';
$this->params['breadcrumbs'][] = ['label' => 'Np Frontsituation Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-frontsituation-article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
