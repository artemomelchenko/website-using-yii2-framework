<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Success';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper">
    <div class="container">
        <div class="site-error">
            <div class="mw-800">
                <div class="section-error">
                    <div class="section-error-block1">
                        <div class="section-one-text-h1 mt-70 sm-tb-mt-0">
                        Thank<br> you!</div>
                        <div class="fs-26 mt-15 "><b>we will contact you</b>
                        </div>
                        <div class="mt-30 sm-tb-mt-10">
                            <a href="/"><button class="button-learn-more mt-15">Main page</button></a>
                        </div>
                    </div>
                    <div class="section-error-block-2">

                        <img src="img/image-section-1.png" alt="image-section-1">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>