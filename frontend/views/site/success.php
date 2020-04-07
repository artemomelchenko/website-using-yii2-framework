<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
/* @var $settings \common\models\Settings */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Success';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginBlock('thankyou'); ?>
<?= $settings->pixel_for_success ?>
<?php $this->endBlock(); ?>
<div class="wrapper">
    <div class="container">
        <div class="site-error">
            <div class="mw-800">
                <div class="section-error">
                    <div class="section-error-block1">
                        <h1 class="section-one-text-h1 mt-70 sm-tb-mt-0">
                        Thank<br> you!</h1>
                        <h3 class="fs-26 mb-10 "><b>we will contact you</b>
                        </h3>
                        <div class="mt-0 sm-tb-mt-10">
                            <a href="/"><button class="button-learn-more mt-15">Main page</button></a>
                        </div>
                    </div>
                    <div class="section-error-block-2">

                        <img src="img/success.png" alt="image-section-1">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>