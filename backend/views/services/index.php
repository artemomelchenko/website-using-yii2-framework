<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Services');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">


    <p>
        <?= Html::a(Yii::t('app', 'Create Services'), ['create'], ['class' => 'btn btn-success']) ?>
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
//            'description',
                    [
                        'attribute' => 'img',
                        'format' => 'raw',
                        'value' => function ($data) {
                            return Html::img('/img/' . $data->img, [
                                'alt' => 'Картинка',
                                'style' => 'width:20px;'
                            ]);
                        },
                    ],

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
