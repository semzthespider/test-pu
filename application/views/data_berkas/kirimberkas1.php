	
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

?>		
  <?php
                                        
                                  echo form_open('C_verifikasi/update');
                                  echo form_hidden('kd_pembebanan', $r->kd_pembebanan);
                                      ?>

                                       <b class="text"><u>Monitoring Berkas Pengajuan</u></b></br></br>
                                       <div class="form-group">



                                        <div class="controls">


                                <table class="table">
              <tr>
                <td>Nama Berkas</td>
                <td>:</td>
                <td><?php echo $r->untuk_pembayaran; ?></td>
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
                                    <?php $data_i = array('name'=> 'ps1','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>Surat Perintah Ke PPK</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps2','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>BAHPL</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps3','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Kwitansi</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps4','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Faktur Pajak</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps5','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>6</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps6','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
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
                                    <?php $data_i = array('name'=> 'ps7','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>Surat Perintah Ke PPK</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps8','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>BAHPL</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps9','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Kwitansi</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps10','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Faktur Pajak</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps11','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>6</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps12','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
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
                                    <?php $data_i = array('name'=> 'ps13','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>Nominatif Riil</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps14','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>Rincian SPPD</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps15','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Kwitansi</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps16','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Surat Tugas</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps17','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>6</td>
                                   <td></td>
                                   <td>Lembar Daerah</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps18','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>7</td>
                                   <td></td>
                                   <td>Laporan Perjalanan Dinas</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps19','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
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
                                    <?php $data_i = array('name'=> 'ps20','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>SK Penetapan Narasumber</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps21','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>SK Permohonan Narasumber</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps22','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Absen Narasumber</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps23','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps24','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
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
                                    <?php $data_i = array('name'=> 'ps25','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                   <td></td>
                                   <td>SK Penetapan Tim</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps26','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>3</td>
                                   <td></td>
                                   <td>SK Undangan</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps27','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>4</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps28','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                 <tr>
                                  <td>5</td>
                                   <td></td>
                                   <td>Surat Setoran Pajak</td>
                                  <td>
                                    <?php $data_i = array('name'=> 'ps29','value'=> '1','checked' => ($r->ps1 > 0) ? TRUE : '' ); echo form_checkbox($data_i);?></td>
                                </tr>
                                
                        
                         </tbody>
                        </table>

                <div class="col-md-6 col-xs-12">

                    <!-- start form for validation -->
                        <br />
                    
                         <?php

                                        echo form_label('Catatan Jika Ada Yang Kurang (Kosongkan Apabila Tidak Ada)', 'catatan');

                                        $data_i = array(


                                          'type'        => 'text',

                                          'class'       => 'form-control',

                                          'name'        => 'catatan',

                                          'value'    => ''

                                        );

                                        echo form_textarea($data_i);

                              ?>
                                    <?php

                                        echo form_label('', 'id_status');

                                        $data_i = array(


                                          'type'        => 'hidden',

                                          'readonly'    => 'readonly',

                                          'class'       => 'form-control',

                                          'name'        => 'id_status',

                                          'value'    => '2'

                                        );

                                        echo form_input($data_i);

                              ?>
                              <?php

                                        echo form_label('', 'n_date1');

                                        $data_i = array(


                                          'type'        => 'hidden',

                                          'readonly'    => 'readonly',

                                          'class'       => 'form-control',

                                          'name'        => 'n_date1',

                                          'value'    => date('20y-m-d'),

                                        );

                                        echo form_input($data_i);

                              ?>
                               <?php

                                        echo form_label('', 'r_date2');

                                        $data_i = array(


                                          'type'        => 'hidden',

                                          'readonly'    => 'readonly',

                                          'class'       => 'form-control',

                                          'name'        => 'r_date2',

                                          'value'    => date('20y-m-d'),

                                        );

                                        echo form_input($data_i);

                              ?>
                              
                               <?php

                                        echo form_label('', 'idh2');

                                        $data_i = array(


                                          'type'        => 'hidden',

                                          'readonly'    => 'readonly',

                                          'class'       => 'form-control',

                                          'name'        => 'idh2',

                                          'value'    => 2,

                                        );

                                        echo form_input($data_i);

                              ?> 
                    </form>
                    <!-- end form for validations -->


                  </div>
                </div>

                 <div class="col-md-6 col-xs-12">
              
                  <div class="x_content">

                    <!-- start form for validation -->
                        <br />
                        <p>
                        <?php

                                              echo form_label('Cek Kelengkapan', 'id_kelengkapan');

                                              $options = $this->base_model->kel();

                                              echo form_dropdown('id_kelengkapan', $options,'', 'class="form-control" ');

                                    ?>
                                      <br>
                                          <p>

                          <label>Kirim Atau Simpan Ke draft</label>
                      <p>
                        Send:
                        <input type="radio" class="flat" name="id_penerima" id="genderM" value="2" checked="" required />
                        Draft:
                        <input type="radio" class="flat" name="id_penerima" id="genderF" value="1" />
                      </p>

                         

                    <!-- end form for validations -->




              </div>     

                    </div>	

                               
                                                <div class="clearfix"></div>
                                                  <input name="Submit" type="submit" value="Save" class="btn btn-success" />
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