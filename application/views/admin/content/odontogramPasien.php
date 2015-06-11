
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tables</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

<div class="section">

    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Odontogram
                    </div>
                    <form action="<?php echo base_url();?>medis/odo" method="post">
                    <input type="text" name="id"/>
                    <button type="submit" class="btn btn-primary btn-lg">Cari</button>
                    </form>
                    <?php if(isset($gigi)){?>
                    <div class="panel-body">
                         <p>Berikut ini adalah posisi gigi yang telah diperiksa</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G11;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G12;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G13;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G14;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G15;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G16;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G17;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G18;?> </div>
                            </div>
                            <div class="col-lg-6 col-offset-6">
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G21;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G22;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G23;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G24;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G25;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G26;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G27;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G28;?> </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-lg-6">
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G51;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G52;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G53;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G54;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G55;?> </div>
                            </div>
                            <div class="col-lg-6 col-offset-6">
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G61;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G62;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G63;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G64;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G65;?> </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-lg-6">
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G81;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G82;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G83;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G84;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G85;?> </div>
                            </div>
                            <div class="col-lg-6 col-offset-6">
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G71;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G72;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G73;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G74;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G75;?> </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-lg-6">
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G41;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G42;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G43;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G44;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G45;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G46;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G47;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:right"><?php echo $gigi->G48;?> </div>
                            </div>
                            <div class="col-lg-6 col-offset-6">
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G31;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G32;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G33;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G34;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G35;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G36;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G37;?> </div>
                                <div class="col-xs-1" style="text-align:center;float:left"><?php echo $gigi->G38;?> </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <div class="col-md-4">
                                Occlusi
                            </div>
                            <div class="col-md-2">
                                <?php echo $gigi->occlusi;?>
                            </div>
                            <br>
                            <div class="col-md-4">
                                Torus Mandibularis
                            </div>
                            <div class="col-md-2">
                                <?php echo $gigi->torus_mandibularis;?>
                            </div>
                            <br>
                            <div class="col-md-4">
                                Diastema
                            </div>
                            <div class="col-md-2">
                                <?php echo $gigi->diastema;?>
                            </div>
                            <br>
                            <div class="col-md-4">
                                Lain-lain
                            </div>
                            <div class="col-md-8">
                                <?php echo $gigi->lain_lain;?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-md-4">
                                Torus Palatinus
                            </div>
                            <div class="col-md-2">
                                <?php echo $gigi->torus_palatinus;?>
                            </div>
                            <br>
                            <div class="col-md-4">
                                Palatum
                            </div>
                            <div class="col-md-2">
                                <?php echo $gigi->palatum;?>
                            </div>
                            <br>
                            <div class="col-md-4">
                                Gigi Anomali
                            </div>
                            <div class="col-md-2">
                                <?php echo $gigi->gigi_anomali;?>
                            </div>
                            <br>
                            <div class="col-md-4">
                                Diperiksa pada tanggal
                            </div>
                            <div class="col-md-4">
                                <?php echo date("d-m-Y");?>
                            </div>
                        </div>
                        <div style="float:right"">
                            <p id="demo18"></p>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float:right""/>Kirim</button>
                    </div>
                    <?php ;}?>
                       
                </div>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>    <!-- Page Content -->
</div>
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <hr>