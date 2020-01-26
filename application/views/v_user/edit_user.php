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
                    <h2>Ubah Data User <small>Users</small></h2>
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
			<a href="<?php echo base_url('user'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
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

				  </div>
                  <div class="clearfix"></div>
                    <input name="Submit" type="submit" value="Save" class="btn btn-success" />
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