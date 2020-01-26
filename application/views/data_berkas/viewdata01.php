
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

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Perlengkapan Data Surat</a>
                          </li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <a href="<?php echo base_url('surat_verifikasi'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
                              <?php

                              		echo form_open('data_surat/update');
                              		echo form_hidden('id_surat', $r->id_surat);
                                      ?>
                                       <div class="form-group">



                              					<div class="controls">



                              <?php

                              					echo form_label('Nama Surat', 'nama_surat');

                              					$data_i = array(


                              					  'type'        => 'text',

                              					  'class'       => 'form-control',

                                          'readonly'    => 'readonly',


                              					  'value'    => $r->nama_surat

                              					);

                              					echo form_input($data_i);

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

                                        echo form_label('', 'idh1');

                                        $data_i = array(


                                          'type'        => 'hidden',

                                          'readonly'    => 'readonly',

                                          'class'       => 'form-control',

                                          'name'        => 'idh1',

                                          'value'    => '1'

                                        );

                                        echo form_input($data_i);

                              ?>
                              <?php

                                        echo form_label('', 'id_penerima');

                                        $data_i = array(


                                          'type'        => 'hidden',

                                          'readonly'    => 'readonly',

                                          'class'       => 'form-control',

                                          'name'        => 'id_penerima',

                                          'value'    => '2'

                                        );

                                        echo form_input($data_i);

                              ?>
                                  </div><br>

                                        <div class="form-group control-group">


                              <?php

                                        echo form_label('Tanggal', 'tggl');

                                        $data_i = array(


                                          'type'        => 'date',

                                          'readonly'    => 'readonly',

                                          'class'       => 'form-control',

                                          'value'    => $r->tggl

                                        );

                                        echo form_input($data_i);

                              ?>
                                <br>
                              <?php

                              ?>


                              					</div>

                              					<div class="form-group">

                              						<label for="exampleInputFile">Persyaratan 1</label>

                              <?php

                              					$data_i = array(

                              						'name'        => 'persyaratan1',

                              						'value'       => '1',


                                          'class'       => 'form-control',

                              						'checked'     => ($r->persyaratan1 > 0) ? TRUE : ''

                              					);



                              					echo form_checkbox($data_i);

                              ?>
                                  </div>

                                        <div class="form-group">

                                          <label for="exampleInputFile">Persyaratan2 </label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'persyaratan2',

                                          'value'       => '1',


                                          'class'       => 'form-control',

                                          'checked'     => ($r->persyaratan2 > 0) ? TRUE : ''

                                        );



                                        echo form_checkbox($data_i);

                              ?>
                                  </div>

                                        <td class="form-group">

                                          <label for="exampleInputFile">Persyaratan 3</label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'persyaratan3',

                                          'value'       => '1',

                                          'class'       => 'form-control',

                                          'checked'     => ($r->persyaratan3 > 0) ? TRUE : ''

                                        );



                                        echo form_checkbox($data_i);

                              ?>
                                  </div>

                                        <div class="form-group">

                                          <label for="exampleInputFile">Persyaratan 4</label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'persyaratan4',

                                          'value'       => '1',


                                          'class'       => 'form-control',

                                          'checked'     => ($r->persyaratan4 > 0) ? TRUE : ''

                                        );



                                        echo form_checkbox($data_i);

                              ?>
                                </div>

                                        <div class="form-group">

                                          <label for="exampleInputFile">Persyaratan 5</label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'persyaratan5',

                                          'value'       => '1',


                                          'class'       => 'form-control',

                                          'checked'     => ($r->persyaratan5 > 0) ? TRUE : ''

                                        );



                                        echo form_checkbox($data_i);

                              ?>




                              					</div>
                                        <br>
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
