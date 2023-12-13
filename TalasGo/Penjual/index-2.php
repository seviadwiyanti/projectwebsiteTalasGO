<?php include 'layouts/session.php';
?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Data Produk"]; ?> | Admin - TalasGO</title>

    <?php include 'layouts/head.php'; ?>
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "Data Produk";
                $title = "Selamat datang, Min🙌";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Penjual</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="259"></span>
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+17</span>
                                            <span class="ms-1 text-muted font-size-13">Sejak minggu lalu</span>
                                        </div>
                                    </div>

                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart1" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Produk</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="567">0</span>
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-danger text-danger">-17</span>
                                            <span class="ms-1 text-muted font-size-13">Since minggu lalu</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Rata-Rata Penjualan</span>
                                        <h4 class="mb-3">
                                            Rp<span class="counter-value" data-target="2.54">0</span>Juta
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+ Rp600 Ribu</span>
                                            <span class="ms-1 text-muted font-size-13">Sejak minggu lalu</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart3" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Pengiriman Pesanan</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="18.34">0</span>%
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+5.32%</span>
                                            <span class="ms-1 text-muted font-size-13">Sejak minggu lalu</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart4" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row-->

                <div class="row">
                    <div class="col-xl-8">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <h5 class="card-title me-2">Tinjauan Pasar</h5>
                                    <div class="ms-auto">
                                        <div>
                                            <button type="button" class="btn btn-soft-primary btn-sm">
                                                Semua
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                1 Bulan
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                6 Bulan
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                1 Tahun
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-xl-8">
                                        <div>
                                            <div id="market-overview" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="p-4">
                                            <div class="mt-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            1
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Buah Talas</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+5.4%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            2
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Lapis Bunder</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+6.8%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            3
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Keripik Talas</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-4.9%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            4
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Es Taro</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+3.5%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            5
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Benih Talas</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-0.3%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 pt-2">
                                                <a href="" class="btn btn-primary w-100">Lihat Semua Saldo<i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="col-xl-4">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <h5 class="card-title me-2">Lokasi Penjualan Produk Talas</h5>
                                    
                                </div>

                                <div id="sales-by-locations" data-colors='["#33c38e"]' style="height: 253px"></div>

                                <div class="px-2 py-2">
                                    <p class="mb-1">Baranangsiang <span class="float-end">30</span></p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-1">Cisarua<span class="float-end">25</span></p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-1">Sukasari<span class="float-end">15</span></p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 45%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Pengguna</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="402"></span>
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+6</span>
                                            <span class="ms-1 text-muted font-size-13">Sejak minggu lalu</span>
                                        </div>
                                    </div>

                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart1" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Artikel</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="24">0</span>
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+2</span>
                                            <span class="ms-1 text-muted font-size-13">Sejak minggu lalu</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Konsultasi</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="219">0</span>
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+77</span>
                                            <span class="ms-1 text-muted font-size-13">Sejak minggu lalu</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart3" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Lokasi Penjualan</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="112">0</span>
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+5</span>
                                            <span class="ms-1 text-muted font-size-13">Sejak minggu lalu</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart4" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row-->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>


</body>

</html>