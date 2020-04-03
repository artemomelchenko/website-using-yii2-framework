<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="shadow"></div>

<div class="parent-container">
    <div class="t-center pt-50">

        <div class="section-one-block-1 d-block">
            <img src="img/services-page.png" alt="services-page-png"></div>
        <h1 class="t-center mt-20 mb-20">Services</h1>
    </div>

    <!-- FAQ -->
    <?php foreach ($services as $service): ?>
        <div id="<?= $service->id ?>">
            <div class="section-two-img-text">
                <div class="section-two-img-text-img"><img src="img/<?= $service->img ?>" alt=""></div>
                <h3 class="section-two-img-text-title"><?= $service->name ?></h3>
            </div>
            <ul class="faq">
                <?php foreach ($service->subservices as $subservice): ?>
                    <li>
                        <h3 class="question"><?= $subservice->hot == 1 ? '🔥 ' : '' ?><?= $subservice->name ?>
                            <div class="plus-minus-toggle collapsed"></div>
                        </h3>
                        <div class="answer"><?= $subservice->description ?>
                            <div class="bottom-answer-info">
                                <b>Price <?= $subservice->price ?></b>
                                <div>
                                    <button id="open-popup" onclick="openPopup(<?= $service->id . "." . $subservice->id ?>)" class="button-learn-more mt-15">
                                        Contact now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
<!--                <li>-->
<!--                    <h3 class="question">Frequently Asked Question?-->
<!--                        <div class="plus-minus-toggle collapsed"></div>-->
<!--                    </h3>-->
<!--                    <div class="answer">Answer. Donec vitae tellus risus. Aenean sed fermentum risus. Phasellus-->
<!--                        venenatis-->
<!--                        ultricies dignissim. Nunc ante lectus, accumsan non porta at. Donec vitae tellus risus. Aenean-->
<!--                        sed-->
<!--                        fermentum risus. Phasellus venenatis ultricies dignissim.-->
<!--                        <div class="bottom-answer-info">-->
<!--                            <b>Price 400$ / 250$</b>-->
<!--                            <div>-->
<!--                                <button class="button-learn-more  mt-15" onclick="openPopup(1.2)">Contact now</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
            </ul>
        </div>
    <?php endforeach; ?>


    <!-- FAQ -->
    <!--    <div class="mt-100 sm-tb-mt-50" id="marketing">-->
    <!--        <div class="section-two-img-text">-->
    <!--            <div class="section-two-img-text-img"><img src="img/icon_marketig.png" alt=""></div>-->
    <!--            <h3 class="section-two-img-text-title">Marketing and Advertising</h3>-->
    <!--        </div>-->
    <!--        <ul class="faq">-->
    <!--            <li>-->
    <!--                <h3 class="question">🔥 Frequently Asked Question?-->
    <!--                    <div class="plus-minus-toggle collapsed"></div>-->
    <!--                </h3>-->
    <!--                <div class="answer">Answer. Donec vitae tellus risus. Aenean sed fermentum risus. Phasellus-->
    <!--                    venenatis-->
    <!--                    ultricies dignissim. Nunc ante lectus, accumsan non porta at. Donec vitae tellus risus. Aenean-->
    <!--                    sed-->
    <!--                    fermentum risus. Phasellus venenatis ultricies dignissim.-->
    <!--                    <div class="bottom-answer-info">-->
    <!--                        <b>Price 400$ / 250$</b>-->
    <!--                        <div><button class="button-learn-more mt-15" onclick="openPopup(2.1)">Contact now</button></div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <h3 class="question">Frequently Asked Question?-->
    <!--                    <div class="plus-minus-toggle collapsed"></div>-->
    <!--                </h3>-->
    <!--                <div class="answer">Answer. Donec vitae tellus risus. Aenean sed fermentum risus. Phasellus-->
    <!--                    venenatis-->
    <!--                    ultricies dignissim. Nunc ante lectus, accumsan non porta at. Donec vitae tellus risus. Aenean-->
    <!--                    sed-->
    <!--                    fermentum risus. Phasellus venenatis ultricies dignissim.-->
    <!--                    <div class="bottom-answer-info">-->
    <!--                        <b>Price 400$ / 250$</b>-->
    <!--                        <div><button class="button-learn-more mt-15" onclick="openPopup(2.2)">Contact now</button></div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </div>-->
</div>
<div class="popup-wrapper">
    <div class="popup-container">
        <span class="button_close" onclick="closePopup()">
            <span class="close__wrap"></span>
        </span>
        <div class="form-block">
            <h3 class="h3 t-center">Contact Us!</h3>
            <div class="form-block-description">Regarding any questions fill in the form or add us over
                facebook/telegram for easy
                communication.
            </div>
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

                <div class="row-form">
                    <input type="hidden" id="number_post" name="number-post" value="3487">
                </div>

                <div class="row-form input-block-form">
                    <input type="submit" id="submit_form" disabled="true" onclick="ValidateForm()"
                           class="form-submit button-yellow" value="Start now!">
                </div>
            </form>
        </div>
    </div>
</div>