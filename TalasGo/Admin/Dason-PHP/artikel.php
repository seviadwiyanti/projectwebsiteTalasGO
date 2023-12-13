<?php 
    session_start();
    require "functionArtikel.php";

    // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 3;
    $jumlahData = count(query("SELECT * FROM tbl_artikel"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

    // halaman = 2, awal data = 6
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

    $artikel = query("SELECT * FROM tbl_artikel ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman");

    // tombol cari diklik   
    // if ( isset($_POST["cari"])) {
    //     $artikel = cari($_POST["keyword"]);
    // }
?>

<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Artikel"]; ?> | Admin - TalasGO</title>

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
                $maintitle = "Artikel";
                $title = "Data Artikel";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2 px-3">
                                    <div class="col-sm-4 pl-0">
                                        <div class="search-box mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <form action="" method="post">
                                                    <input type="text" name="keyword" class="form-control" placeholder="Cari..." autocomplete="off" id="keyword">
                                                    <i class="bx bx-search-alt search-icon"></i>
                                                    <!-- <button type="submit" name="cari" class="btn btn-primary">Cari</button> -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 pr-0">
                                        <div class="text-sm-end">
                                            <a href="tambah-artikel.php"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2"><i class="mdi mdi-plus me-1"></i>Artikel Baru</button></a>
                                        </div>
                                    </div> <!-- end col-->
                                </div>
                        
                        
                                <!-- tabel -->
                                <div class="row" id="container-artikel">
                                    <?php $i = 1; ?>
                                    <?php foreach($artikel as $row) : ?>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="product-img position-relative">
                                                        <img src="assets/images/artikel/<?= $row["gambar"]; ?>" alt="Foto Artikel" class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <div class="align-items-end mt-4">
                                                        <center><div>
                                                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark"><?= $row["judulartikel"];?></a></h5>
                                                            <h5 class="my-0"><span class="text-muted me-2"><?= $row["penulis"];?></span></h5><p><?= $row["tanggalpublish"];?></p>
                                                        </div></center>
                                                    </div>
                                                    <center><div>
                                                        <a href="detail-artikel.php?id=<?= $row["id"]; ?>" class="btn btn-info">Detail Artikel</a>
                                                        <a href="ubah-artikel.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Edit</a>
                                                        <a href="hapus-artikel.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm ('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
                                                    </div></center>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>

                                </div>

                                <!-- paginations -->
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
<script src="assets/js/live-search-artikel.js"></script>

</body>

</html>