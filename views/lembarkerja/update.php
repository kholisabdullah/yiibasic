<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lembarkerja */

$this->title = 'Update Lembarkerja: ' . $model->id_lembarkerja;
$this->params['breadcrumbs'][] = ['label' => 'Lembarkerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lembarkerja, 'url' => ['view', 'id' => $model->id_lembarkerja]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lembarkerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
