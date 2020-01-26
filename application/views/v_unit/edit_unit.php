


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
                    <h2>Ubah Table Unit<small>Users</small></h2>
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
			<a href="<?php echo base_url('unit'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
          <table class="table">
            <form id="form1" name="postform" method="post" action="<?php echo base_url('C_unit/update'); ?>">
              <input type="hidden" name="idu" value="<?php echo $r->unit_id; ?>">
              <tr>
                <td>Unit Name</td>
                <td>:</td>
                <td><input type=text name='nm' required autofocus="autofocus" class="form-control" value="<?php echo $r->unit_name; ?>"></td>
              </tr> 
              <tr>
                <td>Direktorat</td>
                <td>:</td>
                <td><input type=text name='direktorat' class="form-control" value="<?php echo $r->unit_direktorat; ?>"></td>
              </tr>
              <tr>
                <td>Parent</td>
                <td>:</td>
                <td><select name="par" class="form-control" disabled><?php echo $this->base_model->unitparent($r->unit_parent); ?></select></td>
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
?>
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