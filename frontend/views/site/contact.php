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
                    facebook/telegram for easy
                    communication.</div>
                <form name="mainForm" class="main-form mt-20">

                    <div class="row-form input-block-form">
                        <input type="text" name="" id="input_name" class="global-input" id="">
                        <label id="label_name">Name</label>
                    </div>

                    <div class="row-form input-block-form">
                        <input type="email" name="" id="input_email" class="global-input" id="">
                        <label id="label_email">E-mail</label>
                    </div>


                    <div class="row-form input-block-form">
                        <input type="text" name="" id="input_message" class="global-input">
                        <label id="label_message">Message</label>
                    </div>

                    <div class="row-form input-block-form">
                        <input type="submit" id="submit_form" disabled="true" onclick="ValidateForm()" class="form-submit button-yellow" value="Start now!">
                    </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
