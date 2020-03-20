<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="wrapper">
    <div class="container">
        <div class="site-error">
            <div class="mw-800">
                <div class="section-error">
                    <div class="section-error-block1">
                        <h1 class="section-one-text-h1 mt-70 sm-tb-mt-0">
                            Sorry</h1>
                        <h3 class="fs-26 mt-15 mb-10"><b>We couldn’t <br>find the page</b>
                        </h3>
                        <div class="mt-0 sm-tb-mt-10">
                            <a href="/"><button class="button-learn-more mt-15">Main page</button></a>
                        </div>
                    </div>
                    <div class="section-error-block-2">

                        <img src="img/error-page.png" alt="image-section-1">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>