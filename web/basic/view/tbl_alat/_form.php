<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblAlat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-alat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pekerjaan')->textInput() ?>

    <?= $form->field($model, 'nama_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_lembarkerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu_awal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu_akhir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nisbi_awal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nisbi_akhir')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
