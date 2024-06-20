<?php
include 'function.php';
include 'templates/header.php';
include 'templates/navbar.php';
?>
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo $main_url; ?>index.php" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                <!-- Master Data -->
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Master Data</span></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo $main_url; ?>siswa.php" aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Siswa</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-money-bill-transfer"></i><span class="hide-menu">Tagihan</span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="table-basic.html" class="sidebar-link"><span class="hide-menu"> SPP
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><span class="hide-menu">Bangunan
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><span class="hide-menu">
                                    Activity
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-layout-coloured.html" class="sidebar-link"><span class="hide-menu">
                                    Ekstur
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-datatable-basic.html" class="sidebar-link"><span class="hide-menu">
                                    Graduation
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo $main_url; ?>submission.php" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Submission
                        </span></a>
                </li>
                <!-- Transaksi -->
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Transaksi</span></li>
                <li class="sidebar-item selected"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="credit-card" class="feather-icon"></i><span class="hide-menu">Tipe
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item active"><a href="javascript:void(0)" class="sidebar-link active"><span class="hide-menu"> Online
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="<?php echo $main_url; ?>transaksi-offline.php" class="sidebar-link"><span class="hide-menu"> Offline
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html" aria-expanded="false"><i data-feather="refresh-cw" class="feather-icon"></i><span class="hide-menu">Refound</span></a>
                </li>
                <!-- Report -->
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Report</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="icon-wallet"></i><span class="hide-menu">Pembayaran</span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="table-basic.html" class="sidebar-link"><span class="hide-menu"> SPP
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><span class="hide-menu"> Bangunan
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><span class="hide-menu">
                                    Activity
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-layout-coloured.html" class="sidebar-link"><span class="hide-menu">
                                    Ekstur
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="table-datatable-basic.html" class="sidebar-link"><span class="hide-menu">
                                    Graduation
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo $main_url; ?>submission.php" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Submission
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo $main_url; ?>refound.php" aria-expanded="false"><i data-feather="rotate-ccw" class="feather-icon"></i><span class="hide-menu">Refound
                        </span></a>
                </li>
                <br>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Transaksi Online</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item text-muted">Transaksi</li>
                            <li class="breadcrumb-item text-muted" aria-current="page">Tipe</li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Online</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- <div class="col-5 align-self-center">
                <div class="customize-input float-end">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 23</option>
                        <option value="1">July 23</option>
                        <option value="2">Jun 23</option>
                    </select>
                </div>
            </div> -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include 'templates/footer.php'; ?>