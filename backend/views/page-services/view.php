<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PageServices */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Page Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="page-services-view">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<!--        --><?//= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
//                'method' => 'post',
//            ],
//        ]) ?>
    </p>
    <div class="card">
        <div class="card-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'for_fb_pixel:ntext',
            'other_code:ntext',
        ],
    ]) ?>
        </div>
    </div>
</div>
