<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HitungParamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hitung-param-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_hitung_param') ?>

    <?= $form->field($model, 'kode_param') ?>

    <?= $form->field($model, 'setting') ?>

    <?= $form->field($model, 'baca') ?>

    <?= $form->field($model, 'iterasi') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'id_alat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
