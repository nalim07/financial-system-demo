<?php
include 'function.php';
include 'templates/header.php';
include 'templates/navbar.php';
?>

<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
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
                <li class="sidebar-item selected"> <a class="sidebar-link" href="javascript:void(0)" aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Siswa
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-money-bill-transfer"></i><span class="hide-menu">Tagihan </span></a>
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
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo $main_url; ?>refound.php" aria-expanded="false"><i data-feather="refresh-cw" class="feather-icon"></i><span class="hide-menu">Refound
                        </span></a>
                </li>
                <!-- Report -->
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Laporan</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="icon-wallet"></i><span class="hide-menu">Pembayaran </span></a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
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
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)" aria-expanded="false"><i data-feather="rotate-ccw" class="feather-icon"></i><span class="hide-menu">Refound
                        </span></a>
                </li>
                <br>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
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
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Siswa</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item text-muted">Master Data</li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Siswa</li>
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
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="status-filter" class="form-label">Pilih Kelas</label>
                                <select class="form-select" id="status-filter">
                                    <option selected>All</option>
                                    <option value="in-progress">1</option>
                                    <option value="closed">2</option>
                                    <option value="opened">3</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Level</th>
                                        <th>Kelas</th>
                                        <th>NIS</th>
                                        <th>NISN</th>
                                        <th>JK</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                                <td>1</td>
                                                <td>John</td>
                                                <td>Playgroup</td>
                                                <td>PG</td>
                                                <td>276377</td>
                                                <td>1234567890</td>
                                                <td>L</td>
                                                <td>1</td>
                                                <td>
                                                    <button class="btn btn-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Chris</td>
                                                <td>Playgroup</td>
                                                <td>PG</td>
                                                <td>1234251</td>
                                                <td>0987654321</td>
                                                <td>L</td>
                                                <td>1</td>
                                                <td>
                                                    <button class="btn btn-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Emily</td>
                                                <td>Kindergarten</td>
                                                <td>KG</td>
                                                <td>345678</td>
                                                <td>1112223334</td>
                                                <td>P</td>
                                                <td>2</td>
                                                <td>
                                                    <button class="btn btn-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Michael</td>
                                                <td>Elementary</td>
                                                <td>EL</td>
                                                <td>456789</td>
                                                <td>2223334445</td>
                                                <td>L</td>
                                                <td>3</td>
                                                <td>
                                                    <button class="btn btn-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Sarah</td>
                                                <td>High School</td>
                                                <td>HS</td>
                                                <td>567890</td>
                                                <td>3334445556</td>
                                                <td>P</td>
                                                <td>1</td>
                                                <td>
                                                    <button class="btn btn-primary">Detail</button>
                                                </td>
                                            </tr> -->
                                    <tr>
                                        <td>6</td>
                                        <td>Olivia</td>
                                        <td>Playgroup</td>
                                        <td>PG</td>
                                        <td>678901</td>
                                        <td>4445556667</td>
                                        <td>P</td>
                                        <td>2</td>
                                        <td>
                                            <button class="btn btn-primary">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Benjamin</td>
                                        <td>Playgroup</td>
                                        <td>PG</td>
                                        <td>789012</td>
                                        <td>5556667778</td>
                                        <td>L</td>
                                        <td>3</td>
                                        <td>
                                            <button class="btn btn-primary">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Lucas</td>
                                        <td>Playgroup</td>
                                        <td>PG</td>
                                        <td>890123</td>
                                        <td>6667778889</td>
                                        <td>P</td>
                                        <td>1</td>
                                        <td>
                                            <button class="btn btn-primary">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Ava</td>
                                        <td>Playgroup</td>
                                        <td>PG</td>
                                        <td>901234</td>
                                        <td>7778889990</td>
                                        <td>L</td>
                                        <td>2</td>
                                        <td>
                                            <button class="btn btn-primary">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Isabella</td>
                                        <td>Playgroup</td>
                                        <td>PG</td>
                                        <td>012345</td>
                                        <td>8889990001</td>
                                        <td>P</td>
                                        <td>3</td>
                                        <td>
                                            <button class="btn btn-primary">Detail</button>
                                        </td>
                                    </tr>
                                    <!-- Add more data as needed -->
                                </tbody>
                            </table>
                            <ul class="pagination float-end">
                                <li class="page-item">
                                    <a class="page-link" href="<?php echo $main_url; ?>siswa.php" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="<?php echo $main_url; ?>siswa.php">1</a></li>
                                <li class="page-item">
                                    <a class="page-link active" href="#">2 <span class="page-link-active"></span></a>
                                </li>
                                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <li class="page-item disabled">
                                    <a class="page-link" href="">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <?php include 'templates/footer.php'; ?>