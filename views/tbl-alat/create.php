<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblAlat */

$this->title = 'Create Tbl Alat';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-alat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
