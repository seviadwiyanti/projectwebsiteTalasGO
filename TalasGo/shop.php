<?php 
    session_start();
    require "functionProduk.php";

    if (!isset($_SESSION['auth'])) {
      // Redirect ke halaman login
      header('Location: Admin/Dason-PHP/login.php');
      exit();
  }

    // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 8;
    $jumlahData = count(query("SELECT * FROM tbl_produk"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

    // halaman = 2, awal data = 6
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;


    $produk = query("SELECT * FROM tbl_produk ORDER BY id_produk DESC LIMIT $awalData, $jumlahDataPerHalaman");

    // tombol cari diklik 
    if ( isset($_POST["cari"])) {
        $produk = cari($_POST["keyword"]);
    }
?>

<?php
$db = mysqli_connect("localhost", "root", "", "talasgo");
$id_user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if ($id_user !== null) {
  // Using prepared statement to prevent SQL injection
  $stmt = $db->prepare("SELECT * FROM users WHERE id_users = ?");
  $stmt->bind_param("i", $id_user);
  $stmt->execute();
  $result = $stmt->get_result();
  
  // Fetch user data
  $user = $result->fetch_assoc();
  $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Agrul - Organic Farm Agriculture Template"
    />

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
    <link href="assets/css/shop.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/unit-test.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
    
  </head>

  <body>

  <input type="hidden" id="isLoggedIn" value="<?php echo isset($_SESSION['auth']) ? 'true' : 'false'; ?>">

  <!-- Skrip JavaScript -->
  <script>
    var isLoggedIn = document.getElementById('isLoggedIn').value === 'true';

    function checkLogin() {
      if (!isLoggedIn) {
        alert('Anda harus login terlebih dahulu untuk mengakses Konsultasi atau Pemetaan.');
        // Redirect ke halaman login jika diperlukan
        window.location.href = 'login.php';
      }
    }
  </script>
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
            <a class="navbar-brand" href="index.html">
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
            <!-- <div class="button">
              <ul>
                <li>
                  <a
                    class="btn btn-theme btn-md radius animation narrow-button"
                    href="login.php"
                    >Masuk</a
                  >
                </li>
                <li></li>
                <li>
                  <a
                    class="btn btn-theme secondary btn-md radius animation narrow-button"
                    href="register.php"
                    >Daftar</a
                  >
                </li>
              </ul>
            </div> -->
            
            <?php
            if (!isset($_SESSION['user'])) {
              echo '<a href="#">LOGIN</a>';
            }else{
              echo ' <nav class="navbar">
              <div class="user-data">
                  <div class="user-img">
                      <img src="img/user-img.png" alt="user image">
                  </div>
                  <div class="user-info">
                      <h3 class="username">'. $user['username'] .'
                      </h3>
                      <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout Akun</a>
                  </div>
              </div>
              </nav>';
            }
            ?>
           

            <!-- End Atribute Navigation -->


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
      class="breadcrumb-area shadow dark bg-cover text-center text-light"
      style="background-image: url(assets/img/Bg\ Shop.png)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1>Produk</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#"><i class="fas fa-home"></i> Beranda</a>
              </li>
              <li class="active">Produk</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Shop 
    ============================================= -->
    <div class="validtheme-shop-area default-padding-artikel mb-80">
      <div class="container"> 
          <div class="sidebar">
            <div class="sidebar-item search">
                <div class="sidebar-info">
                  <form action="" method="post">
                    <input
                      type="text"
                      placeholder="Cari produk di sini..."
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
        <div class="shop-listing-contentes">
          <div class="row item-flex center">
            <div class="col-lg-7"></div>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <!-- Start Tab Content -->
            <div
              class="tab-content tab-content-info text-center"
              id="shop-tabContent"
            >
              <!-- Strt Product Grid Vies -->
              <div
                class="tab-pane fade show active"
                id="grid-tab"
                role="tabpanel"
                aria-labelledby="grid-tab-control"
              >
                <ul class="vt-products columns-4">
                  
                  <!-- select produknya nanti dari sini -->
                  <?php $i = 1; ?>
                  <?php foreach($produk as $row) : ?>
                    <!-- Single product -->
                    <li class="product">
                      <div class="product-contents">
                        <div class="product-image">
                          <a href="detail-produk.php?id=<?= $row["id_produk"]; ?>">
                            <img
                              src="Penjual/assets/images/produk/<?= $row["gambar"]; ?>"
                              alt="Product"
                            />
                          </a>
                          
                        </div>
                        <div class="product-caption">
                          <div class="product-tags">
                          </div>
                          <h4 class="product-title">
                            <a href="detail-produk.php?id=<?= $row["id_produk"]; ?>"><?= $row["nama_produk"]; ?></a>
                          </h4>
                          <div class="review-count">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>8 Review</span>
                          </div>
                          <div class="price">
                            <span><?= $row["harga"]; ?></span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- Single product -->
                  <?php $i++; ?>
                  <?php endforeach; ?>


                </ul>
              </div>
              <!-- End Product List Vies -->
            </div>
            <!-- End Tab Content -->

            <!-- Pagination -->
            <nav class="woocommerce-pagination">
              <ul class="page-numbers">
              <?php if($halamanAktif > 1) : ?>
                <li>
                  <a class="previous page-numbers" href="?halaman=<?= $halamanAktif - 1; ?>">
                    <i class="fas fa-angle-left"></i>
                  </a>
                </li>

              <?php else : ?>
                <li class="disabled">
                  <a class="previous page-numbers" href="" disabled>
                      <i class="fas fa-angle-left"></i>
                  </a>
                </li>
              <?php endif; ?>

              <?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <?php if ($i == $halamanAktif) : ?>
                  <li>
                    <span aria-current="page" class="page-numbers current"><?= $i; ?></span>
                  </li>
                <?php else : ?>
                <li>
                  <a class="page-numbers" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                </li>
                <?php endif; ?>
              <?php endfor; ?>

              <?php if($halamanAktif < $jumlahHalaman) : ?>
                <li>
                  <a class="next page-numbers" href="?halaman=<?= $halamanAktif + 1; ?>">
                    <i class="fas fa-angle-right"></i>
                  </a>
                </li>
              <?php else : ?>
                <li class="disabled">
                  <a class="next page-numbers" href="" disabled>
                    <i class="fas fa-angle-right"></i>
                  </a>
                </li>

              <?php endif; ?>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </div>
    <!-- End Shop -->

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