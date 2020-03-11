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
<div class="parent-container">
    <h1 class="t-center mt-70">Testimonials</h1>


    <div class="owl-carousel testimonials mt-50">
        <div>
            <div class="testimonials-slider-block">
                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client"
                                                         alt="img-client"></div>
                <div class="text-block-testimonials">
                    <div class="name-testimonial-author">
                        <div class="name-client">John Doe</div>
                        <div class="date-testimonial">04.03.2020</div>
                    </div>
                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of
                        denouncing pleasure and praising
                        pain
                        was born and I will give you a complete account of the system, and expound the actual
                        teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonials-slider-block">
                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client"
                                                         alt="img-client"></div>
                <div class="text-block-testimonials">
                    <div class="name-testimonial-author">
                        <div class="name-client">John Doe</div>
                        <div class="date-testimonial">04.03.2020</div>
                    </div>
                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of
                        denouncing pleasure and praising
                        pain
                        was born and I will give you a complete account of the system, and expound the actual
                        teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonials-slider-block">
                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client"
                                                         alt="img-client"></div>
                <div class="text-block-testimonials">
                    <div class="name-testimonial-author">
                        <div class="name-client">John Doe</div>
                        <div class="date-testimonial">04.03.2020</div>
                    </div>
                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of
                        denouncing pleasure and praising
                        pain
                        was born and I will give you a complete account of the system, and expound the actual
                        teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonials-slider-block">
                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client"
                                                         alt="img-client"></div>
                <div class="text-block-testimonials">
                    <div class="name-testimonial-author">
                        <div class="name-client">John Doe</div>
                        <div class="date-testimonial">04.03.2020</div>
                    </div>
                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of
                        denouncing pleasure and praising
                        pain
                        was born and I will give you a complete account of the system, and expound the actual
                        teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonials-slider-block">
                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client"
                                                         alt="img-client"></div>
                <div class="text-block-testimonials">
                    <div class="name-testimonial-author">
                        <div class="name-client">John Doe</div>
                        <div class="date-testimonial">04.03.2020</div>
                    </div>
                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of
                        denouncing pleasure and praising
                        pain
                        was born and I will give you a complete account of the system, and expound the actual
                        teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonials-slider-block">
                <div class="img-block-testimonials"><img src="img/img-client.png" class="img-client"
                                                         alt="img-client"></div>
                <div class="text-block-testimonials">
                    <div class="name-testimonial-author">
                        <div class="name-client">John Doe</div>
                        <div class="date-testimonial">04.03.2020</div>
                    </div>
                    <div class="text-testimonials">But I must explain to you how all this mistaken idea of
                        denouncing pleasure and praising
                        pain
                        was born and I will give you a complete account of the system, and expound the actual
                        teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper pb-50">
    <div class="container">
        <div class="section-four">
            <div class="image-block-3">
                <img src="img/illustration_3.png" alt="illustration_3">
            </div>
            <div class="form-block">
                <h3 class="h3 t-center">Write testimonial</h3>
                <div class="form-block-description">But I must explain to you how all this mistaken idea of
                    denouncing pleasure and praising pain was born</div>
                <form action="index.html" class="main-form" method="POST">
                    <div class="input-block-form">
                        <input type="text" name="name-user" placeholder="Name">
                    </div>
                    <div class="input-block-form">
                        <input type="email" required="" name="user-email" placeholder="E-mail" id="">
                    </div>
                    <div class="input-block-form">
                        <input type="text" class="text-message" name="text-testimonial" placeholder="Testimonial">
                    </div>
                    <div> <a href="#"><button class="button-yellow">Start now!</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>