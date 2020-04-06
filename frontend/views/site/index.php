<?php

/* @var $this yii\web\View */
/* @var $service common\models\Services */
/* @var $faq common\models\Faq */

$this->title = 'AMZBurn';
?>
<div class="one-section-animation">
    <div class="sellers-div-one"><img src="img/sellers.png" alt="sellers"></div>
</div>
<div class="wrapper" id="wrapper-1-home">
    <div class="container">
        <div class="section-one">
            <div class="section-one-block-1">
                <h1 class="section-one-text-h1 mt-70 sm-tb-mt-0">
                    All-in-one<br>
                    <u class="yellow-u">Amazon</u> Service<br>
                    for sellers</h1>
                <div class="section-one-text-p mt-25 ">Reach the maximum safety for your<br> business on Amazon. Get
                    instant
                    </br> reinstating.
                </div>
                <div class="mt-30 sm-tb-mt-10">
                    <a href="/services"><button class="button-yellow button-yellow-others">Start now!</button></a>
                </div>
            </div>
            <div class="block-section-image"><img src="img/illustration-home.png" alt="image-section-1"></div>
        </div>
    </div>
</div>

<div class="wrapper" id="wrapper-2-home">
    <div class="services-div"><img src="img/services.png" alt="services"></div>
    <div class="container">
        <div class="section-two">
            <h2 class="section-one-text-h2">Exclusive Comprehensive Services </h2>
            <div class="mb-70 tb-mb-50 sm-tb-mb-50 sm-mb-50 section-two-block-text">
                <?php foreach ($services as $service) : ?>
                    <div class="sec-2-block">
                        <div class="section-two-img-text">
                            <div class="section-two-img-text-img"><img src="/img/<?= $service->img ?>" alt=""></div>
                            <h3 class="section-two-img-text-title"><?= $service->name ?></h3>
                        </div>
                        <div class="section-two-description"><?= $service->description ?></div>
                        <div><a href="/services#<?= $service->id ?>"><button class="button-learn-more mt-15">Learn more</button></a></div>
                    </div>
                <?php endforeach; ?>

                <!--                <div class="sec-2-block">-->
                <!--                    <div class="section-two-img-text">-->
                <!--                        <div class="section-two-img-text-img"><img src="img/icon_marketig.png" alt=""></div>-->
                <!--                        <h3 class="section-two-img-text-title">Marketing and<br> Advertising</h3>-->
                <!--                    </div>-->
                <!--                    <div class="section-two-description">Increase your sales with PPC creating and optimization,-->
                <!--                        development and customization of advertising on social networks.<br>-->
                <!--                        In addition, rank your product with an absolutely secure keywords boost-technology to the-->
                <!--                        first-->
                <!--                        page.</div>-->
                <!--                    <div><a href="/services#marketing"><button class="button-learn-more mt-15">Learn more</button></a></div>-->
                <!--                </div>-->
                <!---->
                <!--                <div class="sec-2-block">-->
                <!--                    <div class="section-two-img-text">-->
                <!--                        <div class="section-two-img-text-img"><img src="img/icon_listing.png" alt=""></div>-->
                <!--                        <h3 class="section-two-img-text-title">Listing Optimization</h3>-->
                <!--                    </div>-->
                <!--                    <div class="section-two-description">Enlarge visibility of your product with simple, but-->
                <!--                        irreplaceable things that raise your listing to the higher level.</div>-->
                <!--                    <div><a href="#"><button class="button-learn-more mt-15">Learn more</button></a></div>-->
                <!--                </div>-->
                <!---->
                <!--                <div class="sec-2-block">-->
                <!--                    <div class="section-two-img-text">-->
                <!--                        <div class="section-two-img-text-img"><img src="img/icon_branding.png" alt=""></div>-->
                <!--                        <h3 class="section-two-img-text-title">Branding</h3>-->
                <!--                    </div>-->
                <!--                    <div class="section-two-description">Create your own unique branding style and become the-->
                <!--                        best-->
                <!--                        of-->
                <!--                        all competitors with the latest design solutions.-->
                <!--                        Feel the difference in increasing your conversion rate and sales boost!</div>-->
                <!--                    <div><a href="#"><button class="button-learn-more mt-15">Learn more</button></a></div>-->
                <!--                </div>-->
                <!---->
                <!---->
                <!--                <div class="sec-2-block">-->
                <!--                    <div class="section-two-img-text">-->
                <!--                        <div class="section-two-img-text-img"><img src="img/icon_reviews.png" alt=""></div>-->
                <!--                        <h3 class="section-two-img-text-title">Reviews and<br> Customer Service</h3>-->
                <!--                    </div>-->
                <!--                    <div class="section-two-description">Make your listing more attractive with AmzBurn review-->
                <!--                        tools.-->
                <!--                        Any godsend that you need: 5* reviews, review deleting, E-mails of your reviewers and-->
                <!--                        tons-->
                <!--                        of-->
                <!--                        other valuable staff!</div>-->
                <!--                    <div><a href="#"><button class="button-learn-more mt-15">Learn more</button></a></div>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
