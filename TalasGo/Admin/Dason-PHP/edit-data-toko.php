<?php 
    require "functions.php";
    $db = mysqli_connect("localhost", "root", "", "talasgo");

    // ambil data di URL
    $id = $_GET["id"];

    // query data mahasiswa berdasarkan id
    $toko = query("SELECT * FROM tbl_pemetaan WHERE id = $id")[0];

    // cek apakah tombol submit sudah diklik atau belum
    if(isset($_POST["update"])) {

        // cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'data-toko.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah');
                    document.location.href = 'data-toko.php';
                </script>
            ";
        }
    }
    ?>


<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Edit Data Toko | Admin - TalasGO</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
    <!-- Add your additional styles here -->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 2px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

</head>

<?php include 'layouts/body.php'; ?>

<div id="layout-wrapper">
    <?php include 'layouts/menu.php'; ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- Start page title -->
                <?php
                $maintitle = "Data Toko";
                $title = "Edit Data Toko";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- End page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- Add your form here -->
                            
                            <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $toko["id"]; ?>">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="productname">Nama Toko</label>
                                                <input id="productname" name="productname" type="text" class="form-control" required value="<?= $toko['productname']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturername">Alamat</label>
                                                <input id="manufacturername" name="manufacturername" type="text" class="form-control" required value="<?= $toko['manufacturername']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturerbrand">Telepon</label>
                                                <input id="manufacturerbrand" name="manufacturerbrand" type="decimal" class="form-control" required value="<?= $toko['manufacturerbrand']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="longitude">Longitude</label>
                                                <input id="longitude" name="longitude" type="decimal" class="form-control" required value="<?= $toko['longitude']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="latitude">Latitude</label>
                                                <input id="latitude" name="latitude" type="decimal" class="form-control" required value="<?= $toko['latitude']?>">
                                            </div>
                                            

                                        </div> <!-- end col -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Link G-Maps</label>
                                                <input id="linkname" name="linkname" type="text" class="form-control" required value="<?= $toko['linkname']?>">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="productdesc">Jam Buka-Tutup</label>
                                                <input id="jamname" name="jamname" type="text" class="form-control" required value="<?= $toko['jamname']?>">
                                            </div>

                                            <div class="card">
                                            <label for="productdesc">Kota,Kecamatan</label>
                                            <input id="kotakecamatanname" name="kotakecamatanname" type="text" class="form-control" required value="<?= $toko['kotakecamatanname']?>">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div> <!-- container-fluid -->
                                </div>
                                

                                        </div>
                                        <!-- END layout-wrapper -->


                                        <?php include 'layouts/vendor-scripts.php'; ?>

                                        <!-- google maps api -->
                                        
                                    </div>

                                            <!-- ... (konten formulir yang lain) ... -->
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="update">Edit</button>
                                                <a href='data-toko.php'><button type='button' class='btn btn-secondary waves-effect waves-light'>Batal</button></a>
                                            </div>
                                </form>
                        </div>
                    </div>
                </div>
    </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content -->
</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Add your additional scripts here -->
<!-- select 2 plugin -->
<script src="assets/libs/select2/js/select2.min.js"></script>

<!-- dropzone plugin -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/ecommerce-select2.init.js"></script>

</body>
</html>
