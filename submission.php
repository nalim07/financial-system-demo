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
                <li class="list-divider"></li>
                <!-- Master Data -->
                <li class="nav-small-cap"><span class="hide-menu">Master Data</span></li>
                <li class="sidebar-item"> <a class="sidebar-link" href="<?php echo $main_url; ?>siswa.php" aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Siswa
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link" href="<?= $main_url ?>tagihan.php" aria-expanded="false"><i class="fa-solid fa-money-bill-transfer"></i><span class="hide-menu">Tagihan </span></a>
                    <!-- <ul aria-expanded="false" class="collapse  first-level base-level-line">
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
                    </ul> -->
                </li>
                <li class="sidebar-item selected"> <a class="sidebar-link sidebar-link" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Submission
                        </span></a>
                </li>
                <!-- Transaksi -->
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Transaksi<span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="credit-card" class="feather-icon"></i><span class="hide-menu">Tipe
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="<?php echo $main_url; ?>transaksi-online.php" class="sidebar-link"><span class="hide-menu"> Online
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="<?php echo $main_url; ?>transaksi-offline.php" class="sidebar-link"><span class="hide-menu"> Offline
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo $main_url; ?>refound.php" aria-expanded="false"><i data-feather="refresh-cw" class="feather-icon"></i><span class="hide-menu">Refund
                        </span></a>
                </li>
                <!-- Report -->
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Laporan</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="icon-wallet"></i><span class="hide-menu">Pembayaran </span></a>
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
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards.html" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Submission
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)" aria-expanded="false"><i data-feather="rotate-ccw" class="feather-icon"></i><span class="hide-menu">Refund
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
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Submission</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="#" class="text-muted">Master Data</a>
                            </li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Submission</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Calender -->
            <!-- <div class="col-5 align-self-center">
                        <div class="customize-input float-end">
                            <select
                                class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
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
        <!-- data tabel siswa -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pengaju</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>2024-06-01</td>
                                        <td>Menunggu Persetujuan</td>
                                        <td>
                                            <a href="#" class="btn btn-success">Terima</a>
                                            <a href="#" class="btn btn-primary">Detail</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Doe</td>
                                        <td>2024-06-02</td>
                                        <td>Menunggu Persetujuan</td>
                                        <td>
                                            <a href="#" class="btn btn-success">Terima</a>
                                            <a href="#" class="btn btn-primary">Detail</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>James Doe</td>
                                        <td>2024-06-03</td>
                                        <td>Menunggu Persetujuan</td>
                                        <td>
                        
                                            <a href="#" class="btn btn-success">Terima</a>
                                            <a href="#" class="btn btn-primary">Detail</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                    
                                        </td>
                                    </tr>
                                    <!-- <?php foreach ($pengajuan as $key => $value) : ?>
                                        <tr>
                                            <td><?= $key + 1; ?></td>
                                            <td><?= $value['nama_pengaju']; ?></td>
                                            <td><?= $value['tanggal_pengajuan']; ?></td>
                                            <td><?= $value['status']; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Detail</a>
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
</div>

<?php include 'templates/footer.php'; ?>