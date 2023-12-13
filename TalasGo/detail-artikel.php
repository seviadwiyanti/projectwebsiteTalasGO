<?php 
    session_start();
    require "functionArtikel.php";

    $id = $_GET['id'];
    $artikel = query("SELECT * FROM tbl_artikel WHERE id = $id");


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
      content="TalasGo - Budidaya Talas"
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
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/unit-test.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->
  </head>

  <body>

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
            <!-- <div class="button">
              <ul>
                <li>
                  <a
                    class="btn btn-theme btn-md radius animation narrow-button"
                    href="akun.html"
                    >Masuk</a
                  >
                </li>
                <li></li>
                <li>
                  <a
                    class="btn btn-theme secondary btn-md radius animation narrow-button"
                    href=""
                    >Daftar</a
                  >
                </li>
              </ul>
            </div> -->

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
      class="breadcrumb-area text-center shadow dark bg-fixed text-light"
      style="background-image: url(assets/img/background-artikel.jpg)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <?php foreach($artikel as $row) : ?>
              <h1><?= $row["judulartikel"]; ?></h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li>
                    <a href="#"><i class="fas fa-home"></i>Beranda</a>
                  </li>
                  <li>
                    <a href="artikel.php"></i>Artikel</a>
                  </li>
                  <li class="active"><?= $row["judulartikel"]; ?></li>
                </ol>
              </nav>
            <?php endforeach; ?>
              
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding atas">
      <div class="container">
        <div class="blog-items">
          <div class="row">
            <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
              <?php foreach($artikel as $row) : ?>
                <div class="blog-style-two item">
                  <div class="thumb">
                      <a href="#"
                        ><img src="Admin/Dason-PHP/assets/images/artikel/<?= $row["gambar"];?>" alt="Thumb"
                      /></a>
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
                          <a href="#"><i class="fas fa-user-circle"></i><?= $row["penulis"]; ?></a>
                        </li>
                        <li>
                          <?php 

                            $db = mysqli_connect("localhost", "root", "", "talasgo");
                            $id_artikel = $_GET["id"];
                            $query = "SELECT COUNT(*) AS comment_count FROM tbl_komentar WHERE id_artikel = $id_artikel";
                            $result = mysqli_query($db, $query);
                            $rowKomen = mysqli_fetch_assoc($result);

                            $comment_count = $rowKomen['comment_count'];
                          
                          ?>
                          <a href="#"><i class="fas fa-comments"></i><?= $comment_count . " Komentar"; ?></a>
                        </li>
                      </ul>
                    </div>
                  
                    <?= htmlspecialchars_decode($row["isiartikel"]); ?>

                   
                    <!-- <blockquote>
                      "Talas memiliki nutrisi yang sangat lengkap dibandingkan dengan umbi-umbi yang lain. Adanya isu diversifikasi pangan, 
                      tentu menjadi peluang bagi pengembangan komoditas talas." - Prof Edi Santosa (Guru Besar IPB)
                    </blockquote>
                    <p>
                      Kita telah mengenal apa itu talas bogor secara umum. Tidak cukup sampai di situ, kita juga perlu mengetahui jenis-jenis talas 
                      bogor yang akan ditanam. Talas bogor memiliki beragam jenis yang memiliki ciri khasnya masing-masing.  
                      Berikut beberapa jenis talas bogor yang bisa kita tanam di belakang rumah.
                    </p>
                    <h3>Jenis-Jenis Talas Bogor</h3> -->
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog -->
    
    <!-- Start Services 
    ============================================= -->
    <div
    class="services-style-two-area bottom-less text-center default-padding-top">
      
    </div>
  <!-- End Services -->

  <!-- Start Blog Bawah
    ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
      <div class="container">
        <div class="blog-items">
          <div class="row">
            <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
              <!-- Post Author -->
              <!-- <div class="post-author">
                <div class="thumb">
                  <img src="assets/img/Ihzra.png" alt="Ihzra" />
                </div>
                <div class="content">
                  <h4><a href="#">Ihzra Fahrullizian Yusuf</a></h4>
                  <p>
                    Grursus mal suada faci lisis Lorem ipsum dolarorit more
                    ametion consectetur elit. Vesti at bulum nec at odio aea the
                    dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit
                    to the consectetur elit. All the Lorem Ipsum generators on
                    the Internet tend. Entire its the did figure wonder off.
                    sportsmen zealously arranging to the main pint. Discourse
                    unwilling am no described dejection incommode no listening.
                  </p>
                </div>
              </div> -->
              <!-- Post Author -->

              <!-- Post Tags Share -->
              <div class="post-tags share">
                <div class="tags">
                  <h4>Download:</h4>
                  <a href="cetakpdf.php?id=<?= $row["id"]; ?>" target="_blank">
                    <i class="fa fa-file-pdf"></i>
                  </a>
                </div>

                <?php foreach($artikel as $row) : ?>
                  <div class="social">
                    <h4>Bagikan:</h4>
                    <ul>
                      <li>
                        <a class="whatsapp" href='https://wa.me/?text=Silakan kunjungi tautan ini untuk mengeksplor artikel "<?= $row["judulartikel"]; ?>": %20https://www.merdeka.com/jabar/7-resep-olahan-talas-enak-dan-mudah-dibuat-kln.html' target="_blank"
                          ><i class="fab fa-whatsapp"></i
                        ></a>
                      </li>
                      <li>
                        <a class="facebook" href='https://www.facebook.com/sharer/sharer.php?u=https://www.merdeka.com/jabar/7-resep-olahan-talas-enak-dan-mudah-dibuat-kln.html' target="_blank"
                          ><i class="fab fa-facebook"></i
                        ></a>
                      </li>
                      <li>
                        <a class="twitter" href='https://twitter.com/intent/tweet?text=Silakan kunjungi tautan ini untuk mengeksplor artikel "<?= $row["judulartikel"]; ?>": &url=https://www.merdeka.com/jabar/7-resep-olahan-talas-enak-dan-mudah-dibuat-kln.html' target="_blank"
                          ><i class="fab fa-twitter"></i
                        ></a>
                      </li>
                    </ul>
                    <!-- End Social Share -->
                  </div>
                <?php endforeach; ?>


              </div>
              <!-- Post Tags Share -->

              <?php
                $idArtikelSebelumnya = getArtikelSebelumnya($id);
                $artikelSebelumnya = ($idArtikelSebelumnya) ? query("SELECT * FROM tbl_artikel WHERE id = $idArtikelSebelumnya") : null;

                $idArtikelSelanjutnya = getArtikelSelanjutnya($id);
                $artikelSelanjutnya = ($idArtikelSelanjutnya) ? query("SELECT * FROM tbl_artikel WHERE id = $idArtikelSelanjutnya") : null;
                ?>

    
              <!-- Start Post Pagination -->
              <div class="post-pagi-area">
                    <div class="post-previous">
                        <?php if ($artikelSebelumnya) : ?>
                            <?php foreach ($artikelSebelumnya as $row) : ?>
                                <a href="detail-artikel.php?id=<?= $row["id"]; ?>">
                                    <div class="icon">
                                        <i class="fas fa-angle-double-left"></i>
                                    </div>
                                    <div class="nav-title">
                                        Sebelumnya
                                        <h5><?= $row["judulartikel"]; ?></h5>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <!-- Tampilkan pesan atau tautan ke halaman utama jika tidak ada artikel sebelumnya -->
                            <!-- <a href="index.php">
                                <div class="nav-title">
                                    Kembali ke Halaman Utama
                                </div>
                            </a> -->
                        <?php endif; ?>
                    </div>
                    <div class="post-next">
                        <?php if ($artikelSelanjutnya) : ?>
                            <?php foreach ($artikelSelanjutnya as $row) : ?>
                                <a href="detail-artikel.php?id=<?= $row["id"]; ?>">
                                    <div class="nav-title">
                                        Selanjutnya
                                        <h5><?= $row["judulartikel"]; ?></h5>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-angle-double-right"></i>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <!-- Tampilkan pesan atau tautan ke halaman utama jika tidak ada artikel selanjutnya -->
                            <!-- <a href="index.php">
                                <div class="nav-title">
                                    Kembali ke Halaman Utama
                                </div>
                            </a> -->
                        <?php endif; ?>
                    </div>
                </div>

              <!-- End Post Pagination --> 

              <!-- Start Blog Comment -->
              <div class="blog-comments">
                <div class="comments-area">
                  <div class="comments-title">
                  <?php
                    $db = mysqli_connect("localhost", "root", "", "talasgo");
                    $id_artikel = $_GET["id"];
                    $query = "SELECT COUNT(*) AS comment_count FROM tbl_komentar WHERE id_artikel = $id_artikel";
                    $result = mysqli_query($db, $query);
                    $row = mysqli_fetch_assoc($result);

                    $comment_count = $row['comment_count'];

                    foreach($artikel as $row) {
                      echo ' <h3> ' . $comment_count .' Komentar pada “'. $row["judulartikel"] .'”</h3>'; 
                     }

                     ?>
                   
                   
                      <?php
                      $db = mysqli_connect("localhost", "root", "", "talasgo");

                      // Check if the user is logged in
                      $id_user = isset($_SESSION["user"]) ? $_SESSION["user"] : null;
                      
                      $id_artikel = isset($_GET["id"]) ? $_GET["id"] : null;
                      
                      $query = "SELECT k.*, u.*, a.* FROM tbl_komentar k
                                  JOIN tbl_artikel a ON k.id_artikel = a.id
                                  JOIN users u ON k.id_users = u.id_users WHERE k.id_artikel = $id_artikel";
                      
                      $result = mysqli_query($db, $query);
                      $rows = [];
                      
                      while ($row = mysqli_fetch_assoc($result)) {
                          $rows[] = $row;
                      }
                      
                      foreach ($rows as $row) {
                        // Mengubah format tanggal dari database (jika kolom tanggalkomentar ada)
                        $tanggalkomentar = isset($row["tanggalkomentar"]) ? date("d M Y H:i", strtotime($row["tanggalkomentar"])) : "Tanggal tidak tersedia";

                        
                        echo '
                        <div class="comments-list">
                            <div class="comment-item">
                                <div class="content">
                                    <div class="title">
                                        <h5>' . $row["name"] . '<span class="reply">' . (isset($_SESSION["user"]) ? '<a href="#"><i class="fas fa-reply"></i> Balas</a>' : '') . '</span></h5>
                                        <span>' . $tanggalkomentar . '</span>
                                    </div>
                                    <p>' . $row["isi"] . '</p>
                                </div>
                            </div>
                        </div>';
                    }

                    if ($id_user === null) {
                      // Display a message or login link for users who are not logged in
                      echo '<p>Anda belum login. Silakan <a href="Admin/Dason-PHP/login.php">login</a> untuk memberikan komentar!</p>';
                  }
                  
                  ?>

                  </div>
                  <div class="comments-form">
                    <div class="title">
                      <h3>Berikan komentar</h3>
                    </div>
                    <form action="tambahkomentar.php" class="contact-comments" method="POST">
                      <input type="hidden" name="id_artikel" value="<?= $_GET['id'];?>">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group comments">
                            <!-- Comment -->
                            <textarea
                              name="isi"
                              class="form-control"
                              placeholder="Tulis Komentar"
                              required
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
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Comments Form -->
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
