<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblAlat */

$this->title = $model->id_alat;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-alat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_alat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_alat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_alat',
            'id_pekerjaan',
            'nama_alat',
            'merk',
            'model',
            'sn',
            'kode_lembarkerja',
            'suhu_awal',
            'suhu_akhir',
            'nisbi_awal',
            'nisbi_akhir',
        ],
    ]) ?>

</div>
