<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Faq */

$this->title = Yii::t('app', 'Create Faq');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Faqs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-create">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
    <div class="card">
        <div class="card-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
