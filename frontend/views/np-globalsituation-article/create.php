<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\NpGlobalsituationArticle $model */

$this->title = 'Create Np Globalsituation Article';
$this->params['breadcrumbs'][] = ['label' => 'Np Globalsituation Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-globalsituation-article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
