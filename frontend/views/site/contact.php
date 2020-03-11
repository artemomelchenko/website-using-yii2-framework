<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper pb-50">
    <div class="container">
        <div class="section-four">
            <div class="image-block-3">
                <img src="img/illustration_3.png" alt="illustration_3">
            </div>
            <div class="form-block">
                <h3 class="h3 t-center">Contact Us!</h3>
                <div class="form-block-description">Regarding any questions fill in the form or add us over
                    facebook/telegram for easy communication.</div>
                <form action="index.html" class="main-form" method="POST">
                    <div class="input-block-form"><input type="text" name="name-user" placeholder="Name"></div>
                    <div class="input-block-form"><input type="email" required name="user-email"
                                                         placeholder="E-mail" id=""></div>
                    <div class="input-block-form"><input type="text" class="text-message" name="text-message"
                                                         placeholder="Message">
                    </div>
                    <div> <a href="#"><button class="button-yellow">Start now!</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
