<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lembarkerja */

$this->title = 'Create Lembarkerja';
$this->params['breadcrumbs'][] = ['label' => 'Lembarkerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lembarkerja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
