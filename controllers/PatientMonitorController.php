<?php

namespace app\controllers;

use Yii;
use yii\base\Model;
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
		$alat = new Alat();
		$alat->kode_lembarkerja = 'LK / MK / P - 01';

		$daftarHitungParam = [];
		$daftarKeterangan = [
				// Bagian Pemeriksaan Fisik dan Fungsi
				/* 0 */ ['kode_param' => 'FISF', 'keterangan' => 'Kontrol/indikator'],
				/* 1 */ ['kode_param' => 'FISF', 'keterangan' => 'Badan / Permukaan'],
				/* 2 */ ['kode_param' => 'FISF', 'keterangan' => 'ECG Cable'],
				/* 3 */ ['kode_param' => 'FISF', 'keterangan' => 'SPO2 Sensor'],
				/* 4 */ ['kode_param' => 'FISF', 'keterangan' => 'Manset'],
				/* 5 */ ['kode_param' => 'FISF', 'keterangan' => 'Aksesoris'],
				// Bagian Kinerja ECG
				/* 6 */ ['kode_param' => 'SPO2', 'setting' => '85', 'iterasi' => 1],
				/* 7 */ ['kode_param' => 'SPO2', 'setting' => '85', 'iterasi' => 2],
				/* 8 */ ['kode_param' => 'SPO2', 'setting' => '85', 'iterasi' => 3],
				/* 9 */ ['kode_param' => 'SPO2', 'setting' => '90', 'iterasi' => 1],
				/* 10 */ ['kode_param' => 'SPO2', 'setting' => '90', 'iterasi' => 2],
				/* 11 */ ['kode_param' => 'SPO2', 'setting' => '90', 'iterasi' => 3],
				/* 12 */ ['kode_param' => 'SPO2', 'setting' => '95', 'iterasi' => 1],
				/* 13 */ ['kode_param' => 'SPO2', 'setting' => '95', 'iterasi' => 2],
				/* 14 */ ['kode_param' => 'SPO2', 'setting' => '95', 'iterasi' => 3],
				/* 15 */ ['kode_param' => 'SPO2', 'setting' => '100', 'iterasi' => 1],
				/* 16 */ ['kode_param' => 'SPO2', 'setting' => '100', 'iterasi' => 2],
				/* 17 */ ['kode_param' => 'SPO2', 'setting' => '100', 'iterasi' => 3],
			];

		for ($i = 0; $i < count($daftarKeterangan); $i++) {
			$daftarHitungParam[$i] = new HitungParam($daftarKeterangan[$i]);
		}

		if ($alat->load(Yii::$app->request->post()) && $alat->save()) {
			Model::loadMultiple($daftarHitungParam, Yii::$app->request->post());

			foreach ($daftarHitungParam as $hitungParam) {
				$hitungParam->link('alat', $alat);
			}
            return $this->redirect(['view', 'id' => $alat->id_alat]);
        } else {
            return $this->render('create', [
                'alat' => $alat,
                'daftarHitungParam' => $daftarHitungParam,
            ]);
        }
	}
}

