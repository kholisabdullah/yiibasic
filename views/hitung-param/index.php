<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HitungParamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hitung Params';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hitung-param-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hitung Param', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_hitung_param',
            'kode_param',
            'setting',
            'baca',
            'iterasi',
            // 'keterangan',
            // 'id_alat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
