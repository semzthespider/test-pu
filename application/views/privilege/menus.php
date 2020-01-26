


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
                    <h2>Input Menus </h2>
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
            <form id="form1" name="postform" method="post" action="<?php echo base_url('menus/insert'); ?>">
              <tr>
                <td>Menu Name </td>
                <td>:</td>
                <td>
                    <input type=text name='nm' required autofocus="autofocus" class="form-control"></td></tr>
              <tr>
                <td>Menu icon </td>
                <td>:</td>
                <td><input type=text name='ico' class="form-control"></td>
              </tr>
              <tr>
                <td>Parent </td>
                <td>:</td>
                <td><select name="parents" class="form-control"><!--?php echo $this->base_model->menuparent(); ?-->
                   <option value="0">No Parent</option>
                   <option value="1">Instansi</option>
                   <option value="2">Utility</option>
                   <option value="4">Berkas Anggaran</option>
                   <option value="7">Anggaran Baru</option>


                </select></td>
              </tr>
              <tr>
                <td>Menu Slug </td>
                <td>:</td>
                <td><input type=text name='desc' class="form-control"></td>
              </tr>
              <tr>
                <td>Order </td>
                <td>:</td>
                <td><input type=text name='order' class="form-control"></td>
              </tr>
              <tr>
                <td>Link To </td>
                <td>:</td>
                <td><input type=text name='lnk' class="form-control"></td>
              </tr>
              <tr>
                <td>Publish? </td>
                <td>:</td>
                <td><?php echo $this->base_model->yorn();  ?></td>
              </tr>
              <tr>
                <td colspan="3">
                    <input name="Submit" type="submit" value="Simpan" class="btn btn-success" />
                    <input type="reset" name="reset" value="Batal" class="btn btn-danger" />
                    </td>
              </tr>
            </form>
          </table>
          <hr>

          <h2><u>Data Menu</u></h2>
              <table class="table table-responsive table-striped" id="dtable">
              	<thead>
                <tr>
                  <th>Menu Name </th>
                  <th>Menu icon </th>
                  <th>Parent </th>
                  <th>Order </th>
                  <th>Status </th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$list_ = $this->system_model->list_menus();
				foreach($list_->result() as $row){
					echo '
                <tr>
                  <td>'.$row->menu_name.'</td>
                  <td><i class="'.$row->menu_icon.'"></i></td>
                  <td>'.$row->parents.'</td>
                  <td>'.$row->menu_order.'</td>
                  <td>'.$row->enabled.'</td>
                  <td><a href="'.base_url('menus/edit/'.$row->menu_id).'" class="text text-primary"><i class="glyphicon glyphicon-edit"></i></a> <a href="'.base_url('menus/delete/'.$row->menu_id).'" class="text text-danger" onclick="return confirm(\'are you sure?\');"><i class="glyphicon glyphicon-remove"></i></a></td>
                </tr>';
				}
				?>
                </tbody>
              </table>
<?php
	break;
	case "edit":
	$res = $this->system_model->list_menus($val);
	foreach($res->result() as $r){
?>
			<a href="<?php echo base_url('menus'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
          <table class="table">
            <form id="form1" name="postform" method="post" action="<?php echo base_url('menus/update'); ?>">
              <tr><input type="hidden" name="idm" value="<?php echo $r->menu_id; ?>">
                <td>Menu Name </td>
                <td>:</td>
                <td>
                    <input type=text name='nm' required autofocus="autofocus" class="form-control" value="<?php echo $r->menu_name; ?>"></td></tr>
              <tr>
                <td>Menu icon </td>
                <td>:</td>
                <td><input type=text name='ico' class="form-control" value="<?php echo $r->menu_icon; ?>"></td>
              </tr>
              <tr>
                <td>Parent </td>
                <td>:</td>
                <td><select name="par" class="form-control" disabled><?php echo $this->base_model->menuparent($r->menu_parent_id); ?></select></td>
              </tr>
              <tr>
                <td>Menu Slug </td>
                <td>:</td>
                <td><input type=text name='desc' class="form-control" value="<?php echo $r->menu_info; ?>"></td>
              </tr>
              <tr>
                <td>Order </td>
                <td>:</td>
                <td><input type=text name='order' class="form-control" value="<?php echo $r->menu_order; ?>"></td>
              </tr>
              <tr>
                <td>Link To </td>
                <td>:</td>
                <td><input type=text name='lnk' class="form-control" value="<?php echo $r->menu_link; ?>"></td>
              </tr>
              <tr>
                <td>Publish? </td>
                <td>:</td>
                <td><?php echo $this->base_model->yorn($r->enabled);  ?></td>
              </tr>
              <tr>
                <td colspan="3">
                    <input name="Submit" type="submit" value="Simpan" class="btn btn-success" />
                    <input type="reset" name="reset" value="Batal" class="btn btn-danger" />
                    </td>
              </tr>
            </form>
          </table>
<?php
	}
	break;
}
?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
