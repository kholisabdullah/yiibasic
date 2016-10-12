<?php

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;
use yii\web\AssetManager;

/* @var $this yii\web\View */
/* @var $model app\models\Alat */
/* @var $form yii\bootstrap	\ActiveForm */


$form = ActiveForm::begin([
			'layout' => 'horizontal',
			'fieldConfig' => [
				'horizontalCssClasses' => [
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
							<td><?= $form->field($model, 'no_label')->label(false) ?></td>
						</tr>
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<!-- BAGIAN IDENTITAS ALAT -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Identitas Alat</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<div >
				<div class="box-body">
					<!-- Klo bikin tampilan standar, lebih ringkas -->
					<?= $form->field($model, 'nama_alat', []) ?>
					<?= $form->field($model, 'merk')->textInput() ?>
					<?= $form->field($model, 'model')->textInput() ?>
					<?= $form->field($model, 'sn')->textInput() ?>
				</div>
			</div>
		</div><!-- /.box-body -->
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<!-- BAGIAN SUHU KELEMBABAN -->
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
                			<?= $form->field($model, 'suhu_awal', ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Akhir']])->label(false) ?>
                		</div>
                		<div class="col-sm-3">
                			<?= $form->field($model, 'suhu_akhir', ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Awal']])->label(false) ?>
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
                			<?= $form->field($model, 'nisbi_awal', ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Akhir']])->label(false) ?>
                		</div>
                		<div class="col-sm-3">
                			<?= $form->field($model, 'nisbi_akhir', ['horizontalCssClasses' => $wrapper, 'inputOptions' => ['placeholder' => 'Awal']])->label(false) ?>
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

<div class="row">
	<div class="col-sm-12">
		<div class="box box-success">
			<div class="box-header with-border">
				<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => [$model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'pull-right']]) ?>
			</div>
		</div>
	</div>
</div>
<?php
	ActiveForm::end();
	// Contoh menambahkan external js (khusus file ini)
	$this->registerJsFile(Yii::$app->assetManager->baseUrl . '/js/patient-monitor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

