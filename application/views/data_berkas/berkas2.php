        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                       <center><b class="text"> <img src="<?php echo base_url ();?>assets/images/icon_pupr2.png"> Direktorat Kerja Sama Dan Pemberdayaan</b></center>
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
                  
                      <b class="text"><u>Berkas Pengajuan Baru</u></b></br></br>
                             <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Keterangan </th>
                                  <th>Tanggal</th>
                                  <th>Tipe Anggaran</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                        $list_ = $this->M_asisten_ppk->list_unit();
                        $no = 1;
                        foreach($list_->result() as $row){
                          if($row->id_status==2){
                              $ac = 'Baru';
                            }
                            else{
                              $ac = 'Draft'; 
                            }
                                 if($row->jenisanggaran==55)
                            {
                              $ta = 'UP';
                            }
                            else if($row->jenisanggaran=56)
                            {
                              $ta ='LS';
                            }
                            else 
                              {
                                $ta ='Jenis Belum Dimasukan';
                              }
                          $links = '<a href="'.base_url('C_asisten_ppk/view/'.$row->kd_pembebanan).'"class="btn btn-info ">'.$row->untuk_pembayaran.'<i ></i></a>';
                          echo '
                                <tr>
                                  <td>'.$no++.'</td>
                                  <td>'.$links.'</td>
                                  <td>'.$row->tggl.'</td>
                                  <td>'.$ta.'</td>
                                  <td>'.$ac.'</td>
                                  <td>';
                          
                            echo '<a href="'.base_url('C_asisten_ppk/print_surat/'.$row->kd_pembebanan).'"  class="btn btn-primary ">Print<i ></i></a> ';
                          if($permit['d']==1){
                          echo ' <a  href="'.base_url('C_asisten_ppk/delete/'.$row->kd_pembebanan).'" class="btn btn-danger alert_notif">Hapus<i ></i></a> ';
                          }
                          echo '</td>
                                </tr>';
                        }
                         ?>


                        </div>
                      </div>
                      <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                  </div>
                </div>

            </section>

                              <table id="datatable-buttons" class="table table-striped table-bordered"><br>
                       <b class="text"><u>Draft Pengajuan Berkas</u></b></br></br>
                        <thead>
                               <tr>
                                  <th>No</th>
                                  <th>Keterangan </th>
                                  <th>Tanggal</th>
                                  <th>Tipe Anggaran</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                        $list_ = $this->M_asisten_ppk->list_unit1();
                        $no = 1;
                        foreach($list_->result() as $row){
                          if($row->id_status==3){
                              $ac = 'Terkirim';
                            }
                           else if($row->id_status==100){
                              $ac = 'Selesai';
                            }
                            else{
                              $ac = 'terkirim'; 
                            }


                             if($row->id_kelengkapan==1){
                              $ad = 'Belum Di Cek';
                            }else{
                              $ad = 'Tidak Lengkap'; 
                            }

                                 if($row->jenisanggaran==55)
                            {
                              $ta = 'UP';
                            }
                            else if($row->jenisanggaran=56)
                            {
                              $ta ='LS';
                            }
                            else 
                              {
                                $ta ='Jenis Belum Dimasukan';
                              }

                      $links = '<a href="'.base_url('data_berkas/views/'.$row->kd_pembebanan).'"class="btn btn-info ">'.$row->untuk_pembayaran.'<i ></i></a>';
                          echo '    
                                <tr>
                                  <td>'.$no++.'</td>
                                  <td>'.$row->untuk_pembayaran.'</td>
                                  <td>'.$row->tggl.'</td>
                                  <td>'.$ta.'</td>
                                  <td>'.$ac.'</td>
                                  <td>';
                          
                            echo '<a href="'.base_url('data_berkas/print_surat/'.$row->kd_pembebanan).'"  class="btn btn-primary ">Print<i ></i></a> ';
                          if($permit['d']==1)
                          echo '</td>
                                </tr>';
                        }
                         ?>
                         </tbody>
                        </table>
<!-- /.content -->
          </div>

           <script>
        jQuery(document).ready(function($){
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                title: "Hapus Data?",
                text: "Data Akan Terhapus Data Data Surat!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
                        },

                        function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
   
    </script>
    <script>
        jQuery(document).ready(function($){
            $('.alert_notif1').on('click',function(){
                var getLink = $(this).attr('href');
                swal("Data Berhasil disimpan");
                return true;
            });
        });
   
    </script>


