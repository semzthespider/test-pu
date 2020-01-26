           
        
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
                            echo form_open_multipart('C_subid_1/insert', 'role="form" class="form-horizontal"');
                            ?>
                            <?php 
    foreach($res->result() as $r){


 ?>
       
                    <table class="table">
                            <input type=hidden name='id_kelengkapan' value="1" class="form-control">
                            
                  <div class="">
                    <ul class="to_do">

                          <h1><b>Nama Anggaran  : <?php echo $r->nama_surat  ?></b></h1>
                          <h1><b>Bagian         : Tata Usaha </b></h1></center><br><br>

                        <h3><b>"Pengadaan 10 - 50 Juta"</b></h3>
                       <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps1==1) echo 'checked="checked"'; ?>  class="flat"> Surat Permohonan Ke KPK</p>
                      </li>
                       <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps2==1) echo 'checked="checked"'; ?>  class="flat"> Surat Perintah Ke KPK  </p>
                      </li>
                       <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps3==1) echo 'checked="checked"'; ?>  class="flat"> BAHPL </p>
                      </li>
                       <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps4==1) echo 'checked="checked"'; ?>  class="flat"> Kwitansi</p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps5==1) echo 'checked="checked"'; ?>  class="flat"> Paktur Pajak</p>
                      </li>
                      <h3><b>"Pengadaan Dibawah 10"</b></h3>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps6==1) echo 'checked="checked"'; ?>  class="flat"> Surat Permohonan Ke KPK</p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps7==1) echo 'checked="checked"'; ?>  class="flat"> Surat Perintah Ke KPK  </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps8==1) echo 'checked="checked"'; ?>  class="flat"> BAHPL</p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps9==1) echo 'checked="checked"'; ?>  class="flat"> Kwitansi </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps10==1) echo 'checked="checked"'; ?>  class="flat"> Paktur Pajak </p>
                      </li>
                      <h3><b>"SPPD"</b></h3>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps11==1) echo 'checked="checked"'; ?>  class="flat"> Surat Undangan Kegiatan </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps12==1) echo 'checked="checked"'; ?>  class="flat"> Nominatif (Rill) </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps13==1) echo 'checked="checked"'; ?>  class="flat"> Rimitan SPPD </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps14==1) echo 'checked="checked"'; ?>  class="flat"> Kwitansi </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps15==1) echo 'checked="checked"'; ?>  class="flat"> Surat Tugas </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps16==1) echo 'checked="checked"'; ?>  class="flat"> Lembur Daerah </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps17==1) echo 'checked="checked"'; ?>  class="flat"> Laporan Perjalanan Dinas </p>
                      </li>
                      <h3><b>"Honor (Narasumber)"</b></h3>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps18==1) echo 'checked="checked"'; ?>  class="flat"> Daftar Honor Darasumber </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps19==1) echo 'checked="checked"'; ?>  class="flat"> SK Penetapan Narasumber </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps20==1) echo 'checked="checked"'; ?>  class="flat"> SK Permohonan Narasumber </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps21==1) echo 'checked="checked"'; ?>  class="flat"> Absen Narasumber </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps22==1) echo 'checked="checked"'; ?>  class="flat"> Surat Setoran Pajak </p>
                      </li>
                      <h3><b>"Honor (Narasumber)"</b></h3>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps23==1) echo 'checked="checked"'; ?>  class="flat"> Daftar Panitia </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps24==1) echo 'checked="checked"'; ?>  class="flat"> SK Penetapan TIM  </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps25==1) echo 'checked="checked"'; ?>  class="flat"> SK Undangan </p>
                      </li>
                      <li>
                        <p>
                          <input name="" type="checkbox"  <?php if($r->ps26==1) echo 'checked="checked"'; ?>  class="flat"> Surat Setoran Pajak </p>
                      </li>
                     
                    </ul>
                  </div>
                  
                <?php } ?>

                                  <br>
                                    <td colspan="3">
                                    <button onclick="warning()"  type="submit" name="submit" class="btn btn-danger btn-sm  alert_notif1">SIMPAN</button>
                                     <?php echo anchor('data_surat', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                                    </td>
                            </form>
                          </table>
                          <hr>
            
                         
                         
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

  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->