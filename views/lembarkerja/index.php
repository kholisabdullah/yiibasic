<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LembarkerjaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lembarkerjas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembarkerja-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lembarkerja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_lembarkerja',
            'nama_lembarkerja',
            'kode_lembarkerja',
            'kode_param1',
            'kode_param2',
            // 'kode_param3',
            // 'kode_param4',
            // 'kode_param5',
            // 'kode_param6',
            // 'kode_param7',
            // 'kode_param8',
            // 'kode_param9',
            // 'id_kalibrator',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
