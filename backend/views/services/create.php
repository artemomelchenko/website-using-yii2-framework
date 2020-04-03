<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Services */

$this->title = Yii::t('app', 'Create Services');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-create">

    <div class="card">
        <div class="card-body">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
