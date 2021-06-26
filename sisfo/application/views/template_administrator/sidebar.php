
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-university"></i>
                </div>
                <div class="sidebar-brand-text mx-1">SISTEM AKADEMIK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if($this->uri->uri_string() =='administrator/dashboard') { echo 'active'; } ?>">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

           

            <!-- Nav Item - Pages KRS Menu -->
            <li class="nav-item <?php if($this->uri->uri_string() =='administrator/krs') { echo 'active'; } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-edit"></i>
                    <span>KRS</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub-Menu:</h6>
                        <a class="collapse-item <?php if($this->uri->uri_string() =='administrator/krs') { echo 'active'; } ?>" href="<?php echo base_url('administrator/krs') ?>">Lihat KRS</a>
                        <a class="collapse-item <?php if($this->uri->uri_string() =='administrator/tambah_krs') { echo 'active'; } ?>" href="<?php echo base_url('administrator/tambah_krs') ?>">Tambah KRS</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - KHS  Menu -->
            <li class="nav-item <?php if($this->uri->uri_string() =='administrator/khs') { echo 'active'; } ?>">
                <a class="nav-link" href="<?php echo base_url('administrator/khs') ?>">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>KHS</span></a>
            </li>


            <!-- Nav Item - Pages transkip Menu -->
            <li class="nav-item <?php if($this->uri->uri_string() =='administrator/transkrip') { echo 'active'; } ?>">
                <a class="nav-link" href="<?php echo base_url('administrator/transkrip') ?>">
                    <i class="fas fa-print"></i>
                    <span>Transkip</span></a>
            </li>
        

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Adelia</span>
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <!-- Logout Modal-->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">pilih <strong>"Keluar"</strong> jika anda ingin meninggalkan halaman ini</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <a class="btn btn-primary" href="<?php echo base_url('administrator/auth/logout')  ?>">Keluar</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </ul>

                </nav>