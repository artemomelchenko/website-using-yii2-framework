<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->registerCssFile('css/owl.carousel.min.css');
$this->registerCssFile('css/owl.theme.default.css');


$this->registerJsFile('js/owl.carousel.min.js', ['depends' => [\frontend\assets\AppAsset::className()]]);
$this->registerJsFile('js/testimonials-slider.js', ['depends' => [\frontend\assets\AppAsset::className()]]);


$this->title = 'Testimonials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parent-container">
    <h1 class="t-center mt-70">Testimonials</h1>


    <div class="owl-carousel testimonials mt-50">
        <?php foreach ($testimonials as $testimonial): ?>
        <div>
            <div class="testimonials-slider-block">
                <div class="img-block-testimonials"><img src="img/<?= $testimonial->img ?>" class="img-client" alt="img-client"></div>
                <div class="text-block-testimonials">
                    <div class="name-testimonial-author">
                        <div class="name-client"><?= $testimonial->name ?></div>
<!--                        <div class="date-testimonial">04.03.2020</div>-->
                    </div>
                    <div class="text-testimonials"><?= $testimonial->message ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
<!--        <div>-->
<!--            <div class="testimonials-slider-block">-->
<!--                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client" alt="img-client"></div>-->
<!--                <div class="text-block-testimonials">-->
<!--                    <div class="name-testimonial-author">-->
<!--                        <div class="name-client">John Doe</div>-->
<!--                        <div class="date-testimonial">04.03.2020</div>-->
<!--                    </div>-->
<!--                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of-->
<!--                        denouncing pleasure and praising-->
<!--                        pain-->
<!--                        was born and I will give you a complete account of the system, and expound the actual-->
<!--                        teachings-->
<!--                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,-->
<!--                        dislikes, or avoids pleasure itself, because it is pleasure-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div>-->
<!--            <div class="testimonials-slider-block">-->
<!--                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client" alt="img-client"></div>-->
<!--                <div class="text-block-testimonials">-->
<!--                    <div class="name-testimonial-author">-->
<!--                        <div class="name-client">John Doe</div>-->
<!--                        <div class="date-testimonial">04.03.2020</div>-->
<!--                    </div>-->
<!--                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of-->
<!--                        denouncing pleasure and praising-->
<!--                        pain-->
<!--                        was born and I will give you a complete account of the system, and expound the actual-->
<!--                        teachings-->
<!--                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,-->
<!--                        dislikes, or avoids pleasure itself, because it is pleasure-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div>-->
<!--            <div class="testimonials-slider-block">-->
<!--                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client" alt="img-client"></div>-->
<!--                <div class="text-block-testimonials">-->
<!--                    <div class="name-testimonial-author">-->
<!--                        <div class="name-client">John Doe</div>-->
<!--                        <div class="date-testimonial">04.03.2020</div>-->
<!--                    </div>-->
<!--                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of-->
<!--                        denouncing pleasure and praising-->
<!--                        pain-->
<!--                        was born and I will give you a complete account of the system, and expound the actual-->
<!--                        teachings-->
<!--                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,-->
<!--                        dislikes, or avoids pleasure itself, because it is pleasure-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div>-->
<!--            <div class="testimonials-slider-block">-->
<!--                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client" alt="img-client"></div>-->
<!--                <div class="text-block-testimonials">-->
<!--                    <div class="name-testimonial-author">-->
<!--                        <div class="name-client">John Doe</div>-->
<!--                        <div class="date-testimonial">04.03.2020</div>-->
<!--                    </div>-->
<!--                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of-->
<!--                        denouncing pleasure and praising-->
<!--                        pain-->
<!--                        was born and I will give you a complete account of the system, and expound the actual-->
<!--                        teachings-->
<!--                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,-->
<!--                        dislikes, or avoids pleasure itself, because it is pleasure-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div>-->
<!--            <div class="testimonials-slider-block">-->
<!--                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client" alt="img-client"></div>-->
<!--                <div class="text-block-testimonials">-->
<!--                    <div class="name-testimonial-author">-->
<!--                        <div class="name-client">John Doe</div>-->
<!--                        <div class="date-testimonial">04.03.2020</div>-->
<!--                    </div>-->
<!--                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of-->
<!--                        denouncing pleasure and praising-->
<!--                        pain-->
<!--                        was born and I will give you a complete account of the system, and expound the actual-->
<!--                        teachings-->
<!--                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,-->
<!--                        dislikes, or avoids pleasure itself, because it is pleasure-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>

<div class="wrapper pb-50">
    <div class="container">
        <div class="section-four">
            <div class="image-block-3">
                <img src="img/testimonials.png" alt="testimonials-png">
            </div>
            <div class="form-block">
                <h2 class="t-center">Write testimonial</h2>
                <div class="form-block-description">But I must explain to you how all this mistaken idea of
                    denouncing pleasure and praising pain was born</div>
                <div class="form-block">
                    <form name="mainForm" class="main-form mt-20">

                        <div class="row-form input-block-form">
                            <input type="text" name="input_name" id="input_name" class="global-input" id="">
                            <label id="label_name">Name</label>
                        </div>

                        <div class="row-form input-block-form">
                            <input type="email" name="input_email" id="input_email" class="global-input" id="">
                            <label id="label_email">E-mail</label>
                        </div>


                        <div class="row-form input-block-form">
                            <input type="text" name="input_message" id="input_message" class="global-input">
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