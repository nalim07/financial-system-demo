<?php
include 'function.php';
include 'templates/header.php';
include 'templates/navbar.php';
?>

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
                <li class="sidebar-item"> <a class="sidebar-link" href="<?php echo $main_url; ?>tagihan.php" aria-expanded="false"><i class="fa-solid fa-money-bill-transfer"></i><span class="hide-menu">Tagihan </span></a>
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

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Detail Siswa</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item text-muted">Master Data
                            </li>
                            <li class="breadcrumb-item text-muted" aria-current="page">Siswa</li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Detail Siswa</li>
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
            <div class="col-md-12 col-lg-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline bg-primary">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="mb-2" src="https://gmels.eduhybrid.id/storage/siswa/192007007.jpg" alt="siswa/192007007.jpg" alt="pas_photo" width="105px">
                        </div>

                        <h3 class="profile-username text-center" style="color: #ffffff;">JOHN DOE 1</h3>

                        <p class="text-center" style="color: #ffffff;">
                            <!-- check for role in roles -->
                            Student
                        </p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item" style="color: #ffffff;">
                                <b>Status</b> <a class="float-right">
                                    <span class="badge bg-success">Active</span>
                                </a>
                            </li>
                            <li class="list-group-item" style="color: #ffffff;">
                                <b>Username</b>: <a class="float-right" style="color: #ffffff;">siswa</a>
                            </li>
                            <li class="list-group-item" style="color: #ffffff;">
                                <b>Email</b>: <a class="float-right" style="color: #ffffff;">john.doe1@example.com</a>
                            </li>
                            <li class="list-group-item" style="color: #ffffff;">
                                <b>Phone</b>: <a class="float-right" style="color: #ffffff;">1234567891</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Data Pribadi</h3>
                        <div class="card-tools">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <a href="<?= $main_url ?>siswa.php" class="btn btn-success btn-sm">Back</a>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-print-bill">Print Bill</button>
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal-history-payment">History Payment</button>
                                </div>
                            </div>
                            <!-- <form action="https://gmels.eduhybrid.id/admin/master-data/siswa/print/1" method="GET" target="_black" style="display: inline-block;">
                                <input type="hidden" name="_token" value="aqkpFvFGf8Ej85CKKCkHCE7uZ8DBxnBouMKKfmMf" autocomplete="off"> <input type="hidden" name="id" value="1">
                                <input type="hidden" name="paper_size" value="A4">
                                <input type="hidden" name="orientation" value="potrait">
                                <button type="submit" class="btn btn-primary btn-sm">Print</button>
                            </form> -->
                        </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">

                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                            <li class="nav-item">
                                <a href="#student1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                    <i class="mdi mdi-home-variant d-lg-none d-block me-1"></i>
                                    <span class="d-block">Student</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tagihan1" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 ">
                                    <i class="mdi mdi-account-circle d-lg-none d-block me-1"></i>
                                    <span class="d-block">Tagihan</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane  show active" id="student1">
                                <div class="border-bottom p-2">
                                    <h6 class="mt-2"><b>A. Personal Information</b></h6>
                                    <div class="form-group row py-2">
                                        <label for="nik" class="col-sm-3 col-form-label ">NIK</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="NIK" value="1234567890123421" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="nis" name="nis" placeholder="NIS" value="192007007" disabled>
                                        </div>
                                        <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="nisn" name="nisn" placeholder="NISN" value="0987654321" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label class="col-sm-3 col-form-label">Student Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="" value="JOHN DOE 1" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label class="col-sm-3 col-form-label">Nama Panggilan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="" value="John" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label class=" col-sm-3 col-form-label ">Tingkatan</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-select" required disabled>
                                                <option value=""></option>
                                                <option value="1">
                                                    Playgroup</option>
                                                <option value="2">
                                                    Kindergarten A</option>
                                                <option value="3">
                                                    Kindergarten B</option>
                                                <option value="4">
                                                    Primary School</option>
                                                <option value="5" selected>
                                                    Junior High School</option>
                                                <option value="6">
                                                    Senior High School</option>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-form-label ">Class</label>
                                        <div class="col-sm-4">
                                            <select class="form-control form-select" required disabled>
                                                <option value=""></option>
                                                <option value="1" selected>
                                                    PG
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="nama_wali" class="col-sm-3 col-form-label ">Jenis
                                            Pendaftaran</label>
                                        <div class="col-sm-3 pt-1">
                                            <label class="form-check-label mr-3"><input type="radio" value="1" checked required disabled>
                                                Siswa Baru</label>
                                            <label class="form-check-label mr-3"><input type="radio" value="2" required disabled>
                                                Pindahan</label>
                                        </div>
                                        <label class="col-sm-2 col-form-label ">Jurusan</label>
                                        <div class="col-sm-4">
                                            <select class="form-control form-select" required disabled>
                                                <option value=""></option>
                                                <option value="1" selected>
                                                    IPA
                                                </option>
                                                <option value="2">
                                                    IPS
                                                </option>
                                                <option value="3">
                                                    NON
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="tahun_masuk" class="col-sm-3 col-form-label required">Tahun
                                            Masuk</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" value="2022" disabled>
                                        </div>
                                        <label for="semester_masuk" class="col-sm-2 col-form-label required">Semester
                                            Masuk</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="1" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="kelas_masuk" class="col-sm-3 col-form-label required">Kelas
                                            Masuk</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" value="PA1" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis
                                            Kelamin</label>
                                        <div class="col-sm-3 pt-1">
                                            <label class="form-check-label me-3"><input type="radio" value="MALE" checked required disabled>
                                                Male</label>
                                            <label class="form-check-label me-3"><input type="radio" value="FEMALE" required disabled>
                                                Female</label>
                                        </div>
                                        <label for="bloodtype" class="col-sm-2 col-form-label">Gol. Darah</label>
                                        <div class="col-sm-4">
                                            <select class="form-control form-select" name="blood_type" required disabled>
                                                <option value=""></option>
                                                <option value="A" selected>A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" value="Jakarta" disabled>
                                        </div>
                                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal
                                            Lahir</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" value="2000-01-01" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-select" required disabled>
                                                <option value=""></option>
                                                <option value="1" selected>Islam</option>
                                                <option value="2">Protestan
                                                </option>
                                                <option value="3">Katolik</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Khonghucu
                                                </option>
                                                <option value="7">Lainnya
                                                </option>
                                            </select>
                                        </div>
                                        <label for="warga_negara" class="col-sm-2 col-form-label">Warga Negara</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="ID" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row py-2">
                                        <label for="jml_saudara_kandung" class="col-sm-3 col-form-label">Jumlah
                                            Saudara Kandung</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="jml_saudara_kandung" name="jml_saudara_kandung" value="02" disabled>
                                        </div>
                                        <label for="anak_ke" class="col-sm-2 col-form-label">Anak Ke</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" value="01" disabled>
                                        </div>
                                    </div>
                                </div>


                                <div class="border-bottom mt-3 p-2">
                                    <h6 class="mt-2"><b>B. Domicile Information</b></h6>
                                    <div class="form-group row py-2">
                                        <label for="alamat" class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder="" disabled>Jl. ABC No. 123</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="kota" class="col-sm-3 col-form-label">Kota</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" placeholder="" value="Jakarta" disabled>
                                        </div>
                                        <label for="kode_pos" class="col-sm-2 col-form-label">Postal Code</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" placeholder="" value="12345" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="jarak_rumah_ke_sekolah" class="col-sm-3 col-form-label">Jarak
                                            Rumah ke Sekolah (km)</label>
                                        <div class="col-sm-9">
                                            <input type="number" placeholder="" class="form-control" value="5" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="" value="john.doe1@example.com" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="email_parent" class="col-sm-3 col-form-label">Email Parent</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="" value="dad.doe1@example.com" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="nomor_hp" class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" placeholder="" value="1234567891" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="tinggal_bersama" class="col-sm-3 col-form-label">Tinggal
                                            Bersama</label>
                                        <div class="col-sm-4">
                                            <select class="form-control form-select" name="tinggal_bersama" disabled>
                                                <option value=""></option>
                                                <option value="Parents" selected>Parents</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" value="" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-bottom mt-3 p-2">
                                    <h6 class="mt-2"><b>C. Student Medical Condition</b></h6>
                                    <div class="form-group row py-2">
                                        <label class="col-sm-3 col-form-label">Tinggi Badan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" placeholder="" value="170" disabled>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Berat Badan</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="" value="60" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label class="col-sm-3 col-form-label">Spesial Treatment</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="" value="None" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label class="col-sm-3 col-form-label">Note Kesehatan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="" value="Healthy individual" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label class="col-sm-3 col-form-label">File Document Kesehatan</label>
                                        <div class="col-sm-9 custom-file">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label class="col-sm-3 col-form-label">File List Pertanyaan</label>
                                        <div class="col-sm-9 custom-file">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 p-2">
                                    <h6 class="mt-2"><b>D. Previously Formal School</b></h6>
                                    <div class="form-group row py-2">
                                        <label class="col-sm-3 col-form-label">Tgl. Masuk Sekolah</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" placeholder="" value="2010-01-01" disabled>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Tgl. Keluar Sekolah</label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control" placeholder="" value="2015-01-01" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="nama_sekolah_lama" class="col-sm-3 col-form-label">Nama
                                            Sekolah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="" value="Previous School" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="" class="col-sm-3 col-form-label">Prestasi</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" value="School Championship" disabled>
                                        </div>
                                        <label for="" class="col-sm-2 col-form-label">Tahun Prestasi</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" value="2010" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="" class="col-sm-3 col-form-label">Sertifikat
                                            Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="ABC123" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="alamat_sekolah_lama" class="col-sm-3 col-form-label">Address
                                            Sekolah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="" value="Jl. XYZ No. 456" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row py-2">
                                        <label for="no_sttb" class="col-sm-3 col-form-label">No. STTB</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="" value="STTB123" disabled>
                                        </div>
                                        <label for="nem" class="col-sm-3 col-form-label">NEM</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" placeholder="" value="9" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tagihan1">
                                <div class="form-group row mb-3">
                                    <label for="tagihan_registrasi" class="col-sm-3 col-form-label">Registrasi</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Tagihan Registrasi" value="Rp 1.000.000" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="tagihan_uang_pangkal" class="col-sm-3 col-form-label">Uang Pangkal</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Tagihan Uang Pangkal" value="Rp 5.000.000" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="tagihan_spp" class="col-sm-3 col-form-label">SPP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Tagihan SPP" value="Rp 1.500.000" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="tagihan_denda" class="col-sm-3 col-form-label">Denda</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Tagihan Denda" value="-" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="tagihan_activity" class="col-sm-3 col-form-label">Activity</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Tagihan Activity" value="Rp 1.000.000" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="tagihan_ekstur" class="col-sm-3 col-form-label">Ekstur</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Tagihan Ekstur" value="Rp 2.000.000" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="tagihan_graduation" class="col-sm-3 col-form-label">Graduation</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Tagihan Graduation" value="Rp 3.000.000" disabled>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="tab-pane" id="mother1">
                                <div class="border-bottom p-2">
                                    <h6 class="mt-2"><b>A. Mother</b></h6>
                                    <div class="form-group row">
                                        <label for="nik_ibu" class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="NIK" value="1234567890123455" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_ayah" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Nama" value="Mom Doe" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Tempat Lahir" value="" disabled>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir" value="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder="Address" disabled>Jl. ABC No. 123</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Phone" value="1234567892" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select class="form-control form-select" disabled>
                                                <option selected></option>
                                                <option value="1">Islam</option>
                                                <option value="2">Kristen</option>
                                                <option value="3">Katolik</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Khonghucu
                                                </option>
                                                <option value="7">Lainnya
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kota</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Kota" value="" disabled>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Pendidikan Terakhir" value="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekerjaan Ayah" value="Teacher" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penghasil_ibu" class="col-sm-3 col-form-label">Penghasilan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Penghasilan" value="" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="tab-pane" id="guardian1">
                                <div class="border-bottom p-2">
                                    <h6 class="mt-2"><b>A. Guardian</b></h6>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="NIK" value="1234567890123456" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Nama" value="Wali Doe" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Tempat Lahir" value="" disabled>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir" value="01-01-1970" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder="Address" disabled>Jl. ABC No. 123</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Phone" value="1234567893" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select class="form-control form-select" disabled>
                                                <option selected></option>
                                                <option value="1">Islam</option>
                                                <option value="2">Kristen</option>
                                                <option value="3">Katolik</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Khonghucu
                                                </option>
                                                <option value="7">Lainnya
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kota</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Kota" value="" disabled>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Pendidikan Terakhir" value="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekerjaan" value="Doctor" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Penghasilan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Penghasilan" value="" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-12">
                                <a href="<?= $main_url ?>siswa.php" class="btn btn-success btn-sm">Back</a>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-print-bill">Print Bill</button>
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal-history-payment">History Payment</button>
                            </div>
                        </div>
                        <!-- <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit1">Edit</button> -->
                        <!-- <form action="https://gmels.eduhybrid.id/admin/master-data/siswa/print/1" method="GET" target="_black" style="display: inline-block;">
                            <input type="hidden" name="_token" value="aqkpFvFGf8Ej85CKKCkHCE7uZ8DBxnBouMKKfmMf" autocomplete="off"> <input type="hidden" name="id" value="1">
                            <input type="hidden" name="paper_size" value="A4">
                            <input type="hidden" name="orientation" value="potrait">
                            <button type="submit" class="btn btn-primary btn-sm">Print</button>
                        </form> -->
                        <!-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-registrasi1" title="Non Active Siswa">
                            Non Active
                        </button> -->
                    </div><!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include 'templates/footer.php';
?>