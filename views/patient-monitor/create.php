<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $alat app\models\Alat */

$this->title = 'Create Patient Monitor';

echo $this->render('_form', [
			'alat' => $alat,
			'daftarHitungParam' => $daftarHitungParam,
		])
?>