<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HitungParam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hitung-param-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_param')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'setting')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iterasi')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_alat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
