  
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


<?php
    
    foreach($res->result() as $r){

    if($r->ps1==1){$ps1 = 'Ada';}else{ $ps1 ='belum';}if($r->ps2==1){$ps2 = 'Ada';}else{ $ps2 ='belum';}if($r->ps3==1){$ps3 = 'Ada';}else{ $ps3 ='belum';}if($r->ps4==1){$ps4 = 'Ada';}else{ $ps4 ='belum';}if($r->ps5==1){$ps5 = 'Ada';}else{ $ps5 ='belum';}if($r->ps6==1){$ps6 = 'Ada';}else{ $ps6 ='belum';}if($r->ps7==1){$ps7 = 'Ada';}else{ $ps7 ='belum';}if($r->ps8==1){$ps8 = 'Ada';}else{ $ps8 ='belum';}if($r->ps9==1){$ps9 = 'Ada';}else{ $ps9 ='belum';}if($r->ps10==1){$ps10 = 'Ada';}else{ $ps10 ='belum';}if($r->ps11==1){$ps11 = 'Ada';}else{ $ps11 ='belum';}if($r->ps12==1){$ps12 = 'Ada';}else{ $ps12 ='belum';}if($r->ps13==1){$ps13 = 'Ada';}else{ $ps13 ='belum';}if($r->ps14==1){$ps14 = 'Ada';}else{ $ps14 ='belum';}if($r->ps15==1){$ps15 = 'Ada';}else{ $ps15 ='belum';}if($r->ps16==1){$ps16 = 'Ada';}else{ $ps16 ='belum';}if($r->ps17==1){$ps17 = 'Ada';}else{ $ps17 ='belum';}if($r->ps18==1){$ps18 = 'Ada';}else{ $ps18 ='belum';}if($r->ps19==1){$ps19 = 'Ada';}else{ $ps19 ='belum';}if($r->ps20==1){$ps20 = 'Ada';}else{ $ps20 ='belum';}if($r->ps21==1){$ps21 = 'Ada';}else{ $ps21 ='belum';}if($r->ps22==1){$ps22 = 'Ada';}else{ $ps22 ='belum';}if($r->ps23==1){$ps23 = 'Ada';}else{ $ps23 ='belum';}if($r->ps24==1){$ps24 = 'Ada';}else{ $ps24 ='belum';}if($r->ps25==1){$ps25 = 'Ada';}else{ $ps25 ='belum';}if($r->ps26==1){$ps26 = 'Ada';}else{ $ps26 ='belum';}if($r->ps27==1){$ps27 = 'Ada';}else{ $ps27 ='belum';}if($r->ps28==1){$ps28 = 'Ada';}else{ $ps28 ='belum';}if($r->ps29==1){$ps29 = 'Ada';}else{ $ps29 ='belum';}
?>    
  <?php
                                        
                                  echo form_open('surat_verifikasi/update');
                                  echo form_hidden('id_surat', $r->id_surat);
                                      ?>

                                       <b class="text"><u>Monitoring Berkas Pengajuan</u></b></br></br>
                                       <div class="form-group">



                                        <div class="controls">


                                <table class="table">
              <tr>
                <td>Nama Berkas</td>
                <td>:</td>
                <td><?php echo $r->nama_surat; ?></td>
              </tr> 
              <tr>
                <td>Tanggal Berkas</td>
                <td>:</td>
                <td><?php echo $r->tggl; ?></td>
              </tr> 
             
<table class="table table-striped jambo_table bulk_action"><br>
                                
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Keterangan Anggaran </th>
                                  <th>Persyaratan</th>
                                  <th>Ceklist</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>1</td>
                                   <td>Pengadaan Diatas 10 - 50 Juta</td>
                                   <td>Surat Permohonan Ke KPK</td>
                                  <td>
                                   <?php echo $ps1 ?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>Surat Perintah Ke PPK</td>
                                  <td>
                                  <?php echo $ps2 ?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>BAHPL</td>
                                  <td>
                                 <?php echo $ps3 ?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Kwitansi</td>
                                  <td>
                                   <?php echo $ps4 ?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Faktur Pajak</td>
                                  <td>
                                    <?php echo $ps5 ?></td>
                                </tr>
                                 <tr>
                                  <td>6</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                  <?php echo $ps6 ?></td>
                                </tr>
                        
                         </tbody>
                        </table>
<table class="table table-striped jambo_table bulk_action"><br>
                                
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Keterangan Anggaran </th>
                                  <th>Persyaratan</th>
                                  <th>Ceklist</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>1</td>
                                   <td>Pengadaan dibawah 10 Juta</td>
                                   <td>Surat Permohonan Ke KPK</td>
                                  <td>
                                   <?php echo $ps7 ?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>Surat Perintah Ke PPK</td>
                                  <td>
                                   <?php echo $ps8 ?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>BAHPL</td>
                                  <td>
                                   <?php echo $ps9 ?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Kwitansi</td>
                                  <td>
                                    <?php echo $ps10 ?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Faktur Pajak</td>
                                  <td>
                                    <?php echo $ps11 ?></td>
                                </tr>
                                 <tr>
                                  <td>6</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                   <?php echo $ps12 ?></td>
                                </tr>
                        
                         </tbody>
                        </table>
<table class="table table-striped jambo_table bulk_action"><br>
                                
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Keterangan Anggaran </th>
                                  <th>Persyaratan</th>
                                  <th>Ceklist</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>1</td>
                                   <td>SPPD</td>
                                   <td>Surat Undangan Kegiatan</td>
                                  <td>
                                    <?php echo $ps13 ?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>Nominatif Riil</td>
                                  <td>
                                   <?php echo $ps14 ?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>Rincian SPPD</td>
                                  <td>
                                   <?php echo $ps15 ?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Kwitansi</td>
                                  <td>
                                    <?php echo $ps16 ?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Surat Tugas</td>
                                  <td>
                                   <?php echo $ps17 ?></td>
                                </tr>
                                 <tr>
                                  <td>6</td>
                                   <td></td>
                                   <td>Lembar Daerah</td>
                                  <td>
                                    <?php echo $ps18 ?></td>
                                </tr>
                                 <tr>
                                  <td>7</td>
                                   <td></td>
                                   <td>Laporan Perjalanan Dinas</td>
                                  <td>
                                   <?php echo $ps19 ?></td>
                                </tr>
                        
                         </tbody>
                        </table> 
<table class="table table-striped jambo_table bulk_action"><br>
                                
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Keterangan Anggaran </th>
                                  <th>Persyaratan</th>
                                  <th>Ceklist</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>1</td>
                                   <td>Honor (Nara Sumber)</td>
                                   <td>Daftar Honor Narasumber</td>
                                  <td>
                                  <?php echo $ps20 ?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>SK Penetapan Narasumber</td>
                                  <td>
                                  <?php echo $ps21 ?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>SK Permohonan Narasumber</td>
                                  <td>
                                   <?php echo $ps22 ?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Absen Narasumber</td>
                                  <td>
                                    <?php echo $ps23 ?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                  <?php echo $ps24 ?></td>
                                </tr>
                                
                        
                         </tbody>
                        </table>   
<table class="table table-striped jambo_table bulk_action"><br>
                                
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Keterangan Anggaran </th>
                                  <th>Persyaratan</th>
                                  <th>Ceklist</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>1</td>
                                   <td>Honor (Kegiatan)</td>
                                   <td>Daftar Panitia</td>
                                  <td>
                                    <?php echo $ps25 ?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>SK Penetapan Tim</td>
                                  <td>
                                   <?php echo $ps26 ?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>SK Undangan</td>
                                  <td>
                                    <?php echo $ps27 ?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                   <?php echo $ps28 ?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                  <?php echo $ps29 ?></td>
                                </tr>
                                
                        
                         </tbody>
                        </table>
                         

                    <!-- end form for validations -->




              </div>     

                    </div>  

                               
                                      <?php
                                  echo form_close();
                                  ?>
                              </li>

                            </ul>
                            <!-- end recent activity -->

                          </div>
                         
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

  
<?php
    }
?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->