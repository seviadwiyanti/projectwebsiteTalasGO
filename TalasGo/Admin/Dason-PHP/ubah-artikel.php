<?php 
    require "functionArtikel.php";

    // ambil data di URL
    $id = $_GET["id"];

    // query data mahasiswa berdasarkan id
    $artikel = query("SELECT * FROM tbl_artikel WHERE id = $id")[0];

    // cek apakah tombol submit sudah diklik atau belum
    if(isset($_POST["submit"])) {

        // cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'artikel.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah');
                    document.location.href = 'ubah-artikel.php';
                </script>
            ";
        }
    }
    ?>




<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Edit Artikel"]; ?> | Admin - TalasGO</title>

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
                $maintitle = "Artikel";
                $title = "Edit Artikel";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Isilah data artikel yang akan diedit!</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data" action="">
                                    <input type="hidden" name="id" value="<?= $artikel["id"]; ?>">
                                    <input type="hidden" name="gambarLama" value="<?= $artikel["gambar"]; ?>">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="judulartikel">Judul Artikel</label>
                                                <input id="judulartikel" name="judulartikel" type="text" class="form-control" required value="<?= $artikel["judulartikel"]; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggalpublish">Tanggal Publish</label>
                                                <input id="tanggalpublish" name="tanggalpublish" type="datetime-local" class="input-control" required value="<?= $artikel["tanggalpublish"]; ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="penulis">Penulis</label>
                                                <input id="penulis" name="penulis" type="text" class="form-control" required value="<?= $artikel["penulis"]; ?>">
                                            </div>
                                            <!-- gambar -->
                                            <div class="mb-3">
                                                <label for="gambar">Gambar: </label>
                                                <img src="assets/images/artikel/<?= $artikel["gambar"]; ?>" width="100" alt=""> <br>
                                                <input type="file" name="gambar" id="gambar" require>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <!-- <div class="mb-3">
                                                    <label for="isiartikel">Isi Artikel</label>
                                                    <textarea class="form-control" id="isiartikel" name="isiartikel" rows="5" required><?= $artikel["isiartikel"]; ?></textarea>
                                            </div> -->

                                            <div class="mb-3">
                                                <label for="isiartikel">Isi Artikel</label>
                                                <div id="editor-container">
                                                    <!-- WYSIWYG editor will be initialized here -->
                                                </div>
                                                <textarea class="form-control" id="isiartikel" name="isiartikel" type="text" rows="5"><?= htmlspecialchars_decode($artikel["isiartikel"]); ?></textarea>
                                            </div>

                                            <div class="mb-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">Edit</button>
                                            <a href="artikel.php"><button type="button" class="btn btn-secondary waves-effect waves-light">Batal</button></a> 
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <!-- <form method="POST" action="">
                            <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">Tambah</button>
                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Batal</button>
                            </div>
                        </form> -->
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

<!-- Load TinyMCE from CDN -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!-- wysiwyg -->
<script src="assets/js/init-wysiwyg.js"></script>

</body>

</html>