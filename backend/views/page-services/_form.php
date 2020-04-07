<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PageServices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'for_fb_pixel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'other_code')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
