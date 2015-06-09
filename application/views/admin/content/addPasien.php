
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Insert Pasien</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Masukkan Data Pasien
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>admin/insertPasien' method='post'>
                                        <!--
                                        'user_pasien','password_pasien',
                                        'nama_lengkap_pasien','identitas_pasien','jenis_kelamin_pasien',
                                        'alamat_pasien','hp_pasien'
                                        -->
                                        <!--
                                        `user_pasien`, `password_pasien`, `nama_lengkap_pasien`, `identitas_pasien`, "
                                        . "`jenis_kelamin_pasien`,  `alamat_rumah_pasien`, `hp_pasien`
                                        -->
                                        <div class="form-group">
                                            <label>Identitas Pasien (KTP/SIM)</label>
                                            <input type='text' name='identitas_pasien'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>User Name Pasien</label>
                                            <input type='text' name='user_pasien'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>Password Doktor</label>
                                            <input type='password' name='password_pasien'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>Nama Lengkap Pasien</label>
                                            <input type='text' name='nama_lengkap_pasien'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin_pasien" id="L" value="L">Laki-Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin_pasien" id="P" value="P">Perempuan
                                                </label>
                                        </div>   
                                        <div class="form-group">
                                            <label>Alamat Pasien</label>
                                            <input type='text' name='alamat_pasien'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>HP Pasien</label>
                                            <input type='text' name='hp_pasien'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        
                                        <div>
                                            <button type="submit" class="btn btn-default">Submit Button</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!--Footer-->