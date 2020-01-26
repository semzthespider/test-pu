

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
            <b class="text"> <img src="<?php echo base_url ();?>assets/images/icon_pupr2.png"> Direktorat Kerja Sama Dan Pemberdayaan</b>
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
                    $list= $this->user_model->list_unit2();
                    		foreach($list->result() as $r){
                    ?>
                       <?php
                            echo form_open_multipart('C_subdit/insert', 'role="form" class="form-horizontal"');
                            ?>
                    <table class="table">
                      <form>
                        <input type=hidden name='id_kelengkapan' value="1" class="form-control">
                          <ul class="nav navbar-right panel_toolbox">
                                <input type=hidden value="1" name='id_penerima' class="form-control">
                              <tr>
                                <td>Tanggal</td>
                                  <td>:</td>
                                <td><input type=date name='tggl' class="form-control">
                                <input type=hidden value="1" name='id_penerima' class="form-control"></td>
                              </tr>
                          <input type=hidden name='idh1' value="1" class="form-control">
                              <tr>
                                <td>Jenis Anggaran</td>
                                <td>:</td>
                                <td><select name="jenisanggaran" id="heard" class="form-control" >
                                    <option value="">Jenis....</option>
                                    <option value="55">UP</option>
                                    <option value="56">LS</option>

                                  </select></td>
                              </tr>
                          </ul>

                              <input type=hidden value="1" name='subdit' class="form-control">
                              <tr>
                                <td>Kode Pembebanan</td>
                                <td>:</td>
                                <td><input type=text name='kd_pembebanan' class="form-control" value="<?php echo $r->kd_pembebanan; ?>"></td>
                              </tr>

                               <tr>
                                <td>Kepada / Alamat</td>
                                <td>:</td>
                                <td><input type=text name='kepada_alamat' class="form-control" value="<?php echo $r->kepada_alamat; ?>"></td>
                              </tr>

                               <tr>
                                <td>NPWP</td>
                                <td>:</td>
                                <td><input type=text name='npwp' class="form-control" value="<?php echo $r->npwp; ?>"></td>
                                </td>
                              </tr>
                               <tr>
                                <td>Untuk Pembayaran</td>
                                <td>:</td>
                                <td><input type=text name='untuk_pembayaran' class="form-control" value="<?php echo $r->untuk_pembayaran; ?>"></td>
                              </tr>
                                <input type=hidden value="20<?php echo date('y-m-d'); ?>" name='rdate1' class="form-control">

                               <tr>
                                <td>Jumlah Tagihan</td>
                                <td>:</td>
                                <td><input type=text name='jumlah_tagihan' class="form-control" value="<?php echo $r->jumlah_tagihan; ?>"></td>
                              </tr>
                               <tr>
                                <td>Potongan PPN</td>
                                <td>:</td>
                                <td><input type=text name='ppn' class="form-control" value="<?php echo $r->ppn; ?>"></td>
                              </tr>
                               <tr>
                                <td>Potongan PPH Ps 21/22/23</td>
                                <td>:</td>
                                <td><input type=text name='pph' class="form-control" value="<?php echo $r->pph; ?>"></td>
                              </tr>
                               <tr>
                                <td>Jumlah Potongan</td>
                                <td>:</td>
                                <td><input type=text name='jumlah_potongan' class="form-control" value="<?php echo $r->jumlah_tagihan; ?>"></td>
                              </tr>
                               <tr>
                                <td>Net</td>
                                <td>:</td>
                                <td><input type=text name='net' class="form-control" value="<?php echo $r->net; ?>"></td>
                              </tr>
                               <tr>
                                 <input type=hidden value="1" name='id_penerima' class="form-control">
                              </tr>

                                  <br>
                                    <td colspan="3">
                                    <button onclick="warning()"  type="submit" name="submit" class="btn btn-danger btn-sm  alert_notif1">SIMPAN</button>
                                     <?php echo anchor('data_berkas', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                                    </td>
                            </form>
                          </table>
                          <hr>
                    <?php
                  }
                  ?>

<!-- /.content -->
          </div>

           <script>
        jQuery(document).ready(function($){
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                title: "Hapus Data?",
                text: "Data berkas akan terhapus!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
                        },

                        function(){
                        window.location.href = getLink
                    });S
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
