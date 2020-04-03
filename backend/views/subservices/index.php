<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubservicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Subservices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subservices-index">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <p>
        <?= Html::a(Yii::t('app', 'Create Subservices'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="card">
        <div class="card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'description',
            'price',
//            'hot',
            //'id_service',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
    </div>

</div>
