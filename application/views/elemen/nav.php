                      
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 100;">
              <a href="<?php echo base_url(); ?>" class="site_title"><img src="<?php echo base_url();?>assets/images/syam.png" width="150" alt="logo" class="logo-default" /></></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('assets/images/'.$this->session->picture);?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->user_full; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               <!--h3>General</h3-->
                <ul class="nav side-menu">                 
                  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-th"></i> Dashboard </a></li>
                  
                  <?php echo $this->base_model->primaryMenu(); ?>

                   <?php
              if($this->session->role==1){
              ?>
                  <li><a><i class="fa fa-cogs"></i> Settings </a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('C_user');?>">User Management</a></li>
                    </ul>
                    
                  </li>
                   <?php
              }else if ($this->session->role==4){
              ?>
                  <li><a><i class="fa fa-cogs"></i> Settings </a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('C_user');?>">User Management</a></li>
                    </ul>
                    
                  </li>
                   <?php
              }

              ?>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url(); ?>C_login/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('assets/images/'.$this->session->picture);?>" alt=""><?php echo $this->session->user; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="<?php echo base_url('C_user/setting'); ?>">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="<?php echo base_url('C_login/logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
                          <!-- END: Subheader -->