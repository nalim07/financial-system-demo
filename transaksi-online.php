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
                <li class="sidebar-item"> <a class="sidebar-link" href="<?php echo $main_url; ?>tagihan.php" aria-expanded="false"><i class="fa-solid fa-money-bill-transfer"></i><span class="hide-menu">Tagihan</span></a>
                    <!-- <ul aria-expanded="false" class="collapse  first-level base-level-line">
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
                    </ul> -->
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
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo $main_url; ?>refound.php" aria-expanded="false"><i data-feather="refresh-cw" class="feather-icon"></i><span class="hide-menu">Refund</span></a>
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
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo $main_url; ?>refound.php" aria-expanded="false"><i data-feather="rotate-ccw" class="feather-icon"></i><span class="hide-menu">Refund
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
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Transaksi Baru</th>
                                    <th>Cek Detail Pembayaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Transaksi 1</td>
                                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailModal">Cek Detail</button></td>
                                    <td>
                                        <a href="#" class="btn btn-success">Verifikasi Admin</a>
                                        <a href="#" class="btn btn-primary">Cetak Kwitansi</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Transaksi 2</td>
                                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#detailModal">Cek Detail</a></td>
                                    <td>
                                        <a href="#" class="btn btn-success">Verifikasi Admin</a>
                                        <a href="#" class="btn btn-primary">Cetak Kwitansi</a>
                                    </td>
                                </tr>
                                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                    <!-- Modal Detail Pembayaran -->
                    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailModalLabel">Detail Pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Isi detail pembayaran disini -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
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