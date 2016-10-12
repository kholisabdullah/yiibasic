<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Alat;
use app\models\HitungParam;

class PatientMonitorController extends Controller
{
	function actionIndex()
	{
		return $this->render('index');
	}

	public function actionCreate()
	{
		$model = new Alat();
		$model->kode_lembarkerja = 'LK / MK / P - 01';

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->code]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
	}
}

