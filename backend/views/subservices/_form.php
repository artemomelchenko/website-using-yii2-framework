<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Subservices */
/* @var $form yii\widgets\ActiveForm */

$services = \common\models\Services::find()->select(['name', 'id'])->all();
$items_services = \yii\helpers\ArrayHelper::map($services,'id','name');
$params_services = [
    'prompt' => 'Select...'
];
?>

<div class="subservices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hot')->checkbox() ?>

    <?= $form->field($model, 'id_service')->dropDownList($items_services, $params_services); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
