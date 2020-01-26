


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
                    <h2>Berkas <small></small></h2>
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
            echo form_open_multipart('data_berkas/update', 'role="form" class="form-horizontal"');
            echo form_hidden('kd_pembebanan', $surat['kd_pembebanan']);
            ?>
          <table class="table">
              <tr>
                <td>Kode Pembebanan</td>
                <td>:</td>
                <td><h2><?php echo $surat['kd_pembebanan']; ?></h2></td>
              </tr> 
              <tr></tr>
             <tr>
                <td>Untuk Pembayaran</td>
                <td>:</td>
                <td><h2><?php echo $surat['nama_surat']; ?></h2></td>
              </tr> 

              <tr>
                <td>Persyaratan 1</td>
                <td>:</td>
                <td><input   type=checkbox name='persyaratan1'  autofocus="autofocus" class="form-control" value="1"></td>
              </tr> 
                <tr>
                <td>Persyaratan 2</td>
                <td>:</td>
                <td><input type=checkbox name='persyaratan2'  autofocus="autofocus" class="form-control" value="1"></td>
              </tr> 
                <tr>
                <td>Persyaratan 3</td>
                <td>:</td>
                <td><input type=checkbox name='persyaratan3'  autofocus="autofocus" class="form-control" value="1"></td>
              </tr> 
                <tr>
                <td>Persyaratan 4</td>
                <td>:</td>
                <td><input type=checkbox name='persyaratan4'  autofocus="autofocus" class="form-control" value="1"></td>
              </tr> 
                <tr>
                <td>Persyaratan 5</td>
                <td>:</td>
                <td><input type=checkbox name='persyaratan5'  autofocus="autofocus" class="form-control" value="1"></td>
              </tr> 
                <tr>
                <td>Persyaratan 6</td>
                <td>:</td>
                <td><input type=checkbox name='persyaratan6'  autofocus="autofocus" class="form-control" value="1"></td>
              </tr> 
            </div>

              
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button>
         
    
                    <?php echo anchor('data_promo', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </td>
              </tr>
           </form>
           </table> 
            
                           </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                   </div> 
                 </div>
                </div>
              </div>


