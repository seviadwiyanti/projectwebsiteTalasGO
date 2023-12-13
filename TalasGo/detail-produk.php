<?php 
    session_start();
    require "functionProduk.php";

    $id = $_GET['id'];
    $produk = query("SELECT tbl_produk.*, users.*
                FROM tbl_produk
                INNER JOIN users ON tbl_produk.id_users = users.id_users
                WHERE id_produk = $id");
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
            

            <!-- End Atribute Navigation -->

            <!-- Start Side Menu -->
            <div class="side">
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
      class="breadcrumb-area shadow dark bg-cover text-center text-light"
      style="background-image: url(assets/img/Bg\ Produk\ Buah\ Talas.png)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            
          <?php foreach($produk as $row) {
            # code...
          } ?>
            <h1><?= $row["nama_produk"]; ?></h1>
            <ul class="breadcrumb">
              <li>
                <a href="index.php"><i class="fas fa-home"></i>Beranda</a>
              </li>
              <li>
                <a href="shop.php"></i>Produk</a>
              </li>
              <li class="active"><?= $row["nama_produk"]; ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Shop 
    ============================================= -->
    <div class="validtheme-shop-single-area default-padding">
      <div class="container">
        <div class="product-details">
          <div class="row">
            <div class="col-lg-6">
              <div class="product-thumb">
                <div
                  id="timeline-carousel"
                  class="carousel slide"
                  data-bs-ride="carousel"
                >
                  <div class="carousel-inner item-box">
                    <div class="carousel-item active product-item">
                      <a
                        href="Penjual/assets/images/produk/<?= $row["gambar"]; ?>"
                        class="item popup-gallery"
                      >
                        <img
                          src="Penjual/assets/images/produk/<?= $row["gambar"]; ?>"
                          alt="<?= $row["nama_produk"]; ?>"
                        />
                      </a>
                    </div>
                  </div>

                  <!-- Carousel Indicators -->
                  <div class="carousel-indicators">
                    <div class="product-gallery-carousel swiper">
                      <!-- Additional required wrapper -->
                     <!----> <div class="swiper-wrapper">
                       <!-- <div class="swiper-slide">
                          <div
                            class="item active"
                            data-bs-target="#timeline-carousel"
                            data-bs-slide-to="0"
                            aria-current="true"
                          >
                            <img
                              src="assets/img/products/Talas Bogor.png"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div
                            class="item"
                            data-bs-target="#timeline-carousel"
                            data-bs-slide-to="1"
                          >
                            <img
                              src="assets/img/products/Sangkuriang.png"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div
                            class="item"
                            data-bs-target="#timeline-carousel"
                            data-bs-slide-to="2"
                          >
                            <img
                              src="assets/img/products/Lapis Bunder.png"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div
                            class="item"
                            data-bs-target="#timeline-carousel"
                            data-bs-slide-to="3"
                          >
                            <img
                              src="assets/img/products/Benih Talas.png"
                              alt=""
                            />
                          </div>
                        </div>-->
                      </div>
                    </div>
                  </div>

                  <!-- End Carousel Content -->
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="single-product-contents">
                <div class="summary-top-box">
                  <?= $row["name"]; ?>
                  <!-- <div class="review-count">
                    <span><?= $row["name"]; ?></span>
                  </div> -->
                </div>
                <h2 class="product-title"><?= $row["nama_produk"]; ?></h2>
                <div class="price">
                  <span><?= $row["harga"]; ?></span>
                </div>
                <div class="product-stock validthemes-in-stock">
                  <span>Tersedia</span>
                </div>
                <p><?= $row["deskripsi_produk"]; ?>
                </p>
                <div class="product-purchase-list">
                  <input
                    type="number"
                    id="quantity"
                    step="1"
                    size="5"
                    name="quantity"
                    min="0"
                    placeholder="0"
                  />
                  <a href="" id="orderButton" class="btn secondary btn-theme btn-sm animation">
                    <i class="fas fa-shopping-cart"></i>
                    Order Via Whatsapp
                  </a>
                  <!-- <div class="shop-action">
                  </div>
                   -->
                </div>
                <div class="product-meta">
                  <span class="posted-in">
                    <strong>Kategori:</strong>
                    <a href="#"><?= $row["kategori"]; ?></a> 
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Bottom Info  -->
        <div class="single-product-bottom-info">
          <div class="row">
            <div class="col-lg-12">
              <!-- Tab Nav -->
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button
                  class="nav-link active"
                  id="description-tab-control"
                  data-bs-toggle="tab"
                  data-bs-target="#description-tab"
                  type="button"
                  role="tab"
                  aria-controls="description-tab"
                  aria-selected="true"
                >
                  Deskripsi
                </button>

                <button
                  class="nav-link"
                  id="information-tab-control"
                  data-bs-toggle="tab"
                  data-bs-target="#information-tab"
                  type="button"
                  role="tab"
                  aria-controls="information-tab"
                  aria-selected="false"
                >
                  Informasi
                </button>

                <button
                  class="nav-link"
                  id="review-tab-control"
                  data-bs-toggle="tab"
                  data-bs-target="#review-tab"
                  type="button"
                  role="tab"
                  aria-controls="review-tab"
                  aria-selected="false"
                >
                  Ulasan
                </button>
              </div>
              <!-- End Tab Nav -->
              <!-- Start Tab Content -->
              <div class="tab-content tab-content-info" id="myTabContent">
                <!-- Tab Single -->
                <div
                  class="tab-pane fade show active"
                  id="description-tab"
                  role="tabpanel"
                  aria-labelledby="description-tab-control"
                >
                  <p><?= $row["deskripsi_produk"]; ?>
                  </p>
                </div>
                <!-- End Single -->

                <!-- Tab Single -->
                <div
                  class="tab-pane fade"
                  id="information-tab"
                  role="tabpanel"
                  aria-labelledby="information-tab-control"
                >
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>Stok</td>
                          <td><?= $row["stok"]; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- End Tab Single -->

                <!-- Tab Single -->
                <div
                  class="tab-pane fade"
                  id="review-tab"
                  role="tabpanel"
                  aria-labelledby="review-tab-control"
                >
                  <?php
                      $db = mysqli_connect("localhost", "root", "", "talasgo");
                      $id_produk = $_GET["id"];
                      $query = "SELECT COUNT(*) AS comment_count FROM tbl_ulasan WHERE id_produk = $id_produk";
                      $result = mysqli_query($db, $query);
                      $row = mysqli_fetch_assoc($result);

                      $comment_count = $row['comment_count'];

                      foreach($produk as $row) {
                          echo '<h4>' . $comment_count . ' ulasan pada “' . $row["nama_produk"] . '”</h4>';
                      }

                      $query_ulasan = "SELECT k.*, u.* FROM tbl_ulasan k
                                      JOIN users u ON k.id_users = u.id_users 
                                      WHERE k.id_produk = $id_produk";
                      $result_ulasan = mysqli_query($db, $query_ulasan);
                      $ulasan_rows = [];
                      while($ulasan_row = mysqli_fetch_assoc($result_ulasan)) {
                          $ulasan_rows[] = $ulasan_row;
                      } 
                      
                      ?>
                  <div class="review-items">
                    <?php foreach ($ulasan_rows as $ulasan_row) : ?>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/orang/somi.jpg" alt="Thumb" />
                      </div>
                      <div class="info">
                        <div class="rating"></div>
                        <div class="review-date"></div>
                        <div class="review-authro"><h5><?= $ulasan_row["name"]; ?></h5></div>
                        <p><?= $ulasan_row["isi"]; ?></p>
                      </div>
                    </div>
                    <?php endforeach; ?>
                    
                  </div>


                  <div class="review-form">
                      <h4>Berikan Ulasan</h4>
                    <form action="tambahulasan.php" class="contact-comments" method="POST">
                      <input type="hidden" name="id_produk" value="<?= $_GET['id'];?>">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group comments">
                            <!-- Comment -->
                            <textarea
                              name="isi"
                              class="form-control"
                              placeholder="Tulis Ulasan"
                            ></textarea>
                          </div>
                          <div class="form-group full-width submit">
                            <button
                              class="btn btn-animation dark border"
                              type="submit"
                              name="submit"
                            >
                              Kirim
                            </button>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>

                  
                </div>
                <!-- End Tab Single -->

                <!-- End Tab Single -->
              </div>
              <!-- End Tab Content -->
            </div>
          </div>
        </div>
        <!-- End Product Bottom Info  -->
        
        <!-- Related Product  -->

        <!-- <div class="related-products carousel-shadow">
          <div class="row">
            <div class="col-md-12">
              <h3>Produk Terkait</h3>
              <div
                class="vt-products text-center related-product-carousel swiper"
              >
                 Additional required wrapper
                <div class="swiper-wrapper">
                   Single product
                  <div class="swiper-slide">
                    <div class="product">
                      <div class="product-contents">
                        <div class="product-image">
                          <a href="detail-produk.php">
                            <img
                              src="assets/img/products/Talas Bogor.png"
                              alt="Product"
                            />
                          </a>
                          
                        </div>
                        <div class="product-caption">
                          <div class="product-tags">
                          </div>
                          <h4 class="product-title">
                            <a href="detail-produk.php"></a>
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
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   Single product
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- End Related Product  -->
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

    <!-- buat mesen -->
    <?php $nomorWaPenjual = $row['nomorwa']; 
          $namaProduk = $row['nama_produk'];
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

      $namaPembeli = $user['username']; 
      
    ?>
  
    <script>
    document.getElementById('orderButton').addEventListener('click', function() {
        // Mendapatkan nilai dari input quantity
        var quantity = document.getElementById('quantity').value;

         // Nomor WhatsApp yang akan dihubungi
        var buyerName = '<?php echo $namaPembeli; ?>'
        var phoneNumber = '<?php echo $nomorWaPenjual; ?>';
        var productName = '<?php echo $namaProduk; ?>';

        // Pesan awal yang ingin Anda sertakan
        var message = 'Halo.. saya ' + buyerName + ' tertarik untuk memesan produk berikut:\n\n' + 'Produk: ' + productName +'\n' + 'Jumlah: ' + quantity + '\n\n' + 'Terima kasih...';

        // Membuat URL untuk pesan melalui WhatsApp
        var whatsappUrl = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl);

    });
</script>
  </body>
</html>
