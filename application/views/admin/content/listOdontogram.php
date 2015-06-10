 
    <!-- /#wrapper -->
    <!--Header-->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Odontogram</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Odontogram
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID REKAM</th>
                                            <th>GIGI NOMER 18</th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                        
                                    <?php 
                                    foreach($odontogram->result() as $row)
                                    {

                                        echo '<tr>'
                                        . ' <td>'. $row->id_rekam .'</td>
                                            <td>'. $row->G18.'</td>
                                            </tr>'; 
                                           ;
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