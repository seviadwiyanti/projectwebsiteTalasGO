<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit();
}

if (isset($_SESSION['role']) && $_SESSION['role'] !== "admin") {
    header("Location: ../../index.php");
    exit();
}

// include_once 'auth.php';
include_once "layouts/config.php";

// Fetch data from users table
$queryUsers = "SELECT * FROM users";
$resultUsers = mysqli_query($config, $queryUsers);

// Check if there are rows in the result
if (mysqli_num_rows($resultUsers) > 0) {
    $data_pengguna = mysqli_fetch_all($resultUsers, MYSQLI_ASSOC);

    // Count the total number of User and Penjual
    $totalUser = 0;
    $totalPenjual = 0;

    foreach ($data_pengguna as $row) {
        if ($row['role'] === 'User') {
            $totalUser++;
        } elseif ($row['role'] === 'Penjual') {
            $totalPenjual++;
        }
    }
}

// Fetch data from tbl_produk table
$queryProduk = "SELECT COUNT(*) as totalProduk FROM tbl_produk";
$resultProduk = mysqli_query($config, $queryProduk);
$dataProduk = mysqli_fetch_assoc($resultProduk);
$totalProduk = $dataProduk['totalProduk'];

// Fetch data from tbl_pemetaan table
$queryPemetaan = "SELECT COUNT(*) as totalPemetaan FROM tbl_pemetaan";
$resultPemetaan = mysqli_query($config, $queryPemetaan);
$dataPemetaan = mysqli_fetch_assoc($resultPemetaan);
$totalPemetaan = $dataPemetaan['totalPemetaan'];

// Fetch data from tbl_artikel table
$queryArtikel = "SELECT COUNT(*) as totalArtikel FROM tbl_artikel";
$resultArtikel = mysqli_query($config, $queryArtikel);
$dataArtikel = mysqli_fetch_assoc($resultArtikel);
$totalArtikel = $dataArtikel['totalArtikel'];


// Handle form submission
if (isset($_POST['submit'])) {
    // Your existing code for form submission
    // ...
}
?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title><?php echo $language["Beranda"]; ?> | Admin - TalasGO</title>

    <?php include 'layouts/head.php'; ?>
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-style.php'; ?>

    <style>
        .page-full-height {
    position: relative;
}
.page-full-height .map-full {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 115px;
}
.page-full-height .map-full #map-full {
    height: 100%;
}
.page-full-height .map-full-cont {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
}
.map-full-cont .search2 {
    margin: 0 0 -30px;
}
.map-full-cont .search2-submit input[type=submit] {
    padding: 62px 15px 32px;
    background-color: #f3a249;
    height: 115px;
}
.map-full-cont .search2-submit input[type=submit]:hover {
    background-color: #f5ae61;
}




.map-full .prop-i {
    padding: 5px 28px 60px;
    position: relative;
    background-color: #fff;
    font-weight: 400;
}
.map-full .prop-i .prop-i-img {
    display: block;
    margin: 0 -28px 30px;
    overflow: hidden;
    position: relative;
}
.map-full .prop-i .prop-i-img:after {
    display: block;
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    border-left: 15px solid #ffffff;
    border-bottom: 20px solid #ffffff;
    border-right: 15px solid transparent;
    border-top: 20px solid transparent;
}
.map-full .prop-i .prop-i-img img {
    display: block;
    width: 100%;
    height: auto;
}
.map-full .prop-i .prop-i-infolist {
    margin: 0 0 25px;
}
.map-full .prop-i .prop-i-infolist li {
    display: inline-block;
    color: #3357b4;
    font-size: 16px;
    padding-right: 5px;
}
.map-full .prop-i .prop-i-infolist li .prop-i-info-icon {
    display: inline-block;
    margin: 0 10px 0 0;
    vertical-align: middle;
}
.map-full .prop-i .prop-i-bottom {
    left: 28px;
    right: 28px;
}
.map-full .prop-i .prop-i-price {
    margin: 0 0 11px;
}
.map-full .prop-i .prop-i-type {
    margin: 1px 10px 10px 0;
}

.prop-i-hr {
    border: 2px solid black;
    margin-bottom: 10px; /* Sesuaikan dengan jarak yang diinginkan */
}


    </style>

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
                $maintitle = "Beranda";
                $title = "Selamat datang, Min🙌";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
