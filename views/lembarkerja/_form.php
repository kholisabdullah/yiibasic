<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lembarkerja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lembarkerja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lembarkerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_lembarkerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_param1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_param2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_param3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_param4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_param5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_param6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_param7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_param8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_param9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kalibrator')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
