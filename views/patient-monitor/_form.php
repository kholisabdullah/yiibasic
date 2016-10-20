<?php

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;
use yii\web\AssetManager;

/* @var $this yii\web\View */
/* @var $alat app\models\Alat */
/* @var $form yii\bootstrap	\ActiveForm */


$form = ActiveForm::begin([
			'layout' => 'horizontal',
			'fieldConfig' => [
				'horizontalCssClasses' => [
					'label' => 'col-sm-2',
					'offset' => '',
				],
			],
		]);
?>

<div class="row">
	<div class="col-sm-12">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Patient Monitor</h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-toggle="tooltip" data-widget="collapse" title="Collapse" type="button">
					<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="box-body no-padding">
				<table class="table">
					<tbody>
						<tr>
							<th style="width: 10px">#</th>
							<th>Kode Dokumen</th>
							<th>Edisi Ke :</th>
							<th>Revisi Ke</th>
							<th>No Label</th>
						</tr>
						<tr>
							<td>1.</td>
							<td>LK / MK / P - 01</td>
							<td>1</td>
							<td>1</td>
							<!-- Contoh pake yii, buat bikin html input (syarat: harus ada line 3-18) -->
							<!-- Keuntungannya nama udah disesuaikan sesuai dengan model -->
							<td><?= $form->field($alat, 'no_label')->label(false) ?></td>
						</tr>
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
</div>

<!-- BAGIAN IDENTITAS ALAT -->
<div class="row">
	<div class="col-sm-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Identitas Alat</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<div >
				<div class="box-body">
					<!-- Klo bikin tampilan standar, lebih ringkas -->
					<?= $form->field($alat, 'nama_alat') ?>
					<?= $form->field($alat, 'merk') ?>
					<?= $form->field($alat, 'model') ?>
					<?= $form->field($alat, 'sn') ?>
				</div>
			</div>
		</div><!-- /.box-body -->
	</div>
</div>

