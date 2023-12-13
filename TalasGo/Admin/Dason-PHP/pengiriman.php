<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Pengiriman"]; ?> | Admin - TalasGO</title>

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
                $maintitle = "Ecommerce";
                $title = "Data Pengiriman";
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
                                                <input type="text" class="form-control" placeholder="Cari...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-sm-end">
                                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class=""></i> Cetak</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                                <th style="width: 20px;" class="align-middle">
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                
                                                <th class="align-middle">ID </th>
                                                <th class="align-middle">Produk</th>
                                                <th class="align-middle">Nama Pembeli</th>
                                                <th class="align-middle">Alamat</th>
                                                <th class="align-middle">Ekspedisi</th>
                                                <th class="align-middle">Status Pengiriman</th>
                                                <th class="align-middle">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="customerlistcheck01">
                                                        <label class="form-check-label" for="customerlistcheck01"></label>
                                                    </div>
                                                </td>
                                                <td>AB011</td>
                                                <td>
                                                    <p class="mb-0">Sangkuriang Bogor</p>
                                                </td>

                                                <td> Salsabila Cantika</td>
                                                <td>  Jl. Sholeh Iskandar No.16, Sukadamai, Ciawi, Bogor, Jawa Barat</td>
                                                <td>JNT</td>
                                                <td>
                                                <span class="badge badge-pill badge-soft-success font-size-12">Terkirim</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="customerlistcheck02">
                                                        <label class="form-check-label" for="customerlistcheck02"></label>
                                                    </div>
                                                </td>
                                                <td>AB012</td>
                                                <td>
                                                    <p class="mb-0">Lapis Talas Bogor</p>
                                                </td>
                                                <td> Andre Maulana </td>
                                                <td>  Jl. Sholeh Iskandar No.16, Sukadamai, 
                                                Tanah Sereal, Kota Bogor, Jawa Barat 16164</td>
                                                <td>JNE</td>
                                                <td>
                                                <span class="badge badge-pill badge-soft-success font-size-12">Terkirim</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="customerlistcheck03">
                                                        <label class="form-check-label" for="customerlistcheck03"></label>
                                                    </div>
                                                </td>
                                                <td>AB013</td>
                                                <td>
                                                    <p class="mb-0">Keripik Talas</p>
                                                </td>
                                                <td> Pitaloka Indah </td>
                                                <td>  Jl. Sholeh Iskandar No.20, Sukadamai, 
                                                Tanah Sereal, Kota Bogor, Jawa Barat 16164</td>
                                                <td>TalasGo Express</td>
                                                <td>
                                                <span class="badge badge-pill badge-soft-success font-size-12">Terkirim</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="customerlistcheck04">
                                                        <label class="form-check-label" for="customerlistcheck04"></label>
                                                    </div>
                                                </td>
                                                <td>AB013</td>
                                                <td>
                                                    <p class="mb-0">Bibit Talas</p>
                                                </td>
                                                <td> Rima Aulia</td>
                                                <td>  Jl. Padjajaran No.16, Sukadamai, 
                                                Tanah Sereal, Kota Bogor, Jawa Barat 16164</td>
                                                <td>JNE</td>
                                                <td>
                                                <span class="badge badge-pill badge-soft-success font-size-12">Terkirim</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="customerlistcheck04">
                                                        <label class="form-check-label" for="customerlistcheck04"></label>
                                                    </div>
                                                </td>
                                                <td>AB014</td>
                                                    <td>
                                                        <p class="mb-0">Macaroon</p>
                                                    </td>
                                                    <td> Chandra Saputra</td>
                                                    <td>  Jl. Tajur No.16, Sukadamai, 
                                                    Tanah Sereal, Kota Bogor, Jawa Barat 16164</td>
                                                    <td>JNT</td>
                                                    <td>
                                                    <span class="badge badge-pill badge-soft-warning font-size-12">Sedang diperjalanan</span>
                                                    </td>
                                                    <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                                </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="customerlistcheck06">
                                                        <label class="form-check-label" for="customerlistcheck06"></label>
                                                    </div>
                                                </td>
                                                <td>AB014</td>
                                                <td>
                                                    <p class="mb-0">Lapis Bogor Sangkuriang</p>
                                                </td>
                                                <td> Ilham Ramadhan</td>
                                                <td>  Jl. Padjajaran No.16, Sukadamai, 
                                                Tanah Sereal, Kota Bogor, Jawa Barat 16164</td>
                                                <td>Sicepat</td>
                                                <td>
                                                <span class="badge badge-pill badge-soft-success font-size-12">Terkirim</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="customerlistcheck07">
                                                        <label class="form-check-label" for="customerlistcheck07"></label>
                                                    </div>
                                                </td>
                                                <td>AB015</td>
                                                <td>
                                                    <p class="mb-0">Talas Bogor</p>
                                                </td>
                                                <td> Shauqi Arthanabil</td>
                                                <td>  Jl. Padjajaran No.16, Sukadamai, 
                                                Tanah Sereal, Kota Bogor, Jawa Barat 16164</td>
                                                <td>JNE</td>
                                                <td>
                                                <span class="badge badge-pill badge-soft-success font-size-12">Terkirim</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="customerlistcheck08">
                                                        <label class="form-check-label" for="customerlistcheck08"></label>
                                                    </div>
                                                </td>
                                                <td>AB016</td>
                                                <td>
                                                    <p class="mb-0">Bibit Talas</p>
                                                </td>
                                                <td> Nabila Ghaida</td>
                                                <td>  Jl. Padjajaran No.16, Sukadamai, 
                                                Tanah Sereal, Kota Bogor, Jawa Barat 16164</td>
                                                <td>TalasGo Express</td>
                                                <td>
                                                <span class="badge badge-pill badge-soft-warning font-size-12">Sedang diperjalanan</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <ul class="pagination pagination-rounded justify-content-end mb-2">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <i class="mdi mdi-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </a>
                                    </li>
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


</body>

</html>