
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Insert Dokter</h1>
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
                            Masukkan Data Dokter
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <form role="form" action='<?php echo base_url();?>admin/insertDokter' method='post'>
                                        <!--
                                        'user_dokter','password_dokter',
                                        'nama_lengkap_dokter','identitas_dokter','jenis_kelamin_dokter',
                                        'alamat_dokter','hp_dokter'
                                        -->
                                        <div class="form-group">
                                            <label>Identitas Dokter (KTP/SIM)</label>
                                            <input type='text' name='identitas_dokter'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>User Name Dokter</label>
                                            <input type='text' name='user_dokter'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>Password Doktor</label>
                                            <input type='password' name='password_dokter'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>Nama Lengkap Dokter</label>
                                            <input type='text' name='nama_lengkap_dokter'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin_dokter" id="L" value="L">Laki-Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin_dokter" id="P" value="P">Perempuan
                                                </label>
                                        </div>   
                                        <div class="form-group">
                                            <label>Alamat Dokter</label>
                                            <input type='text' name='alamat_dokter'class="form-control" autocomplete="off" required autofocus>
                                        </div>       
                                        <div class="form-group">
                                            <label>HP Dokter</label>
                                            <input type='text' name='hp_dokter'class="form-control" autocomplete="off" required autofocus>
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