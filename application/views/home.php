  


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
                    <h2>Dashboard</h2>
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

                    <!-- top tiles -->
    <!--?php
   // $met = new meta;
   // foreach($met->rekap() as $re){
    ?-->
 
 <div class="row tile_count">
   <img  src="<?php echo base_url(); ?>assets/images/jumbo.jpg" width="100%" /></br></br>
        <div class="animated flipInY col-md-2 col-sm-3 col-xs-6 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-folder"></i> Total Folder</span>
                 <!--div class="count"><?php //echo number_format($re['tfolder']); ?></div-->
            </div>
        </div>
        
        <div class="animated flipInY col-md-2 col-sm-3 col-xs-6 tile_stats_count">
            <div class="left"></div>
            <div class="right">
                <span class="count_top"><i class="fa fa-file"></i> Total Dokumen</span>
                <!--div class="count"><?php //echo number_format($re['tdocs']); ?></div-->
            </div>
        </div>

    </div>
    <!--php
  }
  ?-->
    <!-- /top tiles -->
    <hr />
    <!--?php
  }
  ?-->
    <form method="get">
      <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-left top_search">
                                <div class="input-group">
                                    <input type="text" name="src" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       