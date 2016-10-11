<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HitungParam */

$this->title = 'Update Hitung Param: ' . $model->id_hitung_param;
$this->params['breadcrumbs'][] = ['label' => 'Hitung Params', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_hitung_param, 'url' => ['view', 'id' => $model->id_hitung_param]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hitung-param-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
