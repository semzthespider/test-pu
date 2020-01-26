
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
                    <h2>Tabel Input Unit<small>Users</small></h2>
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
?>
    	<table class="table">
            <form id="form1" name="postform" method="post" action="<?php echo base_url('C_unit/insert'); ?>">
              <tr>
                <td>Nama Unit</td>
                <td>:</td>
                <td><input type=text name='nm' required autofocus="autofocus" class="form-control"></td>
              </tr> 
              <tr>
                <td>Direktorat</td>
                <td>:</td>
                <td><input type=text name='direktorat' class="form-control"></td>
              </tr>
              <tr>
                <td colspan="3">
                    <input name="Submit" type="submit" value="Save" class="btn btn-success" />
                    <input type="reset" name="reset" value="Cancel" class="btn btn-danger" />
                    </td>
              </tr>
            </form>
          </table>
          <hr>
    <?php 
	}
	?>
  <h2><center>Data Unit Instansi</center></h2>
    <div class="x_title">          
    </div>
              <table class="table table-responsive table-striped" id="dtable">
				<thead>
                <tr>
                  <th>Nama Unit </th>
                  <th>Direktorat </th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$list_ = $this->M_unit->list_unit();
				foreach($list_->result() as $row){
					echo '
                <tr>
                  <td>'.$row->unit_name.'</td>
                  <td>'.$row->unit_direktorat.'</td>
                  <td>';
				  if($permit['w']==1){
				  	echo '<a href="'.base_url('C_unit/edit/'.$row->unit_id).'" class="text text-primary"><i class="glyphicon glyphicon-edit"></i></a> ';
				  }
				  if($permit['d']==1){
				  echo ' <a href="'.base_url('C_unit/delete/'.$row->unit_id).'" class="text text-danger" onclick="return confirm(\'are you sure?\');"><i class="glyphicon glyphicon-remove"></i></a>';
				  }
				  echo '</td>
                </tr>';
				}
				?>
                </tbody>
              </table>

    </section>
    <!-- /.content -->
  </div>
    </div>  
           </div>  
         </div>  
       </div>  
     </div>  
   </div>  
 </div>  
</div>
  <!-- /.content-wrapper -->