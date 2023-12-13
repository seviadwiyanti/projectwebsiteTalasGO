<?php


require "functionuser.php";
session_start();

// pagination
// konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM users"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

// halaman = 2, awal data = 6
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
$data_pengguna = query("SELECT * FROM users ORDER BY id_users DESC LIMIT $awalData, $jumlahDataPerHalaman");

if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit();
}
?>

<?php

if (isset($_SESSION['role']) && $_SESSION['role'] !== "admin") {
    header("Location: ../../index.php");
    exit();
}
?>
<?php 

// include_once 'auth.php';
include_once "layouts/config.php";

// Fetch data from tb_pemetaan table
$query = "SELECT * FROM users ORDER BY id_users DESC LIMIT $awalData, $jumlahDataPerHalaman";
$result = mysqli_query($config, $query);

// Check if there are rows in the result
if(mysqli_num_rows($result) > 0){
    $data_pengguna = mysqli_fetch_all($result, MYSQLI_ASSOC);
}else{
    $data_pengguna = []; // Set empty array if no rows are found
}

// Handle form submission
if(isset($_POST['submit'])){
    // Your existing code for form submission
    // ...
}

?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Pengguna"]; ?> | Admin - TalasGO</title>

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
                $maintitle = "Data";
                $title = "Data Pengguna";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="search-box me-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" name="keyword" autofocus class="form-control" placeholder="Cari..." autocomplete="off" id="keyword">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-sm-end">
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <!-- tabel -->
                                <div class="table-responsive" id="container-pengguna">
                                    <table class="table align-middle table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php $i = 1; ?>
                                        <?php foreach($data_pengguna as $row): ?>
                                            <tr>
                                                <td><?= $i + $awalData ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['username']; ?></td>
                                                <td><p class="mb-0"><?= $row['email']; ?></p></td>
                                                <td><?= $row['role']; ?></td>
                                                <td><a href="hapus-pengguna.php?id=<?= $row["id_users"]; ?>" class="btn btn-danger" onclick="return confirm ('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a></td>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                                <ul class="pagination pagination-rounded justify-content-end mb-2">
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

<!-- live search -->
<script src="assets/js/live-search-pengguna.js"></script>

</body>

</html>