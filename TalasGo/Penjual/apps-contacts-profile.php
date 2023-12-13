<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Profile"]; ?> | Dason - Admin & Dashboard Template</title>

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

                

                <div class="row">
                    <div class="profile-content">
                        <br> <br> <br>
                        <div class="row align-items-end">
                            <div class="col-sm">
                                <div class="d-flex align-items-end mt-3 mt-sm-0">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xxl me-3">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle d-block img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="font-size-16 mb-1">Melinda Rivera</h5>
                                            <p class="text-muted font-size-13 mb-4 pb-4">Full Stack Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-transparent shadow-none">
                            <div class="card-body">
                                <ul class="nav nav-tabs-custom card-header-tabs border-top mt-2" id="pills-tab" role="tablist">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="tab-content">
                            <div class="tab-pane active" id="overview" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Biodata</h5>
                                    </div>

                                    <div class="card-body">
                                        <div>
                                        <div class="card-body">

                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="productname">Nama</label>
                                                    <input id="productname" name="namauser" type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="manufacturername">Nomor Telepon</label>
                                                    <input id="manufacturername" name="nomoruser" type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="manufacturername">Email</label>
                                                    <input id="manufacturername" name="emailuser" type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="manufacturername">Alamat</label>
                                                    <input id="manufacturername" name="alamat" type="text" class="form-control">
                                                </div>
                                        <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" name="tambah-data" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Batal</button>
                                    </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end tab pane -->

                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
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
<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/pages/profile.init.js"></script>

</body>

</html>