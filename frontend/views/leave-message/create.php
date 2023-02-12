<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\LeaveMessage $model */

$this->title = '进行留言';
$this->params['breadcrumbs'][] = ['label' => 'Leave Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
