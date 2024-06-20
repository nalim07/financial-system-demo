<?php
include 'function.php';
include 'templates/header.php';
include 'templates/navbar.php';
include 'templates/sidebar.php';
?>

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
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Mr. A!</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-end">
                    <input type="date" class="form-control bg-white border-0 custom-shadow custom-radius">
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- *************************************************************** -->
        <div class="row g-3 mb-3">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Akun Utama</h5>
                                <h3 class="navy-blue">Rp57.250.000</h3>
                                <span class="text-success">7.2%</span>
                            </div>
                            <div>
                                <canvas id="mainAccountChart" width="100" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Akun Sampingan</h5>
                                <h3 class="text-muted">Rp13.900.000</h3>
                                <span class="text-danger">3.1%</span>
                            </div>
                            <div>
                                <canvas id="sideAccountChart" width="100" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Dashboard -->
        <!-- <div class="row">
                    <div class="col-sm-6 col-lg-5">
                        <div class="card border-end">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium"><span>Rp </span>2.000.000</h2>
                                        </div>
                                        <span style="color: #10B981; font-size: 16px; text-align: left;"
                                            class="badge font-13 font-weight-large rounded-pill ms-2 d-lg-block d-md-none">+10.0%</span>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Income
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-5">
                        <div class="card border-end ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                                class="set-doller"></sup>Rp 1.000</h2>
                                        <span style="color: #EF4444; font-size: 16px; text-align: left;"
                                            class="badge font-13 font-weight-large rounded-pill ms-2 d-lg-block d-md-none">-10.0%</span>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Receivables
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- End Dashboard -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Sales Charts Section -->
        <!-- *************************************************************** -->
        <!-- Start Location and Earnings Charts Section -->
        <div class="row">

            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body" style="height: 370px; overflow-y: auto;">
                        <h4 class="card-title">Aktivitas Terbaru</h4>
                        <div class="mt-4 activity">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <img style="width: 30px;" src="<?= $main_url ?>assets/images/visa-logo.png" alt="Visa" class="me-2">
                                        Visa ending in 8495 <br>
                                        <small>Expiry 06/2024</small>
                                    </div>
                                    <span class="text-success">+ Rp25,000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="https://via.placeholder.com/20" alt="Jago" class="me-2">
                                        Jago ending in 4731 <br>
                                        <small>cynthia@halofigma.com</small>
                                    </div>
                                    <span class="text-success">+ Rp75,000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="https://via.placeholder.com/20" alt="Apple Pay" class="me-2">
                                        Apple Pay <br>
                                        <small>handi@halofigma.com</small>
                                    </div>
                                    <span class="text-success">+ Rp20,000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="https://via.placeholder.com/20" alt="Mastercard" class="me-2">
                                        Mastercard ending in 4829 <br>
                                        <small>Expiry 03/2024</small>
                                    </div>
                                    <span class="text-success">+ Rp75,000</span>
                                </li>
                                <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="https://via.placeholder.com/20" alt="Paypal" class="me-2">
                                        Paypal deposit <br>
                                        <small>ark@halofigma.com</small>
                                    </div>
                                    <span class="text-success">+ Rp90,000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="https://via.placeholder.com/20" alt="BCA" class="me-2">
                                        BCA ending in 1163 <br>
                                        <small>Expiry 03/2025</small>
                                    </div>
                                    <span class="text-success">+ Rp75,000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="https://via.placeholder.com/20" alt="Stripe" class="me-2">
                                        Stripe deposit <br>
                                        <small>annisa@halofigma.com</small>
                                    </div>
                                    <span class="text-success">+ Rp69,000</span>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <!-- <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <h4 class="card-title mb-0">Earning Statistics</h4>
                                    <div class="ms-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="#">Insert</a>
                                                <a class="dropdown-item" href="#">Update</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-4 mb-5">
                                    <div class="stats ct-charts position-relative" style="height: 315px;"></div>
                                </div>
                                <ul class="list-inline text-center mt-4 mb-0">
                                    <li class="list-inline-item text-muted fst-italic">Earnings for this month</li>
                                </ul>
                            </div>
                        </div> -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">My Card</h4>
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?php echo $main_url; ?>assets/images/atm-card.png" alt="ATM Card" class="img-fluid" style="max-width: 100%; height: auto;">
                            <div class="mt-3">
                                <h5>Bank Name</h5>
                                <p class="text-secondary mb-1">1234 5678 9012 3456</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Location and Earnings Charts Section -->

        <div class="row">
            <div class="col-md-6 col-lg-4">

            </div>
        </div>
        <!-- Diagram Batang -->
        <!-- <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pendapatan Bersih</h4>
                                <div class="pendapatan-bersih mt-4 position-relative" style="height:294px;"></div>
                                <ul class="list-inline text-center mt-5 mb-2">
                                    <li class="list-inline-item text-muted fst-italic">Penjualan bulan ini</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
    </div>
    <!-- *************************************************************** -->
    <!-- End Sales Charts Section -->
    <!-- *************************************************************** -->
    <!-- *************************************************************** -->

    <!-- *************************************************************** -->
    <!-- Start My Card Section -->

    <!-- End My Card Section -->
    <!-- total income -->
    <!-- <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Income</h4>
                            <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                            <ul class="list-style-none mb-0">
                                <li>
                                    <i class="fas fa-circle text-primary font-10 me-2"></i>
                                    <span class="text-muted">Basic Income</span>
                                    <span class="text-dark float-end font-weight-medium">$2346</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-danger font-10 me-2"></i>
                                    <span class="text-muted">Bonus Income</span>
                                    <span class="text-dark float-end font-weight-medium">$2108</span>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-circle text-cyan font-10 me-2"></i>
                                    <span class="text-muted">Additional Income</span>
                                    <span class="text-dark float-end font-weight-medium">$1204</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <?php
    include 'templates/footer.php';
    ?>