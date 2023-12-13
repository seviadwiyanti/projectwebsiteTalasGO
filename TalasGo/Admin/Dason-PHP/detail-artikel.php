<?php 
    session_start();
    require "functionArtikel.php";

    $id = $_GET['id'];
    $artikel = query("SELECT * FROM tbl_artikel WHERE id = $id");
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
                $maintitle = "TalasGo";
                $title = "Artikel";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
                
                <a href="artikel.php" class="btn btn-primary" style="margin:10px 0;">Kembali</a>

                <?php foreach($artikel as $row) : ?>
                    <center><h1><?= $row['judulartikel']; ?></h1>
                    <img src="assets/images/artikel/<?= $row["gambar"]; ?>" width="500" alt=""> </center>
                    <br>
                    <div align="justify">
                        <p>
                            <?= htmlspecialchars_decode($row["isiartikel"]); ?>
                        </p>
                    </div>
                <?php endforeach; ?>



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

</body>

</html>