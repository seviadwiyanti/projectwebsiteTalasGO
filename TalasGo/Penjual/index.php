
<?php
session_start();

if (!isset($_SESSION['auth'])) {
    header("Location: ../Admin/Dason-PHP/login.php");
    exit();
}
?>

<?php

if (isset($_SESSION['role']) && $_SESSION['role'] !== "Penjual") {
    header("Location: ../index.php");
    exit();
}
?>

<?php 
    require "functions.php";

    // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 3;
    $userId = $_SESSION["user"];
    $jumlahData = count(query("SELECT * FROM tbl_produk WHERE id_users = $userId"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

    if ($jumlahData === 0) {
        include 'penjual-baru.php';
        exit();
    }

    // Pastikan $halamanAktif tidak melebihi jumlah halaman yang ada
    if ($halamanAktif > $jumlahHalaman) {
        $halamanAktif = $jumlahHalaman;
    }

    // halaman = 2, awal data = 6
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    $userId = $_SESSION["user"];
$jumlahData = count(query("SELECT * FROM tbl_produk WHERE id_users = $userId"));
$produk = query("SELECT * 
    FROM tbl_produk
    WHERE id_users = $userId
    ORDER BY id_produk DESC
LIMIT $awalData, $jumlahDataPerHalaman");


?>

<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Penjual - TalasGO</title>

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
                $maintitle = "Produk";
                $title = "Data Produk";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


               
                    </div>
                    <div>
    <h3><a href="../index.php">Ke Halaman User</a></h3>
</div>
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <form action="" method="post">
                                        <input type="text" name="keyword" class="form-control" placeholder="Cari..." autocomplete="off" id="keyword">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a href="tambah-produk.php"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i>Tambah Produk</button></a>
                            </div>
                        </div><!-- end col-->
                    </div>
                                
                        <?php if (count($produk) > 0) : ?>
                        <div class="row" id="container-produk">
                            <?php $i = 1; ?>
                            <?php foreach($produk as $row) : ?>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="product-img position-relative">
                                                <img src="assets/images/produk/<?= $row["gambar"]; ?>" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="align-items-end mt-4">
                                                <center><div>
                                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark"><?= $row["nama_produk"] ?></a></h5>
                                                    <h5 class="my-0"><span class="text-muted me-2"><?= $row["harga"] ?></span></h5><p></p>
                                                </div></center>
                                            </div>
                                            <center><div>
                                                <a href="detail-produk.php?id_produk=<?= $row["id_produk"]; ?>" class="btn btn-info">Detail</a>
                                                <a href="edit-produk.php?id_produk=<?= $row["id_produk"]; ?>" class="btn btn-primary">Edit</a>
                                                <a href="hapus-produk.php?id_produk=<?= $row["id_produk"]; ?>" class="btn btn-danger" onclick="return confirm ('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
                                            </div></center>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </div>
                        <?php else : ?>
                            <div class="alert alert-info" role="alert">
                                <strong>Info:</strong> Anda belum memiliki produk. <a href="tambah-produk.php" class="alert-link">Tambah Produk</a>.
                            </div>
                        <?php endif; ?>
                        <!-- end row -->

                        <div class="card">
                            <div class="d-flex flex-wrap gap-2">
                                <div class="col-sm-8">
                                    <form method="POST" enctype="multipart/form-data" action="importdata.php">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Import Data Produk dari Excel</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="fallback mb-3">
                                                <label for="excel">Excel: </label>
                                                <input type="file" name="excel" required>
                                            </div>
                                            <button type="submit" name="import" class="btn btn-success waves-effect waves-light">Import</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-sm-3">
                                    <form action="exportdata.php" method="post">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Export Data Produk ke Excel</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="fallback mb-3">
                                                <button type="submit" name="export" class="btn btn-warning waves-effect waves-light">Export</button>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                                    <?php if($halamanAktif > 1) : ?>
                                        <li class="page-item">
                                            <a href="?halaman=<?= $halamanAktif - 1; ?>" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>

                                    <?php else : ?>
                                        <li class="page-item disabled">
                                            <a href="" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    

                                    <?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
                                        <?php if ($i == $halamanAktif) : ?>
                                            <li class="page-item active">
                                                <a href="?halaman=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                                            </li>
                                        <?php else : ?>
                                            <li class="page-item">
                                                <a href="?halaman=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <?php if($halamanAktif < $jumlahHalaman) : ?>
                                        <li class="page-item">
                                            <a href="?halaman=<?= $halamanAktif + 1; ?>" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>

                                    <?php else : ?>
                                        <li class="page-item disabled">
                                            <a href="" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->




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
