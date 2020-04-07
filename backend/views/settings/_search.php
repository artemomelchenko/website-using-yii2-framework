<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SettingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'for_code') ?>

    <?= $form->field($model, 'fb_link') ?>

    <?= $form->field($model, 'telegram_link') ?>

    <?= $form->field($model, 'google_analitycs') ?>

    <?php // echo $form->field($model, 'fb_pixel') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'text_for_privacy_policy') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
