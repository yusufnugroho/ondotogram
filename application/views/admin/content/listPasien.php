 
    <!-- /#wrapper -->
    <!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ehm</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pasien
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Identitas Pasien</th>
                                            <th>Nama Lengkap Pasien</th>
                                            <th>User Pasien</th>
                                            <th>Password Pasien</th>
                                            <th>Jenis Kelamin Pasien</th>
                                            <th>Alamat Pasien</th>
                                            <th>No HP Pasien</th>
                                            <th>Action</th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                        
                                    <?php 
                                    foreach($pasien->result() as $row)
                                    {

                                        echo '<tr>'
                                        . ' <td>'. $row->identitas_pasien .'</td>
                                            <td>'. $row->nama_lengkap_pasien.'</td>
                                            <td>'. $row->user_pasien .'</td>
                                            <td>'. $row->password_pasien .'</td>
                                            <td>'. $row->jenis_kelamin_pasien .'</td>
                                            <td>'. $row->alamat_rumah_pasien .'</td>
                                            <td>'. $row->hp_pasien .'</td>
                                            <td>'; 
                                            $status=$row->status_pasien;
                                            if($status == "Aktif")
                                            {
                                                echo '<a href='. base_url()."admin/deactive/".$row->id_pasien.' class="btn btn-success">Activated</a>';
                                            }
                                            elseif($status == "Tidak Aktif")
                                            {
                                                 echo '<a href='. base_url()."admin/active/".$row->id_pasien.' class="btn btn-danger">Deactivated</a>';
                                            }; 
                                             
                                            echo ' <a href='. base_url()."admin/update/".$row->id_pasien.' class="btn btn-primary"> Editt</a>
                                            </tr>';
                                    }       
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!--Footer-->