<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblAlat */

$this->title = 'Patient Monitor';
$this->params['breadcrumbs'][] = ['label' => 'Patient Monitor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-alat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
