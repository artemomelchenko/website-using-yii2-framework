<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    <?php if (Yii::$app->user->isGuest): ?>
    <?php else: ?>
    <?= $this->render('_nav'); ?>
    <?= $this->render('_left'); ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
<!--                        <ol class="breadcrumb float-sm-right">-->
<!--                            <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--                            <li class="breadcrumb-item active">Dashboard v1</li>-->
<!--                        </ol>-->
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <!--    --><?php
                //    NavBar::begin([
                //        'brandLabel' => Yii::$app->name,
                //        'brandUrl' => Yii::$app->homeUrl,
                //        'options' => [
                //            'class' => 'navbar-inverse navbar-fixed-top',
                //        ],
                //    ]);
                //    $menuItems = [
                //        ['label' => 'Home', 'url' => ['/site/index']],
                //    ];
                //    if (Yii::$app->user->isGuest) {
                //        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                //    } else {
                //        $menuItems[] = '<li>'
                //            . Html::beginForm(['/site/logout'], 'post')
                //            . Html::submitButton(
                //                'Logout (' . Yii::$app->user->identity->username . ')',
                //                ['class' => 'btn btn-link logout']
                //            )
                //            . Html::endForm()
                //            . '</li>';
                //    }
                //    echo Nav::widget([
                //        'options' => ['class' => 'navbar-nav navbar-right'],
                //        'items' => $menuItems,
                //    ]);
                //    NavBar::end();
                //    ?>
                <?php endif; ?>
                <?= $content ?>
                <?php if (Yii::$app->user->isGuest): ?>
                <?php else: ?>
        </section>
    </div>

    <?= $this->render('_footer'); ?>
    <?= $this->render('_right'); ?>

<?php endif; ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
