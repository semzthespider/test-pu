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
                    <h2>Input Data User <small>Users</small></h2>
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
	if($permit['w']){    
		echo form_open('c_user/insert');
        ?>
         <div class="form-group">

<?php

					echo form_label('Unit', 'unit_id');

					$options = $this->base_model->selunit();
					//var_dump($options);

					echo form_dropdown('unit_id', $options, '', 'class="form-control" required');

?>

				  </div>

				  <div class="form-group">

<?php

					echo form_label('Role', 'role_id');

					$options = $this->base_model->selrole();

					echo form_dropdown('role_id', $options,'', 'class="form-control" required');

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

					);

					echo form_input($data_i);

?>

</div>

					<div class="form-group">

						<label for="exampleInputFile">Alamat</label>

<?php

					$data_i = array(

					  'name'        => 'alamat',

					  'type'        => 'text',

					  'class'       => 'form-control',

					);

					echo form_textarea($data_i);

?>
				  </div>

				  <div class="form-group control-group">

					<div class="controls">



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

					  'required'    => 'required',

					  'value'       => '',

					);

					echo form_input($data_i);

?>
	</div>

<?php

?>					

					<div class="form-group">

						<label for="exampleInputFile">Pekerjaan</label>

<?php

					$data_i = array(

					  'name'        => 'pekerjaan',

					  'type'        => 'teks',

					  'class'       => 'form-control',

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

					);



					echo form_checkbox($data_i);

?>

					</div>

				  </div>

				  

				  <div class="col-xs-12 col-md-6">
					

					<div class="form-group">

						<label for="exampleInputFile">Email</label>

<?php

					$data_i = array(

					  'name'        => 'email',

					  'type'        => 'text',

					  'class'       => 'form-control',

					  'required'    => 'required',


					);

					echo form_input($data_i);

?>

					</div>

					<div class="form-group">

						<label for="exampleInputFile">Phone</label>

<?php

					$data_i = array(

					  'name'        => 'telp',

					  'type'        => 'text',

					  'class'       => 'form-control',

					);

					echo form_input($data_i);

?>

					
  </div>

				  <div class="form-group">

<?php

					echo form_label('Jelnis Kelamin', 'gender');

					$options = $this->base_model->jk();

					echo form_dropdown('gender', $options,'', 'class="form-control" ');

?>


					</div>

				  </div>
                  <div class="clearfix"></div>
                    <input name="Submit" type="submit" value="Save" class="btn btn-success" />
        <?php
		echo form_close();
		?>
          <hr>
    <?php 
	}
	?>
          <h2><u>Data Users</u></h2>
              <table id="datatable-buttons" class="table table-striped table-bordered">
              	<thead>
                <tr>
                  <th >ID</th>
                  <th >User Name </th>
                  <th >User Fullname </th>
                  <th>Role ID</th>
                  <th>Unit </th>
                  <th>Foto </th>
                  <th>Status </th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$list_ = $this->user_model->list_user();
				$no = 1;
				foreach($list_->result() as $row){
					if($row->active==1){
						$ac = 'Active';
					}else{
						$ac = 'Inactive';	
					}
					echo '
                <tr>
                  <td>'.$no++.'</td>
				  <td>'.$row->user_name.'</td>
                  <td>'.$row->user_fullname.'</td>
                  <td>'.$row->role_name.'</td>
                  <td>'.$row->unit_name.'</td>
                  <td>'.$row->profpict.'</td>
                  <td>'.$ac.'</td>
                  <td>';
				  if($permit['w']==1){
				  	echo '<a href="'.base_url('C_user/profile/'.$row->user_id).'" class="text text-primary"><i class="glyphicon glyphicon-edit"></i></a>';
				  }
				  echo ' ';
				  if($permit['d']==1){
				  echo '<a href="'.base_url('C_user/delete/'.$row->user_id).'" class="text text-danger" onclick="return confirm(\'are you sure?\');"><i class="glyphicon glyphicon-remove"></i></a>';
				  }
				  echo '</td>
                </tr>';
				}
				?>
                </tbody>
              </table>


     </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                          </div>
                        </div>
                      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->