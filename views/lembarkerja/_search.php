<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LembarkerjaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lembarkerja-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_lembarkerja') ?>

    <?= $form->field($model, 'nama_lembarkerja') ?>

    <?= $form->field($model, 'kode_lembarkerja') ?>

    <?= $form->field($model, 'kode_param1') ?>

    <?= $form->field($model, 'kode_param2') ?>

    <?php // echo $form->field($model, 'kode_param3') ?>

    <?php // echo $form->field($model, 'kode_param4') ?>

    <?php // echo $form->field($model, 'kode_param5') ?>

    <?php // echo $form->field($model, 'kode_param6') ?>

    <?php // echo $form->field($model, 'kode_param7') ?>

    <?php // echo $form->field($model, 'kode_param8') ?>

    <?php // echo $form->field($model, 'kode_param9') ?>

    <?php // echo $form->field($model, 'id_kalibrator') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
