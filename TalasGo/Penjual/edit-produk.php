<?php 
    session_start();
    require "functions.php";

    // ambil data di URL
    $id_produk = $_GET["id_produk"];

    // query data mahasiswa berdasarkan id_produk
    $produk = query("SELECT * FROM tbl_produk WHERE id_produk = $id_produk")[0];

    // cek apakah tombol submit sudah diklik atau belum
    if(isset($_POST["submit"])) {

        // cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah');
                    document.location.href = 'edit-produk.php';
                </script>
            ";
        }
    }
    ?>

<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Edit Produk"]; ?> | Talas GO</title>

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
                $title = "Edit Produk";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Produk</h4>
                                <p class="card-title-desc">Isikan Data Produk Tokomu!</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_produk" value="<?= $produk["id_produk"]; ?>">
                                    <input type="hidden" name="gambarLama" value="<?= $produk["gambar"]; ?>">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="nama_produk">Nama Produk</label>
                                                <input id="nama_produk" name="nama_produk" type="text" required value="<?= $produk["nama_produk"]; ?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga">Harga</label>
                                                <input id="harga" name="harga" type="text" required value="<?= $produk["harga"]; ?>" class="form-control">
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label for="manufacturerbrand">Alamat Toko</label>
                                                <input id="manufacturerbrand" class="form-control" name="lokasitoko" type="text" value="">
                                            </div> -->
                                            <div class="mb-3">
                                                <label for="deskripsi_produk">Deskripsi</label>
                                                <textarea id="deskripsi_produk" name="deskripsi_produk" required class="form-control" rows="5"><?= $produk["deskripsi_produk"]; ?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="stok">Jumlah stok</label>
                                                <input id="stok" name="stok" type="text" required value="<?= $produk["stok"]; ?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kategori">Kategori</label>
                                                <input id="kategori" name="kategori" type="text" required value="<?= $produk["kategori"]; ?>" class="form-control">
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
                                                    <img src="assets/images/produk/<?= $produk["gambar"]; ?>" width="100" alt=""> <br>
                                                    <input type="file" name="gambar" id="gambar" require>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Edit</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Batal</button>
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