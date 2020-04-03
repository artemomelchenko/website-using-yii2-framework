<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Testimonials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testimonials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->widget(\kartik\file\FileInput::classname(), [
        'pluginOptions' => [
            'initialPreview' => [
                isset($model->img) ? Html::img("/img/" . $model->img, ['style' => 'width:30px;']) : ''
            ],
            'showPreview' => true,
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => false,
//            'maxImageWidth' => 862,
//            'maxImageHeight' => 573,
            'allowedFileExtensions' => ['jpg', 'jpeg', 'gif', 'png'],
        ]
    ]); ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'accepted')->checkbox() ?>

<!--    --><?//= $form->field($model, 'created')->textInput() ?>

<!--    --><?//= $form->field($model, 'date_create')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