<div>
    <h3><a href="../../index.php">Ke Halaman User</a></h3>
</div>


<div class="row">
    <!-- ... (Card Total Penjual) ... -->

    <!-- Card Total User -->
    <div class="col-xl-3 col-md-6">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total User</span>
                        <h4 class="mb-3">
                            <span><?php echo $totalUser; ?></span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Penjual</span>
                        <h4 class="mb-3">
                            <span><?php echo $totalPenjual; ?></span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total Artikel -->
    <div class="col-xl-3 col-md-6">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Artikel</span>
                        <h4 class="mb-3">
                            <span><?php echo $totalArtikel; ?></span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total Titik Lokasi Toko -->
    <div class="col-xl-3 col-md-6">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Titik Lokasi Toko</span>
                        <h4 class="mb-3">
                            <span><?php echo $totalPemetaan; ?></span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total Produk -->
    <div class="col-xl-3 col-md-6">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Produk</span>
                        <h4 class="mb-3">
                            <span><?php echo $totalProduk; ?></span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- ... Your other scripts ... -->

<!-- Div container for the combined chart -->
<div class="col-xl-100 col-md-60">
        <div class="card card-h-70">
            <div class="card-body">
<div id="combinedChart" class="apex-charts-container">

<script>
    // Data for the combined chart
    var combinedChartData = {
        series: [
            { name: 'Total User', data: [<?php echo $totalUser; ?>] },
            { name: 'Total Penjual', data: [<?php echo $totalPenjual; ?>] },
            { name: 'Total Artikel', data: [<?php echo $totalArtikel; ?>] },
            { name: 'Total Titik Lokasi Toko', data: [<?php echo $totalPemetaan; ?>] },
            { name: 'Total Produk', data: [<?php echo $totalProduk; ?>] },
        ],
        chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded',
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 3,  // Increase the width for a more prominent stroke
            colors: ['#eee'],  // Set the stroke color
        },
        xaxis: {
            categories: ['Total'],
            labels: {
                style: {
                    colors: ['#333'],
                    fontSize: '12px',
                },
            },
        },
        yaxis: {
            title: {
                text: 'Jumlah',
                style: {
                    color: '#555',
                    fontSize: '14px',
                },
            },
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val;
                },
            },
        },
        colors: ['#4CAF50', '#2196F3', '#FFC107', '#FF5722', '#9C27B0'],
    };

    // Initialize and render the combined chart
    var combinedChart = new ApexCharts(document.querySelector("#combinedChart"), combinedChartData);
    combinedChart.render();
</script>
</div>
</div>
</div>
</div>



                <h5>Lokasi Penjualan Produk Talas</h5>
                <div class="page-full-height">
                    <div class="map-full">
                        <div id="map-full"> 
                        </div>
                    </div>
                    <div class="map-full-cont"> 
                    </div>
                </div>

                <div class="row">
                    <!-- end row-->

                    
<!-- end row-->

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
<!-- Include ApexCharts library -->
<!-- Include ApexCharts library -->

<!-- ... Your other scripts ... -->


<!-- jQuery UI - DatePicker -->
<script src="assets/jsPemetaan/jquery-1.12.3.min.js"></script>
<!-- jQuery UI - DatePicker -->
<script src="assets/jsPemetaan/jquery-ui.min.js"></script>
<script src="assets/jsPemetaan/swiper.jquery.min.js"></script>
<script src="assets/jsPemetaan/chosen.jquery.min.js"></script>
<script src="assets/jsPemetaan/jquery.waypoints.min.js"></script>
<script src="assets/jsPemetaan/jquery.countTo.js"></script>
<script src="assets/jsPemetaan/ion.rangeSlider.min.js"></script>
<script src="assets/jsPemetaan/fancybox/fancybox.js"></script>
<script src="assets/jsPemetaan/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script src="assets/jsPemetaan/isotope.min.js"></script>
<script src="assets/jsPemetaan/main.js"></script>

<script src="assets/jsPemetaan/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhAYvx0GmLyN5hlf6Uv_e9pPvUT3YpozE"></script>
<script src="assets/jsPemetaan/google-maps.js"></script>

<!-- js yang lama -->

</body>

</html>