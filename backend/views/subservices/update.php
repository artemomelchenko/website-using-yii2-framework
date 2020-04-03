<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Subservices */

$this->title = Yii::t('app', 'Update Subservices: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subservices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="subservices-update">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
    <div class="card">
        <div class="card-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
