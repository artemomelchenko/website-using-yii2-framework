<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PageServices */

$this->title = Yii::t('app', 'Create Page Services');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Page Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
