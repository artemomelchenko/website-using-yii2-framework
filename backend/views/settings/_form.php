<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Settings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'for_code')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fb_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'google_analitycs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fb_pixel')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'pixel_for_success')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'link_for_messenger')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_for_privacy_policy')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
