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
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
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
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="row">
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
                </div>
                <!-- *************************************************************** -->
                <!-- End First Cards -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->
                <!-- Start Location and Earnings Charts Section -->
                <div class="row">
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
                                    <img src="<?php echo $main_url; ?>assets/images/atm-card.png" alt="ATM Card" class="img-fluid"
                                        style="max-width: 100%; height: auto;">
                                    <div class="mt-3">
                                        <h5>Bank Name</h5>
                                        <p class="text-secondary mb-1">1234 5678 9012 3456</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-body" style="height: 370px; overflow-y: auto;">
                                <h4 class="card-title">Aktivitas Terbaru</h4>
                                <div class="mt-4 activity">
                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-success btn-circle mb-2 btn-item">
                                                <i data-feather="check"></i>
                                            </a>
                                            <!-- <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                                <i data-feather="bell"></i>
                                            </a> -->
                                        </div>
                                        <div class="ms-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Transfer</h5>
                                            <p class="font-14 mb-2 text-muted">
                                                Kirim uang sebesar Rp 50.000
                                            </p>
                                            <span class="font-weight-light font-14 text-muted">20 Juni 2024 &#8226; 08:00</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-success btn-circle mb-2 btn-item">
                                                <i data-feather="check"></i>
                                            </a>
                                            <!-- <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                                <i data-feather="bell"></i>
                                            </a> -->
                                        </div>
                                        <div class="ms-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Transfer</h5>
                                            <p class="font-14 mb-2 text-muted">
                                                Kirim uang sebesar Rp 50.000
                                            </p>
                                            <span class="font-weight-light font-14 text-muted">19 Juni 2024 &#8226; 12:00</span>
                                        </div>
                                    </div>
                                    <!-- <div class="d-flex align-items-start border-left-line pb-3">
                                        <div>
                                            <a href="javascript:void(0)"
                                                class="btn btn-danger btn-circle mb-2 btn-item">
                                                <i data-feather="message-square"></i>
                                            </a>
                                        </div>
                                        <div class="ms-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">New Chat</h5>
                                            <p class="font-14 mb-2 text-muted">Richardson just create chat<br>
                                            </p>
                                            <span class="font-weight-light font-14 text-muted">25 Minutes Ago</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start border-left-line">
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-cyan btn-circle mb-2 btn-item">
                                                <i data-feather="bell"></i>
                                            </a>
                                        </div>
                                        <div class="ms-3 mt-2">
                                            <h5 class="text-dark font-weight-medium mb-2">Notification Pending
                                                Transaction!
                                            </h5>
                                            <p class="font-14 mb-2 text-muted">One Pending transaction from Ryne <br>
                                                Doe</p>
                                            <span class="font-weight-light font-14 mb-1 d-block text-muted">2 Hours
                                                Ago</span>
                                            <a href="javascript:void(0)"
                                                class="font-14 border-bottom pb-1 border-info">Load More</a>
                                        </div>
                                    </div> -->
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