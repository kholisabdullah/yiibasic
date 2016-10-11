<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lembarkerja */

$this->title = $model->id_lembarkerja;
$this->params['breadcrumbs'][] = ['label' => 'Lembarkerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembarkerja-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_lembarkerja], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_lembarkerja], [
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
            'id_lembarkerja',
            'nama_lembarkerja',
            'kode_lembarkerja',
            'kode_param1',
            'kode_param2',
            'kode_param3',
            'kode_param4',
            'kode_param5',
            'kode_param6',
            'kode_param7',
            'kode_param8',
            'kode_param9',
            'id_kalibrator',
        ],
    ]) ?>

</div>