</div>


<div class="wrapper" id="wrapper-3-home">
    <div class="faq-div"><img src="img/faqs.png" alt="faq"></div>
    <div class="container">
        <div class="section-three">
            <div class="block-faq">
                <h2 class="t-center">FAQs</h2>
                <div>
                    <ul class="faq">
                        <?php foreach ($faq as $item) : ?>
                            <li>
                                <h3 class="question"><?= $item->question ?>
                                    <div class="plus-minus-toggle collapsed"></div>
                                </h3>
                                <div class="answer"><?= $item->answer ?></div>
                            </li>
                        <?php endforeach; ?>
                        <!--                        <li>-->
                        <!--                            <h3 class="question">How it works?-->
                        <!--                                <div class="plus-minus-toggle collapsed"></div>-->
                        <!--                            </h3>-->
                        <!--                            <div class="answer">Our team with the help of professional-->
                        <!--                                skills-->
                        <!--                                and-->
                        <!--                                secure-->
                        <!--                                internal Amazon tools provides the best quality services for all Amazon-->
                        <!--                                marketplaces.</div>-->
                        <!--                        </li>-->
                        <!--                        <li>-->
                        <!--                            <h3 class="question">What are your working hours?-->
                        <!--                                <div class="plus-minus-toggle collapsed"></div>-->
                        <!--                            </h3>-->
                        <!--                            <div class="answer">We can reply to your message within 30-->
                        <!--                                minutes-->
                        <!--                                for any of-->
                        <!--                                your queries between 15 p.m. – 23 p.m. (GMT+6).</div>-->
                        <!--                        </li>-->
                        <!--                        <li>-->
                        <!--                            <h3 class="question">How is the payment process going?-->
                        <!--                                <div class="plus-minus-toggle collapsed"></div>-->
                        <!--                            </h3>-->
                        <!--                            <div class="answer">After confirming the details of your-->
                        <!--                                order-->
                        <!--                                with-->
                        <!--                                our manager-->
                        <!--                                you need to send an order amount with +5% to our Payoneer or PayPal. In case of-->
                        <!--                                inability to-->
                        <!--                                perform an order - we guarantee an immediate refund.</div>-->
                        <!--                        </li>-->

                    </ul>
                </div>
            </div>
            <div class="section-three-img-block">
                <img src="img/faqs-image.png" alt="section-three-img">
            </div>
        </div>
    </div>
</div>



<div class="wrapper" id="wrapper-4-home">
    <div class="contact-div"><img src="img/contact.png" alt="sellers"></div>
    <div class="container">
        <div class="section-four">
            <div class="image-block-3">
                <img src="img/contact-page.png" alt="illustration_3">
            </div>
            <div class="form-block">
                <h2 class="t-center">Contact Us!</h2>
                <div class="form-block-description">Regarding any questions fill in the form or add us over
                    facebook/telegram for easy
                    communication.</div>
                <form method="post" name="mainForm" class="main-form mt-20">

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
                    <a class="a-defoult" href="#">
                        <div class="row-messenger">Contact Us via Messenger <img src="img/icon-messenger.png" id="messenger-1" alt="icon-messager"></div>
                    </a>

            </div>
            </form>
        </div>
    </div>
</div>
</div>
<div class="wrapper">
    <div class="container">
        <div class="section-five">
            <div class="one">
                <ul>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact us</a></li>
                    <br class="br-none">
                    <li><a href="/testimonials">Testimonials</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <div class="two">
                    <div class="in-block"><a class="one" href="#"> <img class="facebook-img" src="img/facebook.png" alt="facebook_img"></a></div>
                    <div class="in-block">
                        <a class="one" href="#"> <img class="message-img" src="img/message.png" alt="message_img"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>