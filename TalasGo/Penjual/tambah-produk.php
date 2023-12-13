<?php 
    session_start();
    require "functions.php";

    // cek apakah tombol submit sudah diklik atau belum
    if(isset($_POST["submit"])) {

        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan');
                    document.location.href = 'tambah-produk.php';
                </script>
            ";
        }
    }
    ?>

<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Tambah Produk"]; ?> | Talas GO</title>

    <?php include 'layouts/head.php'; ?>


    <!-- select2 css -->
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/pages/ecommerce-shop.init.js"></script>
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
                $title = "Tambah Produk";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Produk</h4>
                                <p class="card-title-desc">Isikan Data Produk Tokomu!</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="nama_produk">Nama Produk</label>
                                                <input id="nama_produk" name="nama_produk" type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga">Harga</label>
                                                <input id="harga" name="harga" type="text" class="form-control" required>
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label for="manufacturerbrand">Alamat Toko</label>
                                                <input id="manufacturerbrand" class="form-control" name="lokasitoko" type="text" value="">
                                            </div> -->
                                            <div class="mb-3">
                                                <label for="deskripsi_produk">Deskripsi</label>
                                                <textarea id="deskripsi_produk" name="deskripsi_produk" class="form-control" rows="5" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="stok">Jumlah stok</label>
                                                <input id="stok" name="stok" type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kategori">Kategori</label>
                                                <input id="kategori" name="kategori" type="text" class="form-control" required>
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label for="productname">Jam Operasional</label>
                                                <input id="productname" name="jamoperasional" type="text" class="form-control">
                                            </div> -->
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Foto Produk</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="fallback">
                                                    <label for="gambar">Gambar: </label>
                                                    <input type="file" name="gambar" id="gambar" require>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        <a href="index.php"><button type="button" class="btn btn-secondary waves-effect waves-light">Batal</button></a>
                                    </div>

                                </form>

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

<!-- select 2 plugin -->
<script src="assets/libs/select2/js/select2.min.js"></script>

<!-- dropzone plugin -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/ecommerce-select2.init.js"></script>

</body>

</html>