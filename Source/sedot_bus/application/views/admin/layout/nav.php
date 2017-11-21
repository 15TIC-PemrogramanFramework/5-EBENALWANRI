
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">								
                     <li>
                        <a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-desktop"></i> Dasbor</a>
                    </li>						                   
                    <li>
                        <a href="#"><i class="fa fa-wrench"></i> Konfigurasi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('admin/konfigurasi/umum');?>">Umum</a>
                            </li>
                        </ul>
                      </li> 
                    <li>
                        <a href="#"><i class="fa fa-users"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('admin/users/admin');?>">Daftar Admin</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/users/member');?>">Daftar Member</a>
                            </li>
                        </ul>
                      </li> 
                    <li>
                        <a href="#"><i class="fa fa-square"></i> Terminal<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('admin/kota');?>">Daftar Kota</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/terminal');?>">Daftar Terminal</a>
                            </li>                            
                        </ul>
                      </li> 
                    <li>
                        <a href="#"><i class="fa fa-bus"></i> Bis<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('admin/bis');?>">Daftar Bis</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-ticket"></i> Tiket<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('admin/tiket');?>">Daftar Tiket</a>
                            </li>
                        </ul>
                      </li>
                    <li>
                        <a href="#"><i class="fa fa-dollar"></i> Pembayaran<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('admin/pembayaran');?>">Daftar Pembayaran</a>
                            </li>
                        </ul>
                      </li>  
                </ul>
               
            </div>
            
        </nav>
        <!-- /. NAV SIDE  -->        
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><?php echo $title ?></h2>
                    </div>
                <div class="panel-body">
            <div class="table-responsive">