<!-- BAGIAN SUHU KELEMBABAN -->
<div class="row">
	<div class="col-sm-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Kondisi Ruangan</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<div class="box-body">
				<!-- SUHU -->
				<div class="row">
					<label class="col-sm-2 control-label" for="alat-suhu_awal">Suhu</label>
					<div class="col-sm-10">
						<?php $wrapper = ['wrapper' => 'col-sm-12',] ?>
						<div class="col-sm-3">
							<?= $form->field($alat, 'suhu_awal', ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Akhir']])->label(false) ?>
						</div>
						<div class="col-sm-3">
							<?= $form->field($alat, 'suhu_akhir', ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Awal']])->label(false) ?>
						</div>
						<div class="col-sm-3">
							<input class="form-control result_average" id="suhu_average" name="result_average" placeholder="Rata-Rata" type="text" readonly>
						</div>
						<div class="col-sm-3">Satuan</div>
					</div>
				</div>
				<!-- Kelembaban -->
				<div class="row">
					<label class="col-sm-2 control-label" for="alat-nisbi_awal">Kelembaban</label>
					<div class="col-sm-10">
						<?php $wrapper = ['wrapper' => 'col-sm-12',] ?>
						<div class="col-sm-3">
							<?= $form->field($alat, 'nisbi_awal', ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Akhir']])->label(false) ?>
						</div>
						<div class="col-sm-3">
							<?= $form->field($alat, 'nisbi_akhir', ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Awal']])->label(false) ?>
						</div>
						<div class="col-sm-3">
							<input class="form-control result_average" id="nisbi_average" name="result_average" placeholder="Rata-Rata" type="text" readonly>
						</div>
						<div class="col-sm-3">Satuan</div>
					</div>
				</div>
			</div>
		</div><!-- /.box-body -->
	</div>
</div>

<!-- BAGIAN KONDISI FISIK FUNGSI -->
<div class="row">
	<div class="col-sm-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Pemeriksaan Fisik dan Fungsi</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<div class="box-body">
				<!-- Indeks 0 - 5: lihat controllers\PatientMonitorController.php baris 26 - 31 -->
				<?php for ($i = 0; $i < 6; $i++): ?>
					<?php $hitungParam = $daftarHitungParam[$i] ?>
					<div class="row">
						<div class="">
							<label class="col-sm-2 control-label" for="hitungparam-<?= $i ?>-baca"><?= $hitungParam->keterangan ?></label>
							<?= $form->field($hitungParam, "[$i]baca", ['inputOptions' => ['uncheck' => 0]])->inline()->radioList([1 => 'Baik', 0 => 'Tidak'])->label(false) ?>
						</div>
					</div>
				<?php endfor ?>
			</div>
		</div>
	</div>
</div>

<!-- BAGIAN KINERJA KELISTRIKAN -->
<div class="row">
	<div class="col-sm-12">
		<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pengukuran Kinerja ECG</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
				<!-- Indeks 6 - 16: lihat controllers\PatientMonitorController.php baris 45 - 56 -->
                <?php for ($i = 6; $i < 17; $i++): ?>
				<?php $hitungParam = $daftarHitungParam[$i] ?>
                <div class="row">
                    <label class="col-sm-5 control-label" for="">Setting <?= $hitungParam->keterangan ?></label>
                    <div class="col-sm-7">
						<?php $wrapper = ['wrapper' => 'col-sm-12',] ?>

						<!-- Hitung Iterasi 1 -->
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>


                    </div>
                </div>
            	<?php endfor ?>
            </div>
        </div>
	</div>
</div>

<!-- BAGIAN KINERJA SPO2 I-->
<div class="row">
	<div class="col-sm-12">
		<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pengukuran Kinerja SPO2 Bagian I</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
				<!-- Indeks 17 - 28: lihat controllers\PatientMonitorController.php baris 45 - 56 -->
                <?php for ($i = 17; $i < 29; $i++): ?>
				<?php $hitungParam = $daftarHitungParam[$i] ?>
                <div class="row">
                    <label class="col-sm-2 control-label" for="">Setting <?= $hitungParam->setting ?></label>
                    <div class="col-sm-10">
						<?php $wrapper = ['wrapper' => 'col-sm-12',] ?>

						<!-- Hitung Iterasi 1 -->
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

						<?php $i++ ?>
						<!-- Hitung Iterasi 2 -->
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

						<!-- Hitung Iterasi 3 -->
						<?php $i++ ?>
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

                        <div class="col-sm-3">
	                        Toleransi 5 %
                        </div>
                    </div>
                </div>
            	<?php endfor ?>
            </div>
        </div>
	</div>
</div>

<!-- BAGIAN KINERJA SPO2 II-->
<div class="row">
	<div class="col-sm-12">
		<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pengukuran Kinerja SPO2 Bagian II</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
				<!-- Indeks 29 - 40: lihat controllers\PatientMonitorController.php baris 58 - 69 -->
                <?php for ($i = 29; $i < 41; $i++): ?>
				<?php $hitungParam = $daftarHitungParam[$i] ?>
                <div class="row">
                    <label class="col-sm-2 control-label" for="">Setting <?= $hitungParam->setting ?></label>
                    <div class="col-sm-10">
						<?php $wrapper = ['wrapper' => 'col-sm-12',] ?>

						<!-- Hitung Iterasi 1 -->
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

						<?php $i++ ?>
						<!-- Hitung Iterasi 2 -->
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

						<!-- Hitung Iterasi 3 -->
						<?php $i++ ?>
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

                        <div class="col-sm-3">
	                        Toleransi 5 %
                        </div>
                    </div>
                </div>
            	<?php endfor ?>
            </div>
        </div>
	</div>
</div>

<!-- BAGIAN KINERJA ECG-->
<div class="row">
	<div class="col-sm-12">
		<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pengukuran ECG</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
				<!-- Indeks 41 - 55: lihat controllers\PatientMonitorController.php baris 71 - 85 -->
                <?php for ($i = 41; $i < 56; $i++): ?>
				<?php $hitungParam = $daftarHitungParam[$i] ?>
                <div class="row">
                    <label class="col-sm-2 control-label" for="">Setting <?= $hitungParam->setting ?></label>
                    <div class="col-sm-10">
						<?php $wrapper = ['wrapper' => 'col-sm-12',] ?>

						<!-- Hitung Iterasi 1 -->
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

						<?php $i++ ?>
						<!-- Hitung Iterasi 2 -->
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

						<!-- Hitung Iterasi 3 -->
						<?php $i++ ?>
						<div class="col-sm-3">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

                        <div class="col-sm-3">
	                        Toleransi 5 %
                        </div>
                    </div>
                </div>
            	<?php endfor ?>
            </div>
        </div>
	</div>
</div>

<!-- BAGIAN KINERJA NIBP-->
<div class="row">
	<div class="col-sm-12">
		<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pengukuran ECG</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <?php for ($i = 56; $i < 62; $i++): ?>
				<?php $hitungParam = $daftarHitungParam[$i] ?>
                <div class="row">
                    <label class="col-sm-2 control-label" for=""><?= $hitungParam->keterangan?></label>
                    <div class="col-sm-10">
						<?php $wrapper = ['wrapper' => 'col-sm-12',] ?>
						<!-- Setting -->
						<div class="col-sm-2">
							<?= $form->field($hitungParam, "[$i]setting", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Setting']])->label(false) ?>
						</div>

						<!-- Hitung Iterasi 1 -->
						<div class="col-sm-2">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

						<?php $i++ ?>
						<!-- Hitung Iterasi 2 -->
						<div class="col-sm-2">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

						<!-- Hitung Iterasi 3 -->
						<?php $i++ ?>
						<div class="col-sm-2">
							<?= $form->field($hitungParam, "[$i]baca", ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Pengukuran']])->label(false) ?>
						</div>

                        <div class="col-sm-2">
	                        Toleransi 5 %
                        </div>
                    </div>
                </div>
            	<?php endfor ?>
            </div>
        </div>
	</div>
</div>


<div class="row">
	<div class="col-sm-12">
		<div class="box box-success">
			<div class="box-header with-border">
				<?= Html::submitButton($alat->isNewRecord ? 'Create' : 'Update', ['class' => [$alat->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'pull-right']]) ?>
			</div>
		</div>
	</div>
</div>
<?php
	ActiveForm::end();
	// Contoh menambahkan external js (khusus file ini)
	$this->registerJsFile(Yii::$app->assetManager->baseUrl . '/js/patient-monitor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

