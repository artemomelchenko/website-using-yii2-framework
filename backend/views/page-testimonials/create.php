<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PageTestimonials */

$this->title = Yii::t('app', 'Create Page Testimonials');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Page Testimonials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-testimonials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
