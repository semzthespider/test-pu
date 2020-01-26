    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Monitoring Berkas</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

 <style>
#wrapper {
    width: 900px;
    margin: auto;
    padding: 10px;
}
body {
    background: #33ccff;
    font-family: 'Supermercado One', cursive;
}

#syam
{color: #000099;
background: #ffff00}

h1 {
    text-align: center;
}

.text {
    position: relative;
    display: inline-block;
    font-size: 3rem;
    text-transform: uppercase;
    color: #330066;
    text-shadow: 0px 0px 0px #330066, 8px 8px 0px rgba(0, 0, 0, 0.0);
}
</style>

  </head><bod>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="wrapper"><h1 class="text">
                    <img src="<?php echo base_url ();?>assets/images/icon_pupr2.png"> Direktorat Kerjasama Dan Pemberdayaan</h1>
                </div>

                <div class="x_panel">
                  <div class="x_title">
                 
                    <ul class="nav navbar-right panel_toolbox">
                     
                    </ul>
                  </div>

                  <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                         <thead id="syam">
                               <tr>
                                  <th>No</th>
                                  <th>Nama Berkas</th>
                                  <th>Tanggal</th>
                                  <th>Verifikasi</th>
                                  <th>Asisten PPK</th>
                                  <th>PPK</th>
                                  <th>PPSPM</th>
                                  <th>Bendahara</th>
                                  <th>Keterangan</th>
                                </tr>
                                </thead>
                                <tbody>
                                 
                                <?php
                                $no = 1;
                                foreach ($test->result_array() as $d)
                                {
                                ?>
                                <?php 

                                
                                   if($d['idh1']==1){
                                    $aa = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $aa = 'kosong';
                                  }
                                   if($d['idh2']==2){
                                    $ab = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $ab = 'kosong';
                                  }
                                   if($d['idh3']==3){
                                    $ac = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $ac = '';
                                  }
                                   if($d['idh4']==4){
                                    $ad = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $ad = '';
                                  }
                                   if($d['idh5']==5){
                                    $ae = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $ae = '';
                                  }
                                   if($d['idh6']==6){
                                    $af = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $af = '';
                                  }

                                   ?>
                                 <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $d['untuk_pembayaran']; ?></td>
                                  <td><?php echo $d['tggl']; ?></td>
                                  <td><?php echo $aa ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date1'],$d['n_date1']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date1'],$d['n_date1'])); ?> Hari]</td>

                                  <td><?php echo $ab ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date2'],$d['n_date2']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date2'],$d['n_date2'])); ?> Hari]</td>

                                   <td><?php echo $ac ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date3'],$d['n_date3']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date3'],$d['n_date3'])); ?> Hari]</td>

                                  <td><?php echo $ad ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date4'],$d['n_date4']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date4'],$d['n_date4'])); ?> Hari]</td>

                                   <td><?php echo $ae ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date5'],$d['n_date5']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date5'],$d['n_date5'])); ?> Hari]</td>

                                   <td>
                                     
                                   </td>
                                  </tr>

                                 <?php
                                }
                                ?>
                                <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small">
                   <a href="<?php echo base_url('home'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
            </div>
            <!-- /menu footer buttons -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>



