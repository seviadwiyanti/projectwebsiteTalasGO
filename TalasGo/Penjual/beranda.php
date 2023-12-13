<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: ../Admin/Dason-PHP/login.php");
    exit();
}

require "functions.php";

// Get user ID from the session
$userId = $_SESSION["user"];

// Get total number of products for the logged-in user
$totalProducts = count(query("SELECT * FROM tbl_produk WHERE id_users = $userId"));

$sql = "SELECT
            tp.id_produk,
            tp.nama_produk,
            COUNT(tu.id_ulasan) AS total_ulasan
        FROM
            tbl_produk tp
        LEFT JOIN
            tbl_ulasan tu ON tp.id_produk = tu.id_produk
        WHERE
            tp.id_users = $userId
        GROUP BY
            tp.id_produk, tp.nama_produk";

$dataProduk = query($sql);


?>

<?php include 'layouts/head-main.php'; ?>

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Admin - TalasGO</title>
    <?php include 'layouts/head.php'; ?>
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">
    <?php include 'layouts/head-style.php'; ?>

    <style>
        .total-produk {
        padding: 20px;
        background: #ffffff;
        width: 300px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        transition: transform 0.3s ease-in-out;
    }

    .total-produk:hover {
        transform: scale(1.05);
    }

    .total-produk h4 {
        margin-bottom: 0;
        color: #333333;
    }

    .container-fluid {
        margin-top: 20px;
    }

    .container-fluid h3 {
        color: #333333;
    }

    /* Styling for paginated products */
    .row .col-md-4 {
        margin-bottom: 20px;
    }

    .card {
        border: 1px solid #dddddd;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
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
                <h3>Selamat Datang </h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="total-produk">
                            <h4>Total Produk: <?= $totalProducts ?></h4>
                        </div>
                    </div>
                </div>

                <canvas id="myChart" width="300" height="150"></canvas>

    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode(array_column($dataProduk, 'nama_produk')); ?>,
            datasets: [{
                label: 'Total Ulasan',
                data: <?php echo json_encode(array_map('intval', array_column($dataProduk, 'total_ulasan'))); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
    scales: {
        y: {
            beginAtZero: true,
            ticks: {
                stepSize: 1,
                precision: 0
            }
        }
    }
}
    });
    </script>



                
                <!-- Rest of your code for displaying paginated products -->

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

<!-- nouisliderribute js -->
<script src="assets/libs/nouislider/nouislider.min.js"></script>
<script src="assets/libs/wnumb/wNumb.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/product-filter-range.init.js"></script>

<!-- live search -->
<script src="assets/js/live-search.js"></script>

</body>

</html>
