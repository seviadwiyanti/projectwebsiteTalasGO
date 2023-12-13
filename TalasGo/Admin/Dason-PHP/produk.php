<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: ../Admin/Dason-PHP/login.php");
    exit();
}

require "functionProduk.php";

// Get total number of products
$totalProducts = count(query("SELECT * FROM tbl_produk"));

// Pagination configuration
$jumlahDataPerHalaman = 5;
$jumlahHalaman = ceil($totalProducts / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// Get paginated products
// Menggabungkan tabel tbl_produk dengan tabel users berdasarkan id_users
$query = "SELECT tbl_produk.*, users.name
        FROM tbl_produk
        INNER JOIN users ON tbl_produk.id_users = users.id_users
        ORDER BY tbl_produk.id_produk DESC
        LIMIT $awalData, $jumlahDataPerHalaman";

// Eksekusi query
$produk = query($query);

?>

<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Admin - TalasGO</title>

    <?php include 'layouts/head.php'; ?>

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
                $maintitle = "Beranda";
                $title = "Data Produk";
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
                                                <form action="" method="post">
                                                    <input type="text" name="keyword" autofocus class="form-control" placeholder="Cari..." autocomplete="off" id="keyword">
                                                    <i class="bx bx-search-alt search-icon"></i>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-sm-end">
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive" id="container-produk">
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                                <th style="width: 20px;" class="align-middle">
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th class="align-middle">ID_Users</th>
                                                <th class="align-middle">Nama Penjual</th>
                                                <th class="align-middle">ID_Produk</th>
                                                <th class="align-middle">Nama Produk</th>
                                                <th class="align-middle">Harga</th>
                                                <th class="align-middle">Deskripsi Produk</th>
                                                <th class="align-middle">Stok</th>
                                                <th class="align-middle">Kategori</th>
                                                <th class="align-middle">Gambar</th>
                                                <th class="align-middle">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($produk as $row) : ?>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox" id="orderidcheck<?= $row["id_produk"]; ?>">
                                                            <label class="form-check-label" for="orderidcheck<?= $row["id_produk"]; ?>"></label>
                                                        </div>
                                                    </td>
                                                    <td><?= $row["id_users"]; ?></td>
                                                    <td><?= $row["name"]; ?></td>
                                                    <td><?= $row["id_produk"]; ?></td>
                                                    <td><?= $row["nama_produk"]; ?></td>
                                                    <td><?= $row["harga"]; ?></td>
                                                    <td><?= $row["deskripsi_produk"]; ?></td>
                                                    <td><?= $row["stok"]; ?></td>
                                                    <td><?= $row["kategori"]; ?></td>
                                                    <td><?= $row["gambar"]; ?></td>
                                                    <td>
                                                        <div>
                                                            <a href="hapus-data-produk.php?id_produk=<?= $row["id_produk"]; ?>" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                                <ul class="pagination pagination-rounded justify-content-end mb-2 mt-2">
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
<script src="assets/js/live-search-produk.js"></script>

</body>

</html>
