<?php

    $pesan = "Selamat datang, Anda adalah penjual baru. Silakan  <a href='tambah-produk.php'>tambahkan produk</a> untuk mulai berjualan.";
    
include 'layouts/head-main.php';
?>

<head>
    <title>Admin - TalasGO</title>
    <?php include 'layouts/head.php'; ?>
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">
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
                $title = "Data Produk";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
                <!-- ... (Kode HTML lainnya) ... -->
                <?php if (isset($pesan)) : ?>
                    <div class="alert alert-info">
                        <?= $pesan; ?>
                    </div>
                <?php else : ?>
                    <!-- Tampilkan halaman Penjual dengan data produk -->
                    <!-- ... (Kode HTML untuk menampilkan data produk) ... -->
                <?php endif; ?>
                <!-- ... (Kode HTML lainnya) .  .. -->
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
