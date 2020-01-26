


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
                    <h2>Input User Group <small>Users</small></h2>
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
switch($act){
	default:
?>
          <table class="table">
            <form id="form1" name="postform" method="post" action="<?php echo base_url('usergroup/insert'); ?>">
              <tr>
                <td>User Group Name </td>
                <td>:</td>
                <td><input type=text name='nm' required autofocus="autofocus" class="form-control"></td>
              </tr> 
              <tr>
                <td>Description </td>
                <td>:</td>
                <td><input type=text name='desc' class="form-control"></td>
              </tr>
              <tr>
                <td>Order </td>
                <td>:</td>
                <td><input type=text name='order' class="form-control"></td>
              </tr>
              <tr>
                <td>Publish? </td>
                <td>:</td>
                <td><?php echo $this->base_model->yorn();  ?></td>
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
          
          <h2><u>Data Roles</u></h2>
              <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <tr>
                  <th width="15%">Group Name </th>
                  <th>Order </th>
                  <th>Status </th>
                  <th width="10%" colspan="3">Action</th>
                </tr>
                <?php
				$list_ = $this->system_model->list_ugroup('','y');
				foreach($list_->result() as $row){
					echo '
                <tr>
                  <td>'.$row->group_name.'</td>
                  <td>'.$row->ordering.'</td>
                  <td>'.$row->enabled.'</td>
                  <td><a href="'.base_url('usergroup/privilege/'.$row->autono).'" class="text text-warning"><i class="glyphicon glyphicon-tag"></i></a></td>
                  <td><a href="'.base_url('usergroup/edit/'.$row->autono).'" class="text text-primary"><i class="glyphicon glyphicon-edit"></i></a></td>
                  <td><a href="'.base_url('usergroup/delete/'.$row->autono).'" class="text text-danger" onclick="return confirm(\'are you sure?\');"><i class="glyphicon glyphicon-remove"></i></a></td>
                </tr>';
				}
				?>
              </table>
<?php
	break;
	case "edit":
	$res = $this->system_model->list_ugroup($val);
	foreach($res->result() as $r){
?>			
			<a href="<?php echo base_url('usergroup'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
          <table class="table">
            <form id="form1" name="postform" method="post" action="<?php echo base_url('usergroup/update'); ?>">
              <input type="hidden" name="idm" value="<?php echo $r->autono; ?>">
              <tr>
                <td>User Group Name </td>
                <td>:</td>
                <td><input type=text name='nm' required autofocus="autofocus" class="form-control" value="<?php echo $r->group_name; ?>"></td>
              </tr> 
              <tr>
                <td>Description </td>
                <td>:</td>
                <td><input type=text name='desc' class="form-control" value="<?php echo $r->description; ?>"></td>
              </tr>
              <tr>
                <td>Order </td>
                <td>:</td>
                <td><input type=text name='order' class="form-control" value="<?php echo $r->ordering; ?>"></td>
              </tr>
              <tr>
                <td>Publish? </td>
                <td>:</td>
                <td><?php echo $this->base_model->yorn($r->enabled);  ?></td>
              </tr>
              <tr>
                <td colspan="3">
                    <input name="Submit" type="submit" value="Save" class="btn btn-success" />
                    </td>
              </tr>
           </form>
           </table> 
<?php
	}
	break;
	case "privilege":
	?>
		<small><strong>Akses User Group</strong></small><br />
			<a href="<?php echo base_url('usergroup'); ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-arrow-left"></i></a>
            <hr />
            <!-- membuat tabel untuk menampilkan data -->
            <form method="post" action="<?php echo base_url('usergroup/access/'.$val); ?>">
            	<input type="hidden" value="<?php echo $val; ?>" name="usrg" />
              <table class="table table-responsive table-striped">
                <tr> <!-- <tr> = table rows -->
                  <th rowspan="2">Menu Name </th> <!-- <th> = table header -->
                  <th colspan="4">Permission </th>
                </tr>
                <tr>
                  <th>Read</th>
                  <th>Write</th>
                  <th>Delete</th>
                  <th>Admin</th>
                </tr>
                <?php
				$mnu = $this->system_model->list_menus();
				$no=0;
				foreach($mnu->result() as $r){
					$cek = $this->system_model->list_usermenu($val,$r->menu_id);
					//var_dump($cek->result());
					if($cek->num_rows() >0){
						foreach($cek->result() as $aaa){
							$uid = $aaa->usermenu_id;
							$rr = $aaa->permission_r;
							$ww = $aaa->permission_w;
							$dd = $aaa->permission_d;
							$aa = $aaa->permission_a;
						}
					}else{ $uid='';$rr='';$ww='';$dd='';$aa=''; }
					echo "
					<tr>";
					echo '<input type="hidden" value="'.$r->menu_id.'" name="menu[]" /><input type="hidden" value="'.$uid.'" name="um['.$r->menu_id.']" />';
					if($rr==1){ $ckr = ' checked'; }else{ $ckr=''; }
					if($ww==1){ $ckw = ' checked'; }else{ $ckw=''; }
					if($dd==1){ $ckd = ' checked'; }else{ $ckd=''; }
					if($aa==1){ $cka = ' checked'; }else{ $cka=''; }
					//if($aaa[0]['permission_a']==1){ $cka = ' checked'; }else{ $cka=''; }
					echo "<td align='center'>".$r->menu_name."</td>
					<td><input type='checkbox' name='permit[".$r->menu_id."][r]' value='1'$ckr></td>
					<td><input type='checkbox' name='permit[".$r->menu_id."][w]' value='1'$ckw></td>
					<td><input type='checkbox' name='permit[".$r->menu_id."][d]' value='1'$ckd></td>
					<td><input type='checkbox' name='permit[".$r->menu_id."][a]' value='1'$cka></td></tr>";
					$no++;
				}
				?>
            	<tr>
                 <th colspan="6"><input name="Submit" type="submit" value="Save" class="btn btn-success" />
                </tr>
              </table>
           </form>
<?php
	break;
}
?>

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