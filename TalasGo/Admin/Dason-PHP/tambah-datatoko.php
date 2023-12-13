<?php 
    session_start();
    include_once "layouts/config.php";

    if(isset($_POST['tambah'])){
        // Pastikan variabel koneksi database ($config) telah didefinisikan
        if(isset($config)){
            $nama_toko = $_POST['productname'];
            $alamat = $_POST['manufacturername'];
            $telepon = $_POST['manufacturerbrand'];
            $longitude = $_POST['longitude'];
            $latitude = $_POST['latitude'];
            $link_gmaps = $_POST['linkname'];
            $jam_buka_tutup = $_POST['jamname'];
            $kota_kecamatan = $_POST['kotakecamatanname'];

            // Sesuaikan juga nama kolom sesuai dengan struktur tabel Anda
            $insert = mysqli_query($config, "INSERT INTO tbl_pemetaan (productname, manufacturername, manufacturerbrand, longitude, latitude, linkname, jamname, kotakecamatanname) VALUES ('$nama_toko', '$alamat', '$telepon', '$longitude', '$latitude', '$link_gmaps', '$jam_buka_tutup', '$kota_kecamatan')");
            
            if ($insert) {
                $_SESSION['message'] = "Data berhasil ditambahkan";
                echo '<script>alert("Data berhasil ditambahkan"); window.location.href = "data-toko.php";</script>';
            } else {
                echo "Gagal menambahkan data toko: " . mysqli_error($config);
            }
    }
}
?>

<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Tambah Lokasi"]; ?> | Admin - TalasGO</title>

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
                $maintitle = "Lokasi";
                $title = "Tambah Data Toko";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Toko Daerah Bogor</h4>
                                <p class="card-title-desc">Isikan data toko terbaru</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="productname">Nama Toko</label>
                                                <input  name="productname" type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturername">Alamat</label>
                                                <input  name="manufacturername" type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturerbrand">Telepon</label>
                                                <input  name="manufacturerbrand" type="decimal" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="longitude">Longitude</label>
                                                <input  name="longitude" type="decimal" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="latitude">Latitude</label>
                                                <input  name="latitude" type="decimal" class="form-control" required>
                                            </div>
                                            

                                        </div> <!-- end col -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Link G-Maps</label>
                                                <input  name="linkname" type="text" class="form-control" required>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="productdesc">Jam Buka-Tutup</label>
                                                <input  name="jamname" type="text" class="form-control" required>
                                            </div>

                                            <div class="card">
                                            <label for="productdesc">Kota,Kecamatan</label>
                                            <input  name="kotakecamatanname" type="text" class="form-control" required>
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

                                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                            <!-- ... (konten formulir yang lain) ... -->
                                            <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="tambah">Tambah</button>
                                        <a href="data-toko.php"><button type="button" class="btn btn-secondary waves-effect waves-light">Batal</button></a>
                                    </div>
                                            </form>
                                </form>

                            </div>
                        </div>

            </div> <!-- container-fluid -->
        </div>
       
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>


<!-- select 2 plugin -->
<script src="assets/libs/select2/js/select2.min.js"></script>

<!-- dropzone plugin -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/ecommerce-select2.init.js"></script>

</body>

</html>
