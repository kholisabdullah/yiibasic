<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblAlatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Alats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-alat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Alat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_alat',
            'id_pekerjaan',
            'nama_alat',
            'merk',
            'model',
            // 'sn',
            // 'kode_lembarkerja',
            // 'suhu_awal',
            // 'suhu_akhir',
            // 'nisbi_awal',
            // 'nisbi_akhir',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
