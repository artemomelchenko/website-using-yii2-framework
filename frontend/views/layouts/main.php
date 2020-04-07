<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$settings = \common\models\Settings::find()->one();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $settings->google_analitycs ?>
    <?= $settings->fb_pixel ?>
    <?= $settings->for_code ?>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php if (isset($this->blocks['services'])): ?>
        <?= $this->blocks['services'] ?>
    <?php endif; ?>
    <?php if (isset($this->blocks['contact'])): ?>
        <?= $this->blocks['contact'] ?>
    <?php endif; ?>
    <?php if (isset($this->blocks['thankyou'])): ?>
        <?= $this->blocks['thankyou'] ?>
    <?php endif; ?>
    <?php if (isset($this->blocks['testimonials'])): ?>
        <?= $this->blocks['testimonials'] ?>
    <?php endif; ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="global-header">
    <div class="logo-block">
        <a href="/"><img src="img/logo.png" alt="AmzBurn-logo"></a>
    </div>
    <div class="menu-block-header">
        <nav class="site-nav">

            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
            <ul class="open desktop ul-menu-header">
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact us</a></li>
                <li><a href="/testimonials">Testimonials</a></li>
            </ul>
        </nav>
    </div>
</header>
<?= $content ?>
<footer class="global-footer">
    <div class="copywrite">© AmzBurn, <?= date('Y') ?></div>
    <div class="name-bizmental-footer">CREATED BY <span><a target="blank" href="https://bizmental.com.ua/">bizmental</a></span></div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>