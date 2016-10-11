<!-- Main content -->
    	<row>
        <!-- Default box -->
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
                            <td><input class="col-sm-2 form-control " id="label" placeholder="Masukan No Label" type="text"></td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        </row>
        <row>
        <!-- BAGIAN IDENTITAS ALAT -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Identitas Alat</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nama_alat">Nama Alat</label>
                        <div class="col-sm-5">
                            <input class="form-control" id="nama_alat" placeholder="" value="Bedside Monitor" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="merk_alat">Merk Alat</label>
                        <div class="col-sm-5">
                            <input class="form-control" id="merk_alat" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="tipe_alat">Tipe Alat</label>
                        <div class="col-sm-5">
                            <input class="form-control" id="tipe_alat" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="sn">Serial Number</label>
                        <div class="col-sm-5">
                            <input class="form-control" id="sn" placeholder="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="ruangan">Ruangan</label>
                        <div class="col-sm-5">
                            <input class="form-control" id="ruangan" placeholder="" type="text">
                        </div>
                    </div>
                </div>
            </form>
            <div class="box-footer">
            	<button class="btn btn-default" type="submit">Cancel	</button>
            	<button class="btn btn-info pull-right" type="submit">Submit</button>
        	</div><!-- /.box-footer -->
        </div><!-- /.box-body -->
        </row>
        <row>
        <!-- BAGIAN SUHU KELEMBABAN -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Kondisi Ruangan</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                	<!-- SUHU -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="suhu">SUHU</label>
                        <div class="col-sm-10">
                        	<div class="col-sm-3">                        	
                            <input class="form-control val_average" id="suhu_awal" placeholder="Awal" type="text">
                            </div>
                        	<div class="col-sm-3">                        	
                            <input class="form-control val_average" id="suhu_akhir" placeholder="Akhir" type="text">
                            </div>
                            <div class="col-sm-3">                        	
                            <input class="form-control result_average" id="val_average" name="result_average" placeholder="Rata-Rata" type="text">
                            </div>
							<div class="col-sm-3">
							Satuan	
                            </div>
                        </div>
                    </div>
                    <!-- Kelembaban -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="kelembaban">Kelembaban</label>
                        <div class="col-sm-10">
                        	<div class="col-sm-3">                        	
                            <input class="form-control val_average" id="nisbi_awal" placeholder="Awal" type="text">
                            </div>
                        	<div class="col-sm-3">                        	
                            <input class="form-control val_average" id="nisbi_akhir" placeholder="Akhir" type="text">
                            </div>
                            <div class="col-sm-3">                        	
                            <input class="form-control result_average" id="result_average" name="result_average" placeholder="Rata-Rata" type="text">
                            </div>
							<div class="col-sm-3">
							Satuan	
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
            <div class="box-footer">
            	<button class="btn btn-default" type="submit">Cancel	</button>
            	<button class="btn btn-info pull-right" type="submit">Submit</button>
        	</div><!-- /.box-footer -->
        </div><!-- /.box-body -->
        </row>
        <row>
        <!-- BAGIAN KONDISI FISIK FUNGSI -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pemeriksaan Fisik dan Fungsi</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <!-- Kontrol/indikator -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="kontrolfungsi">Kontrol/indikator</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">
                            <label class="control-label" for="kontrolfungsi">Baik 
                                <input type="radio" name="r1" class="minimal">
                            </label>                          
                            </div>
                            <div class="col-sm-3">                          
                            <label class="control-label" for="kontrolfungsi">Tidak 
                                <input type="radio" name="r1" class="minimal">
                            </label> 
                            </div>                            
                        </div>
                    </div>
                    <!-- Badan / Permukaan -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="badanorpermukaan">Badan / Permukaan</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">
                            <label class="control-label" for="kontrolfungsi">Baik 
                                <input type="radio" name="r2" class="minimal">
                            </label>                          
                            </div>
                            <div class="col-sm-3">                          
                            <label class="control-label" for="kontrolfungsi">Tidak 
                                <input type="radio" name="r2" class="minimal">
                            </label> 
                            </div>                            
                        </div>
                    </div>
                    <!-- ECG Cable -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="ECG Cable">ECG Cable</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">
                            <label class="control-label" for="ECG Cable">Baik 
                                <input type="radio" name="r3" class="minimal">
                            </label>                          
                            </div>
                            <div class="col-sm-3">                          
                            <label class="control-label" for="ECG Cable">Tidak 
                                <input type="radio" name="r3" class="minimal">
                            </label> 
                            </div>                            
                        </div>
                    </div>
                    <!-- SPO2 Sensor -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="ECG Cable">SPO2 Sensor</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">
                            <label class="control-label" for="SPO2 Sensor">Baik 
                                <input type="radio" name="r4" class="minimal">
                            </label>                          
                            </div>
                            <div class="col-sm-3">                          
                            <label class="control-label" for="SPO2 Sensor">Tidak 
                                <input type="radio" name="r4" class="minimal">
                            </label> 
                            </div>                            
                        </div>
                    </div>
                    <!-- Manset -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Manset">Manset</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">
                            <label class="control-label" for="Manset">Baik 
                                <input type="radio" name="r5" class="minimal">
                            </label>                          
                            </div>
                            <div class="col-sm-3">                          
                            <label class="control-label" for="Manset">Tidak 
                                <input type="radio" name="r5" class="minimal">
                            </label> 
                            </div>                            
                        </div>
                    </div>
                    <!-- Aksesoris -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Aksesoris">Aksesoris</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">
                            <label class="control-label" for="Aksesoris">Baik 
                                <input type="radio" name="r6" class="minimal">
                            </label>                          
                            </div>
                            <div class="col-sm-3">                          
                            <label class="control-label" for="Aksesoris">Tidak 
                                <input type="radio" name="r6" class="minimal">
                            </label> 
                            </div>                            
                        </div>
                    </div>
                    
                    
                </div>
            </form>
            <div class="box-footer">
                <button class="btn btn-default" type="submit">Cancel    </button>
                <button class="btn btn-info pull-right" type="submit">Submit</button>
            </div><!-- /.box-footer -->
        </div><!-- /.box-body -->
        </row>
        <row>
        <!-- BAGIAN KINERJA SPO2 -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pengukuran Kinerja SPO2</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <!-- SPO2 Setting 1-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 85">Setting 85</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- SPO2 Setting 2-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 90">Setting 90</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- SPO2 Setting 3-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 95">Setting 95</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- SPO2 Setting 4-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 100">Setting 100</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </form>
            <div class="box-footer">
                <button class="btn btn-default" type="submit">Cancel    </button>
                <button class="btn btn-info pull-right" type="submit">Submit</button>
            </div><!-- /.box-footer -->
        </div><!-- /.box-body -->
        </row>
        <row>
        <!-- BAGIAN PULSE RATE -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pengukuran Kinerja Pulse Rate (BPM)</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <!-- Pulse Rate (BPM) Setting 1-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 60">Setting 60</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- Pulse Rate (BPM) Setting 2-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 80">Setting 80</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- Pulse Rate (BPM) Setting 3-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 120">Setting 120</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- Pulse Rate (BPM) Setting 4-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 180">Setting 180</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="box-footer">
                <button class="btn btn-default" type="submit">Cancel    </button>
                <button class="btn btn-info pull-right" type="submit">Submit</button>
            </div><!-- /.box-footer -->
        </div><!-- /.box-body -->
        </row><row>
        <!-- BAGIAN ECG -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pengukuran Kinerja ECG</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <!-- ECG Setting 1-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 30">Setting 30</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- ECG Setting 2-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 60">Setting 60</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- ECG Setting 3-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 120">Setting 120</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- ECG Setting 4-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 180">Setting 180</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- ECG Setting 5-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Setting 240">Setting 240</label>
                        <div class="col-sm-10">
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-3">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-3">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="box-footer">
                <button class="btn btn-default" type="submit">Cancel    </button>
                <button class="btn btn-info pull-right" type="submit">Submit</button>
            </div><!-- /.box-footer -->
        </div><!-- /.box-body -->
        </row>
        <!-- BAGIAN NIBP -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Pengukuran Kinerja NIBP</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <!-- NIBP Setting Systole 1-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Systole 1">Systole 1</label>
                        <div class="col-sm-10">
                            <div class="col-sm-2 bg-teal">                          
                            <input class="form-control " id="setting 1" placeholder="Setting 1" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-2">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- NIBP Setting Diastole 1-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Diastole 1">Diastole 1</label>
                        <div class="col-sm-10">
                            <div class="col-sm-2 bg-teal">                          
                            <input class="form-control " id="setting 1" placeholder="Setting 1" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-2">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- NIBP Setting Systole 2-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Systole 2">Systole 2</label>
                        <div class="col-sm-10">
                            <div class="col-sm-2 bg-teal">                          
                            <input class="form-control " id="setting 2" placeholder="Setting 2" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-2">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- NIBP Setting Diastole 2-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Diastole 2">Diastole 2</label>
                        <div class="col-sm-10">
                            <div class="col-sm-2 bg-teal">                          
                            <input class="form-control " id="setting 2" placeholder="Setting 2" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-2">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- NIBP Setting Systole 3-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Systole 3">Systole 3</label>
                        <div class="col-sm-10">
                            <div class="col-sm-2 bg-teal">                          
                            <input class="form-control " id="setting 3" placeholder="Setting 3" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-2">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    <!-- NIBP Setting Diastole 3-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="Diastole 3">Diastole 3</label>
                        <div class="col-sm-10">
                            <div class="col-sm-2 bg-teal">                          
                            <input class="form-control " id="setting 3" placeholder="Setting 3" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 1" placeholder="Pengukuran 1" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 2" placeholder="Pengukuran 2" type="text">
                            </div>
                            <div class="col-sm-2">                          
                            <input class="form-control " id="ukur 3" placeholder="Pengukuran 3" type="text">
                            </div>
                            <div class="col-sm-2">
                            Toleransi 5 %  
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </form>
            <div class="box-footer">
                <button class="btn btn-default" type="submit">Cancel    </button>
                <button class="btn btn-info pull-right" type="submit">Submit</button>
            </div><!-- /.box-footer -->
        </div><!-- /.box-body -->
        </row>
        
        
