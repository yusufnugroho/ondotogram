 
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
                            Data Dokter
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Identitas Dokter</th>
                                            <th>Nama Lengkap Dokter</th>
                                            <th>User Dokter</th>
                                            <th>Password Dokter</th>
                                            <th>Action</th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                        
                                    <?php 
                                    foreach($dokter->result() as $row)
                                    {

                                        echo '<tr>'
                                        . ' <td>'. $row->identitas_dokter .'</td>
                                            <td>'. $row->nama_lengkap_dokter.'</td>
                                            <td>'. $row->user_dokter .'</td>
                                            <td>'. $row->password_dokter .'</td>
                                            <td>'; 
                                            $status=$row->status_dokter;
                                            if($status == "Aktif")
                                            {
                                                echo '<a href='. base_url()."admin/deactiveDokter/".$row->id_dokter.' class="btn btn-success">Activated</a>';
                                            }
                                            elseif($status == "Tidak Aktif")
                                            {
                                                 echo '<a href='. base_url()."admin/activeDokter/".$row->id_dokter.' class="btn btn-danger">Deactivated</a>';
                                            }; 
                                             
                                            echo ' <a href='. base_url()."admin/update/".$row->id_dokter.' class="btn btn-primary"> Editt</a>
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