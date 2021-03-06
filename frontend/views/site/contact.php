<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
/* @var $settings \common\models\Contact*/
/* @var $set \common\models\Settings */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginBlock('contact'); ?>
<?= $settings->for_fb_pixel ?>
<?= $settings->other_code ?>
<?php $this->endBlock(); ?>
<div class="wrapper pb-50">
    <div class="container">
        <div class="section-four">
            <div class="image-block-3">
                <img src="img/contact-page.png" alt="contact-page-png">
            </div>
            <div class="form-block">
                <h1 class="t-center mb-15">Contact Us!</h1>
                <div class="form-block-description"><?= $settings->contact_us_text ?></div>
                <form name="mainForm" class="main-form mt-20">

                    <div class="row-form input-block-form">
                        <input type="text" name="input_name" id="input_name" class="global-input">
                        <label id="label_name">Name</label>
                    </div>

                    <div class="row-form input-block-form">
                        <input type="email" name="input_email" id="input_email" class="global-input">
                        <label id="label_email">E-mail</label>
                    </div>


                    <div class="row-form input-block-form">
                        <input type="text" name="input_message" id="input_message" class="global-input">
                        <label id="label_message">Message</label>
                    </div>

                    <div class="row-form input-block-form">
                        <input type="submit" id="submit_form" disabled="true" onclick="ValidateForm()" class="form-submit button-yellow" value="Start now!">

                    </div>

                    <div class="mt-15">or</div>
                    <a class="a-defoult" href="<?= $set->link_for_messenger ?>">
                        <div class="row-messenger">Contact Us via Messenger <img src="img/icon-messenger.png" id="messenger-1" alt="icon-messager"></div>
                    </a>
            </div>
            </form>
        </div>
    </div>
</div>
</div>