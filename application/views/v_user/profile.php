  
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
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url()."assets/images/".$r->profpict ?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo $r->user_fullname ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $r->alamat ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $r->pekerjaan ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $r->email ?>
                        </li>
                         <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $r->notelp ?>
                        </li>
                      </ul>

                      <!-- start skills -->
                     
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Ubah Data User</a>
                          </li>
                          
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <a href="<?php echo base_url('C_user'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
                              <?php
                                        
                                  echo form_open('C_user/update');
                                  echo form_hidden('idu', $r->user_id);
                                      ?>
                                       <div class="form-group">

                              <?php

                                        echo form_label('Unit', 'unit_id');

                                        $options = $this->base_model->selunit();

                                        echo form_dropdown('unit_id', $options, $r->unit_id, 'class="form-control" required');

                              ?>

                                        </div>

                                        <div class="form-group">

                              <?php

                                        echo form_label('Role', 'role_id');

                                        $options = $this->base_model->selrole();

                                        echo form_dropdown('role_id', $options, $r->role_id, 'class="form-control" required');

                              ?>

                                        </div>

                                        <div class="form-group control-group">

                                        <div class="controls">

                              <?php

                                        echo form_label('Full Name', 'user_fullname');

                                        $data_i = array(

                                          'name'        => 'user_fullname',

                                          'type'        => 'text',

                                          'class'       => 'form-control',

                                          'required'    => 'required',

                                          'value'    => $r->user_fullname

                                        );

                                        echo form_input($data_i);

                              ?>
                                  </div><br>

                                        <div class="form-group control-group">

                                        <div class="controls">

                              <?php

                                        echo form_label('Alamat', 'alamat');

                                        $data_i = array(

                                          'name'        => 'alamat',

                                          'type'        => 'text',

                                          'class'       => 'form-control',

                                          'value'    => $r->alamat

                                        );

                                        echo form_textarea($data_i);

                              ?>

                                        </div>

                                        </div>

                                        <div class="col-xs-12 col-md-6">

                                        <div class="form-group">

                                          <label for="exampleInputFile">User Login</label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'user_name',

                                          'type'        => 'text',

                                          'class'       => 'form-control',

                                          'required'    => 'required',

                                          'value'    => $r->user_name

                                        );

                                        echo form_input($data_i);

                              ?>

                                        </div>

                              <?php

                              ?>          

                                        <div class="form-group">

                                          <label for="exampleInputFile">Password</label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'password',

                                          'type'        => 'password',

                                          'class'       => 'form-control',

                                          'placeholder'       => 'Empty this form if not change',

                                          'value'       => '',

                                        );

                                        echo form_input($data_i);


                              ?>


                                        </div>

                                        <div class="form-group">

                                          <label for="exampleInputFile">Jenis Kelamin</label>
                                <?php

                                              echo form_label('Jelnis Kelamin', 'gender');

                                              $options = $this->base_model->jk();

                                              echo form_dropdown('gender', $options, $r->gender, 'class="form-control" required');

                                    ?>

                                        </div>

                                        <div class="form-group">

                                          <label for="exampleInputFile">Status</label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'active',

                                          'value'       => '1',

                                          'style'       => 'margin:10px',
                                          
                                          'checked'     => ($r->active > 0) ? TRUE : '' 

                                        );



                                        echo form_checkbox($data_i);

                              ?>

                                        </div>

                                        </div>

                                        

                                        <div class="col-xs-12 col-md-6">

                                        

                                        <div class="form-group">

                                          <label for="exampleInputFile">Phone</label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'telp',

                                          'type'        => 'text',

                                          'class'       => 'form-control',

                                          'value'    => $r->notelp

                                        );

                                        echo form_input($data_i);

                              ?>

                                        </div>

                                        <div class="form-group">

                                          <label for="exampleInputFile">Email</label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'email',

                                          'type'        => 'text',

                                          'class'       => 'form-control',

                                          'required'    => 'required',

                                          'value'    => $r->email


                                        );

                                        echo form_input($data_i);

                              ?>
                              </div>

                                        <div class="form-group">

                                          <label for="exampleInputFile">Pekerjaan</label>

                              <?php

                                        $data_i = array(

                                          'name'        => 'pekerjaan',

                                          'type'        => 'pekerjaan',

                                          'class'       => 'form-control',

                                          'required'    => 'required',

                                          'value'    => $r->pekerjaan


                                        );

                                        echo form_input($data_i);

                              ?>

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