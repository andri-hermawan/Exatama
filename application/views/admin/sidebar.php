<section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $nama; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU NAVIGATION</li>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-home"></i> <span>Dashboard</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>kategori">
                <i class="fa fa-tag"></i> <span>Kategori</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>merk">
                <i class="fa fa-diamond"></i> <span>Merk</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>produk">
                <i class="fa fa-photo"></i> <span>Produk</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
           <!--  <li>
              <a href="<?php echo base_url(); ?>login/logout">
                <i class="fa fa-sign-out"></i> <span>Menu Lain</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li> -->
            
            <li class="header">SETIING</li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Setting</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('dashboard1') ?>"><i class="fa fa-circle-o"></i> Setting Password</a></li>
                    <li><a href="<?php echo site_url('dashboard2') ?>"><i class="fa fa-circle-o"></i> Setting Profile</a></li>
                    
                </ul>
            </li>
            <!-- <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li> -->
          </ul>
        </section>