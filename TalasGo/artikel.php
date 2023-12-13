<?php 
    session_start();
    require "functionArtikel.php";

    // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 4;
    $jumlahData = count(query("SELECT * FROM tbl_artikel"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

    // halaman = 2, awal data = 6
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

    $artikel = query("SELECT * FROM tbl_artikel ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman");

    // tombol cari diklik   
    if ( isset($_POST["cari"])) {
        $artikel = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="TalasGo - Budidaya Talas" />

    <!-- ========== Page Title ========== -->
    <title>TalasGo - Budidaya Talas</title>

    <!-- ========== Favicon Icon ========== -->
    <link
      rel="shortcut icon"
      href="assets/img/logo talas.png"
      type="image/x-icon"
    />

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/validnavs.css" rel="stylesheet" />
    <link href="assets/css/helper.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/unit-test.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
  </head>

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header>
      <!-- Start Navigation -->
      <nav
        class="navbar mobile-sidenav inc-shape navbar-common navbar-sticky navbar-default validnavs"
      >
        <!-- Start Top Search -->
        <div class="top-search">
          <div class="container-xl">
            <div class="input-group">
              <span class="input-group-addon"
                ><i class="fa fa-search"></i
              ></span>
              <input type="text" class="form-control" placeholder="Search" />
              <span class="input-group-addon close-search"
                ><i class="fa fa-times"></i
              ></span>
            </div>
          </div>
        </div>
        <!-- End Top Search -->

        <div
          class="container-full d-flex justify-content-between align-items-center"
        >
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php">
              <img
                src="assets/img/logo talasgo terbaru.png"
                class="logo"
                alt="Logo"
              />
            </a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <img src="assets/img/logo talasgo terbaru.png" alt="Logo" />
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-times"></i>
            </button>

            <ul
              class="nav navbar-nav navbar-right"
              data-in="fadeInDown"
              data-out="fadeOutUp"
            >
              <li class="dropdown">
                <a href="index.php">Beranda</a>
              </li>
              <li class="dropdown">
                <a href="artikel.php">Artikel</a>
              </li>
              <li class="dropdown">
                <a href="src/chat_view.php">Konsultasi</a>
              </li>
              <li class="dropdown">
                <a href="index-map.php">Pemetaan</a>
              </li>
              <li class="dropdown">
                <a href="shop.php">Produk</a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->

          <div class="attr-nav">
            <!-- Start Atribute Navigation -->
            <!-- End Atribute Navigation -->

            <!-- Start Side Menu -->
            <div class="side">
            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text"  placeholder="Enter Keyword" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
              <a href="#" class="close-side"><i class="icon_close"></i></a>
              <div class="widget">
                <div class="logo">
                  <img src="assets/img/logo-light.png" alt="Logo" />
                </div>
                <p>
                  Arrived compass prepare an on as. Reasonable particular on my
                  it in sympathize. Size now easy eat hand how. Unwilling he
                  departure elsewhere dejection at. Heart large seems may purse
                  means few blind.
                </p>
              </div>
              <div class="widget address">
                <div>
                  <ul>
                    <li>
                      <div class="content">
                        <p>Address</p>
                        <strong>California, TX 70240</strong>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <p>Email</p>
                        <strong>support@validtheme.com</strong>
                      </div>
                    </li>
                    <li>
                      <div class="content">
                        <p>Contact</p>
                        <strong>+44-20-7328-4499</strong>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="widget newsletter">
                <h4 class="title">Get Subscribed!</h4>
                <form action="#">
                  <div class="input-group stylish-input-group">
                    <input
                      type="email"
                      placeholder="Enter your e-mail"
                      class="form-control"
                      name="email"
                    />
                    <span class="input-group-addon">
                      <button type="submit">
                        <i class="arrow_right"></i>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
              <div class="widget social">
                <ul class="link">
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-behance"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End Side Menu -->
          </div>
          <!-- Main Nav -->
        </div>

        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->
      </nav>
      <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div
      class="breadcrumb-area text-center shadow dark bg-fixed text-light"
      style="background-image: url(assets/img/background-artikel.jpg)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <h1>Artikel</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li>
                  <a href="index.php"><i class="fas fa-home"></i> Beranda</a>
                </li>
                <li class="active">Artikel</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
   
    <div class="blog-area full-blog blog-standard default-padding-artikel">

      <div class="container"> 
        <div class="sidebar">
          <div class="sidebar-item search">
              <div class="sidebar-info">
                <form action="" method="post">
                  <input
                    type="text"
                    placeholder="Cari artikel yang ingin kamu baca..."
                    name="keyword"
                    autofocus
                    class="form-control"
                    autocomplete="off" 
                    id="keyword"
                  />
                  <button type="submit" name="cari">
                    <i class="fas fa-search"></i>
                  </button>
                </form>
              </div>
          </div>
        </div>
      </div>
    
      <div class="container">
        <div class="row">
          <div class="blog-content col-xl-10 offset-xl-1 col-md-12 mb-100">
              <div class="blog-item-box">

              <?php $i = 1; ?>
              <?php foreach($artikel as $row) : ?>
                <!-- Single Item -->
                <div class="item">
                  <div class="thumb">
                    <a href="detail-artikel.php?id=<?= $row["id"]; ?>"><img src="Admin/Dason-PHP/assets/images/artikel/<?= $row["gambar"];?>" alt="Thumb" /></a>
                    <div class="date">
                    <?php
                      // Tanggal dari database
                      $tanggal_database = $row["tanggalpublish"];

                      // Ubah format tanggal
                      $tanggal_timestamp = strtotime($tanggal_database);

                      // Pisahkan tanggal, bulan, dan tahun
                      $tanggal = date("d", $tanggal_timestamp);
                      $bulan = date("F", $tanggal_timestamp);
                      $tahun = date("Y", $tanggal_timestamp);

                      // Tampilkan tanggal, bulan, dan tahun secara terpisah
                      echo "<strong>" . $tanggal . "</strong> <span>" . $bulan . " " . $tahun . "</span>";
                      ?>
                    </div>
                  </div>
                  <div class="info">
                    <div class="meta">
                      <ul>
                        <li>
                          <a href="#"><i class="fas fa-user-circle"></i></i><?= $row["penulis"];?></a>
                        </li>
                        <li>
                         
                        </li>
                      </ul>
                    </div>
                    <h2 class="title">
                      <a href="detail-artikel.php?id=<?= $row["id"]; ?>"></i><?= $row["judulartikel"];?></a>
                    </h2>
                    <p>
                      <?php $isiArtikel = htmlspecialchars_decode($row["isiartikel"]); ?>   
                      <?php if (strlen($isiArtikel) > 220) {
                          $isiArtikel = substr($isiArtikel, 0, 220) . "..."; // Potong teks menjadi 200 karakter dan tambahkan elipsis (...)
                      } ?>
                    </i><?= $isiArtikel ?>
                    </p>
                    <a
                      class="btn mt-10 btn-md btn-theme animation"
                      href="detail-artikel.php?id=<?= $row["id"]; ?>"
                      >Selengkapnya</a
                    >
                  </div>
                </div>
                <!-- Single Item -->
              <?php $i++; ?>
              <?php endforeach; ?>

                
              </div>

              <!-- Pagination -->
              <div class="row">
                <div class="col-md-12 pagi-area text-center">
                  <nav aria-label="navigation">
                    <ul class="pagination">
                    <?php if($halamanAktif > 1) : ?>
                      <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>"><i class="fas fa-angle-left"></i></a>
                      </li>
                    <?php else : ?>
                      <li class="page-item disabled">
                        <a class="page-link" href=""><i class="fas fa-angle-left"></i></a>
                      </li>
                    <?php endif; ?>

                    <?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
                      <?php if ($i == $halamanAktif) : ?>
                        <li class="page-item active">
                          <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                        </li>
                      <?php else : ?>
                        <li class="page-item">
                          <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                        </li>
                      <?php endif; ?>
                    <?php endfor; ?>

                    <?php if($halamanAktif < $jumlahHalaman) : ?>
                      <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>"><i class="fas fa-angle-right"></i></a>
                      </li>
                    <?php else : ?>
                      <li class="page-item disabled">
                        <a class="page-link" href=""><i class="fas fa-angle-right"></i></a>
                      </li>
                    <?php endif; ?>
                      
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog -->

    <!-- Start Footer 
    ============================================= -->
    <footer
      class="bg-dark text-light"
      style="background-image: url(assets/img/shape/brush-down.png)"
    >
      <div class="container">
        <div class="f-items default-padding">
          <div class="row">
            <!-- Single Itme -->
            <div class="col-lg-5 col-md-6 item">
              <div class="footer-item about">
                <img class="logo" src="assets/img/logo grayscale.png" alt="Logo" />
                <p>
                Kami terus berinovasi memberikan layanan yang terbaik untuk petani talas melalui website ini. Semoga Kedepannya website ini bisa terus berkembang dan bermanfaat.
                </p>
              </div>
            </div>
            <!-- End Single Itme -->

            <div class="col-lg-1 col-md-6 item">
            </div>

            <!-- Single Itme -->
            <div class="col-lg-2 col-md-6 item">
              <div class="footer-item link">
                <h4 class="widget-title">Menu</h4>
                <ul>
                  <li>
                    <a href="index.php">Beranda</a>
                  </li>
                  <li>
                    <a href="artikel.php">Artikel</a>
                  </li>
                  <li>
                    <a href="src/chat_view.php">Konsultasi</a>
                  </li>
                  <li>
                    <a href="index-map.php">Pemetaan</a>
                  </li>
                  <li>
                    <a href="shop.php">Produk</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End Single Itme -->

            <!-- Single Itme -->
            
            <!-- End Single Itme -->

            <!-- Single Itme -->
            <div class="col-lg-4 col-md-6 item">
              <div class="footer-item contact">
                <h4 class="widget-title">Informasi Kontak</h4>
                <ul>
                  <li>
                    <div class="icon">
                      <i class="fas fa-home"></i>
                    </div>
                    <div class="content">
                      <strong>Alamat:</strong>
                      Jl. Malabar Ujung, Kost Pondok Cemara, Kota Bogor
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div class="content">
                      <strong>Email:</strong>
                      <a href="mailto:info@validtheme.com"
                        >gotalas26@gmail.com</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="content">
                      <strong>Nomor Telepon:</strong>
                      <a href="tel:2151234567">+6281213141516</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Single Itme -->
          </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
          <div class="row">
            <div class="col-lg-6">
              <p>
                &copy; Copyright 2023. Created by
                <span>Xtreme Squad</span>
              </p>
            </div>
            <div class="col-lg-6 text-end"></div>
          </div>
        </div>
        <!-- End Footer Bottom -->
      </div>
      <div class="shape-right-bottom">
        <img src="assets/img/shape/10.png" alt="Image Not Found" />
      </div>
      <div class="shape-left-bottom">
        <img src="assets/img/shape/11.png" alt="Image Not Found" />
      </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/jquery.scrolla.min.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/validnavs.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
