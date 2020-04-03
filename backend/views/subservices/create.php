<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Subservices */

$this->title = Yii::t('app', 'Create Subservices');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subservices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subservices-create">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
    <div class="card">
        <div class="card-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
