
<?php 

include_once 'auth.php';
include_once "layouts/config.php";

function query($query) {
    $db = mysqli_connect("localhost", "root", "", "talasgo");
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// pagination
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM tbl_pemetaan"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

// halaman = 2, awal data = 6
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

// Fetch data from tb_pemetaan table
$query = "SELECT * FROM tbl_pemetaan ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman";
$result = mysqli_query($config, $query);

// Check if there are rows in the result
if(mysqli_num_rows($result) > 0){
    $data_toko = mysqli_fetch_all($result, MYSQLI_ASSOC);
}else{
    $data_toko = []; // Set empty array if no rows are found
}

// Handle form submission
if(isset($_POST['submit'])){
    // Your existing code for form submission
    // ...
}

?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Lokasi"]; ?> | Admin - TalasGO</title>

    <?php include 'layouts/head.php'; ?>
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-style.php'; ?>
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
                $title = "Data Toko";
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
                                            <a href="tambah-datatoko.php"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2"><i class="mdi mdi-plus me-1"></i>Toko baru</button></a>
                                        </div>
                                    </div> <!-- end col-->
                                </div>

                                <!-- table -->
                                <div id="container-toko">
                                    <table class="table"style="margin-bottom: 0;" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Toko</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Longitude</th>
                                                <th>Latitude</th>
                                                <th>Link G-Maps</th>
                                                <th>Jam Buka-Tutup</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach($data_toko as $row): ?>
                                                <tr>
                                                    <td><?= $i + $awalData ?></td>
                                                    <td><?= $row['productname']; ?></td>
                                                    <td><?= $row['manufacturername']; ?></td>
                                                    <td><?= $row['manufacturerbrand']; ?></td>
                                                    <td><?= $row['longitude']; ?></td>
                                                    <td><?= $row['latitude']; ?></td>
                                                    <td><a href="<?= $row['linkname']; ?>" target="_blank">Open in Google Maps</a></td>
                                                    <td><?= $row['jamname']; ?></td>
                                                    <td>
                                                        <a href="edit-data-toko.php?id=<?= $row['id']; ?>"><button type='button' class='btn btn-warning'>Edit</button></a>
                                                        <a href="hapus-data-toko.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm ('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php $i++; ?>
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

            </div> 
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

            



<?php include 'layouts/right-sidebar.php'; ?>
<?php include 'layouts/vendor-scripts.php'; ?>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="search.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<!-- live search -->
<script src="assets/js/live-search-toko.js"></script>

</body>

</html>