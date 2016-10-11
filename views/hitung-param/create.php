<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HitungParam */

$this->title = 'Create Hitung Param';
$this->params['breadcrumbs'][] = ['label' => 'Hitung Params', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hitung-param-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
