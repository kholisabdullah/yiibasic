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
		$alat->kode_lembarkerja = 'PatMonitor';

		$daftarHitungParam = [];
		$daftarKeterangan = [
				// Bagian Pemeriksaan Fisik dan Fungsi
				/* 0 */ ['kode_param' => 'FISF', 'keterangan' => 'Kontrol/indikator'],
				/* 1 */ ['kode_param' => 'FISF', 'keterangan' => 'Badan / Permukaan'],
				/* 2 */ ['kode_param' => 'FISF', 'keterangan' => 'ECG Cable'],
				/* 3 */ ['kode_param' => 'FISF', 'keterangan' => 'SPO2 Sensor'],
				/* 4 */ ['kode_param' => 'FISF', 'keterangan' => 'Manset'],
				/* 5 */ ['kode_param' => 'FISF', 'keterangan' => 'Aksesoris'],
				// Bagian Kelistrikan
				/* 6 */ ['kode_param' => 'ELEC', 'keterangan' => 'Patient Leakage Current LL - Earth'],
				/* 7 */ ['kode_param' => 'ELEC', 'keterangan' => 'Patient Leakage Current LA - Earth '],
				/* 8 */ ['kode_param' => 'ELEC', 'keterangan' => 'Patient Leakage Current RL - Earth'],
				/* 9 */ ['kode_param' => 'ELEC', 'keterangan' => 'Patient Leakage Current RA - Earth '],
				/* 10 */ ['kode_param' => 'ELEC', 'keterangan' => 'Arus bocor pada chasis tanpa pembumian'],
				/* 11 */ ['kode_param' => 'ELEC', 'keterangan' => 'Arus bocor pada chasis dengan pembumian'],
				/* 12 */ ['kode_param' => 'ELEC', 'keterangan' => 'Tahanan Isolasi Kabel Catu Daya dengan Chassis'],
				/* 13 */ ['kode_param' => 'ELEC', 'keterangan' => 'Tahanan Hubungan Pentanahan'],
				/* 14 */ ['kode_param' => 'ELEC', 'keterangan' => 'Tegangan Jala-jala Terukur'],
				/* 15 */ ['kode_param' => 'ELEC', 'keterangan' => 'Patient Leakage Current LA - Earth  '],
				/* 16 */ ['kode_param' => 'ELEC', 'keterangan' => 'Patient Leakage Current V1 - V6 – Earth '],
				// Bagian Kinerja SPO2 I
				/* 17 */ ['kode_param' => 'SPO2', 'setting' => '85', 'iterasi' => 1],
				/* 18 */ ['kode_param' => 'SPO2', 'setting' => '85', 'iterasi' => 2],
				/* 19 */ ['kode_param' => 'SPO2', 'setting' => '85', 'iterasi' => 3],
				/* 20 */ ['kode_param' => 'SPO2', 'setting' => '90', 'iterasi' => 1],
				/* 21 */ ['kode_param' => 'SPO2', 'setting' => '90', 'iterasi' => 2],
				/* 22 */ ['kode_param' => 'SPO2', 'setting' => '90', 'iterasi' => 3],
				/* 23 */ ['kode_param' => 'SPO2', 'setting' => '95', 'iterasi' => 1],
				/* 24 */ ['kode_param' => 'SPO2', 'setting' => '95', 'iterasi' => 2],
				/* 25 */ ['kode_param' => 'SPO2', 'setting' => '95', 'iterasi' => 3],
				/* 26 */ ['kode_param' => 'SPO2', 'setting' => '100', 'iterasi' => 1],
				/* 27 */ ['kode_param' => 'SPO2', 'setting' => '100', 'iterasi' => 2],
				/* 28 */ ['kode_param' => 'SPO2', 'setting' => '100', 'iterasi' => 3],
				// Bagian Kinerja SPO2 II
				/* 29 */ ['kode_param' => 'SPO2', 'setting' => '60', 'iterasi' => 1],
				/* 30 */ ['kode_param' => 'SPO2', 'setting' => '60', 'iterasi' => 2],
				/* 31 */ ['kode_param' => 'SPO2', 'setting' => '60', 'iterasi' => 3],
				/* 32 */ ['kode_param' => 'SPO2', 'setting' => '80', 'iterasi' => 1],
				/* 33 */ ['kode_param' => 'SPO2', 'setting' => '80', 'iterasi' => 2],
				/* 34 */ ['kode_param' => 'SPO2', 'setting' => '80', 'iterasi' => 3],
				/* 35 */ ['kode_param' => 'SPO2', 'setting' => '120', 'iterasi' => 1],
				/* 36 */ ['kode_param' => 'SPO2', 'setting' => '120', 'iterasi' => 2],
				/* 37 */ ['kode_param' => 'SPO2', 'setting' => '120', 'iterasi' => 3],
				/* 38 */ ['kode_param' => 'SPO2', 'setting' => '180', 'iterasi' => 1],
				/* 39 */ ['kode_param' => 'SPO2', 'setting' => '180', 'iterasi' => 2],
				/* 40 */ ['kode_param' => 'SPO2', 'setting' => '180', 'iterasi' => 3],
				// Bagian Kinerja ECG
				/* 41 */ ['kode_param' => 'ECG', 'setting' => '30', 'iterasi' => 1],
				/* 42 */ ['kode_param' => 'ECG', 'setting' => '30', 'iterasi' => 2],
				/* 43 */ ['kode_param' => 'ECG', 'setting' => '30', 'iterasi' => 3],
				/* 44 */ ['kode_param' => 'ECG', 'setting' => '60', 'iterasi' => 1],
				/* 45 */ ['kode_param' => 'ECG', 'setting' => '60', 'iterasi' => 2],
				/* 46 */ ['kode_param' => 'ECG', 'setting' => '60', 'iterasi' => 3],
				/* 47 */ ['kode_param' => 'ECG', 'setting' => '120', 'iterasi' => 1],
				/* 48 */ ['kode_param' => 'ECG', 'setting' => '120', 'iterasi' => 2],
				/* 49 */ ['kode_param' => 'ECG', 'setting' => '120', 'iterasi' => 3],
				/* 50 */ ['kode_param' => 'ECG', 'setting' => '180', 'iterasi' => 1],
				/* 51 */ ['kode_param' => 'ECG', 'setting' => '180', 'iterasi' => 2],
				/* 52 */ ['kode_param' => 'ECG', 'setting' => '180', 'iterasi' => 3],
				/* 53 */ ['kode_param' => 'ECG', 'setting' => '240', 'iterasi' => 1],
				/* 54 */ ['kode_param' => 'ECG', 'setting' => '240', 'iterasi' => 2],
				/* 55 */ ['kode_param' => 'ECG', 'setting' => '240', 'iterasi' => 3],
				// Bagian NIBP
				/* 56 */ ['kode_param' => 'NIBP','keterangan' => 'Systole', 'iterasi' => 1],
				/* 57 */ ['kode_param' => 'NIBP','keterangan' => 'Systole', 'iterasi' => 2 ],
				/* 58 */ ['kode_param' => 'NIBP','keterangan' => 'Systole', 'iterasi' => 3 ],
				/* 57 */ ['kode_param' => 'NIBP','keterangan' => 'Diastole'],
				/* 57 */ ['kode_param' => 'NIBP','keterangan' => 'Diastole'],
				/* 57 */ ['kode_param' => 'NIBP','keterangan' => 'Diastole'],
				/* 57 */ ['kode_param' => 'NIBP','keterangan' => 'Diastole'],
				/* 57 */ ['kode_param' => 'NIBP','keterangan' => 'Diastole'],
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

