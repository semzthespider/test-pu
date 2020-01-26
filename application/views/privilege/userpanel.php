


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
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
                    <h2>Default Example <small>Users</small></h2>
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
          
		echo form_open('user/updatesetting','enctype="multipart/form-data"');
        ?>

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

						<label for="exampleInputFile">Profile Picture</label>

<?php

					$data_i = array(

					  'name'        => 'profpict',

					  'type'        => 'file',

					  'class'       => 'form-control'

					);

					echo form_input($data_i);

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

					  'value'    => $r->email


					);

					echo form_input($data_i);

?>

					</div>

				  </div>
					<div class="clearfix"></div>
					<div class="form-group">
						
                    	<input name="Submit" type="submit" value="Save" class="btn btn-success" />

					</div>
        <?php
		echo form_close();
		?>
<?php
		}
?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->