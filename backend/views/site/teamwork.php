<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \backend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '团队作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1>团队：DBIS, NKU</h1>
    <div class="row">
        <div class="col-lg-6">
            <h5>团队成员：张书睿，周浩然，侯舒男，邹明锡</h5>
        </div>
    </div>

    <br/>
    <div class="row">
        <div class="col-lg-5">
            <h4><a href="#">需求文档</a></h4>
            <h4><a href="#">设计文档</a></h4>
            <h4><a href="#">实现文档</a></h4>
            <h4><a href="#">用户手册</a></h4>
            <h4><a href="#">项目展示PPT</a></h4>
            <h4><a href="https://github.com/ZhangShuui/WebDatabaseDev">源码</a></h4>
            <h4><a href="/advanced/data/yii2advanced.sql">数据库文件</a></h4>
            <h4><a href="#">部署文档</a></h4>
        </div>
    </div>

</div>
