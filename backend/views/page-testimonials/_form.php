<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PageTestimonials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-testimonials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contact_us_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'for_fb_pixel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'other_code')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
