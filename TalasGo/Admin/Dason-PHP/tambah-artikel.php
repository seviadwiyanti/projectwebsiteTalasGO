<?php 
    session_start();
    require "functionArtikel.php";
    $db = mysqli_connect("localhost", "root", "", "talasgo");

    // cek apakah tombol submit sudah diklik atau belum
    if(isset($_POST["submit"])) { 

        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'artikel.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan');
                    document.location.href = 'tambah-artikel.php';
                </script>
            ";
        }
    }
    ?>




<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Tambah Artikel"]; ?> | Admin - TalasGO</title>

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
                $title = "Tambah Artikel";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Isilah data artikel yang akan dimasukkan!</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data" action="">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="judulartikel">Judul Artikel</label>
                                                <input id="judulartikel" name="judulartikel" type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggalpublish">Tanggal Publish</label>
                                                <input id="tanggalpublish" name="tanggalpublish" type="datetime-local" class="input-control" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="penulis">Penulis</label>
                                                <input id="penulis" name="penulis" type="text" class="form-control" required>
                                            </div>
                                            <!-- gambar -->
                                            <div class="mb-3">
                                                <label for="gambar">Gambar: </label>
                                                <input type="file" name="gambar" id="gambar" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <!-- <div class="mb-3">
                                                    <label for="isiartikel">Isi Artikel</label>
                                                    <textarea class="form-control" id="isiartikel" name="isiartikel" type="text" rows="5" required></textarea>
                                            </div>  -->

                                            <div class="mb-3">
                                                <label for="isiartikel">Isi Artikel</label>
                                                <div id="editor-container">
                                                    <!-- WYSIWYG editor will be initialized here -->
                                                </div>
                                                <textarea class="form-control" id="isiartikel" name="isiartikel" type="text" rows="5"></textarea>
                                               
                                            </div>

 
                                            <div class="mb-3 d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">Tambah</button>
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