<div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

<!--XXXXXXXXXXXXXXX      SIDE BAR        XXXXXXXXXXXXXXXX-->


<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                 </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
<!--Control Dokter-->

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Kontrol Dokter<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>admin/listDokter/">List Dokter</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>admin/addDokter/">Tambah Dokter</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
<!--Control Pasien-->
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Kontrol Pasien<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>admin/listPasien/">List Pasien</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>admin/addPasien/">Tambah Pasien</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>                    
<!--Control Gigi-->
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Kontrol GIGI<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>medis/listodontogram/">List Odontogram</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>medis/addOdontogram">Tambah Catatan Odontogram</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>                    
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
