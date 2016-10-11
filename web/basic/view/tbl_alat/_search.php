<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblAlatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-alat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_alat') ?>

    <?= $form->field($model, 'id_pekerjaan') ?>

    <?= $form->field($model, 'nama_alat') ?>

    <?= $form->field($model, 'merk') ?>

    <?= $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'sn') ?>

    <?php // echo $form->field($model, 'kode_lembarkerja') ?>

    <?php // echo $form->field($model, 'suhu_awal') ?>

    <?php // echo $form->field($model, 'suhu_akhir') ?>

    <?php // echo $form->field($model, 'nisbi_awal') ?>

    <?php // echo $form->field($model, 'nisbi_akhir') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
