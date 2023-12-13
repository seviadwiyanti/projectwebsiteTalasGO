<?php
session_start();
include_once "conn.php";

if(isset($_POST['submit'])){
  if (!isset($_SESSION['user'])) {
    header("Location: admin/Dason-PHP/login.php");
    exit();
  }
    if(isset($conn)){
        if(isset($_POST['testimoniweb'])){
            $testimoniweb = $_POST['testimoniweb'];

            // Update the key to 'user' based on the session structure
            $user_id = $_SESSION['user']; // Adjust this key based on your actual session structure

            $insert = $conn->prepare("INSERT INTO tbl_testimoni (id_users, testimoniweb) VALUES (?, ?)");

            if ($insert === false) {
                echo "Error in preparing the statement: " . $conn->error;
            } else {
                $insert->bind_param("ss", $user_id, $testimoniweb);

                if ($insert->execute()) {
                    $_SESSION['message'] = "Testimoni berhasil ditambahkan";
                    echo '<script>alert("Testimoni berhasil ditambahkan"); window.location.href = "index.php";</script>';
                } else {
                    echo "Gagal menambahkan testimoni: " . $insert->error;
                }

                $insert->close();
            }

        } else {
            echo "Testimoniweb tidak ditemukan.";
        }
    } else {
        echo "Koneksi database tidak didefinisikan."; 
    }
}



if (isset($conn)) {
  // Hapus filter berdasarkan ID pengguna
  $query = "SELECT tbl_testimoni.testimoniweb, users.name, users.role FROM tbl_testimoni INNER JOIN users ON users.id_users = tbl_testimoni.id_users";


  $stmt = $conn->prepare($query);
  
  if ($stmt->execute()) {
      $stmt->bind_result($testimoniweb, $name, $role);

      // Mulai loop atau tindakan lain yang diperlukan
      $testimonials = [];

while ($stmt->fetch()) {
    $testimonial = [
        'testimoniweb' => $testimoniweb,
        'name' => $name,
        'role' => $role,
    ];

    $testimonials[] = $testimonial;
}
  }

  // Tutup pernyataan
  $stmt->close();
}

// Tutup koneksi
$conn->close();
?>

<?php 
require "functionProduk.php";
$produk = query("SELECT * FROM tbl_produk LIMIT 4");


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
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/unit-test.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->


  </head>

  <body>
  <!-- Elemen HTML untuk menyimpan nilai isLoggedIn -->
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
<!--sidebar -->
           <?php  if (isset($_SESSION['user'])) : ?>
           <div class="flex">
            <div class="user-data-mob" style="display: none;">
                <div class="user-img">
                    <img src="img/user-img.png" alt="user image"></div>
                </div>
                <div class="user-info" style="display: none;">
                  <div>
                    <h3 class="username"> <?= $user['username'] ?> </h3>
                    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout Akun</a><br>
                </div>
              </div>
           </div>
           <?php  endif; ?>

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
  echo '<a href="Admin/Dason-PHP/login.php">LOGIN</a>';
} else {
  echo '<nav class="navbar">
          <div class="user-data">
              <div class="user-img">
                  <img src="img/user-img.png" alt="user image">
              </div>
              <div class="user-info">
                  <h3 class="username">'. $user['username'] . '</h3>
                  <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout Akun</a><br>'; 
  // Add button for returning based on the role
  if ($_SESSION['role'] === 'admin') {
    echo '<a href="Admin/Dason-PHP/index.php"></i>Kembali ke Halaman Admin</a>';
  } elseif ($_SESSION['role'] === 'Penjual') {
    echo '<a href="Penjual/index.php"></i>Kembali ke Halaman Penjual</a>';
    // Replace "path_to_penjual_page.php" with the actual path to the penjual page.
  }

  echo '</div>
      </div>
    </nav>';
}
?>

           
            </nav>
          <!-- Main Nav -->
        </div>

        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->
      </nav>
      <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Banner Area 
    ============================================= -->
    <div
      class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden"
    >
      <!-- Slider main container -->
      <div class="banner-fade">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Single Item -->
          <div class="swiper-slide banner-style-one">
            <div
              class="banner-thumb bg-cover shadow dark"
              style="background: url(assets/img/11.png)"
            ></div>
            <div class="container">
              <div class="row align-center">
                <div class="col-xl-7">
                  <div class="content">
                    <h4>Asli & Alami</h4>
                    <h2><strong>Produk Pertanian</strong> Talas Bogor</h2>
                    <p>
                      Temukan produk talas bogor mulai dari hasil panen petani
                      hingga beragam produk olahan talas dari berbagai produsen.
                    </p>
                    <div class="button">
                      <a
                        class="btn btn-theme secondary btn-md radius animation"
                        href="shop.php"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single Item -->

          <!-- Single Item -->
          <div class="swiper-slide banner-style-one">
            <div
              class="banner-thumb bg-cover shadow dark"
              style="background: url(assets/img/4.png)"
            ></div>
            <div class="container">
              <div class="row align-center">
                <div class="col-xl-7">
                  <div class="content">
                    <h4>Konsultasi</h4>
                    <h2><strong>Membantu Masalah</strong> Pertanian Talas</h2>
                    <p>
                      Konsultasikan tentang permasalahan yang kamu hadapi
                      terkait hama dan penyakit yang menyerang tanaman talas.
                    </p>
                    <div class="button">
                      <a
                        class="btn btn-theme secondary btn-md radius animation"
                        href="src/chat_view.php"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single Item -->
        </div>

        <!-- Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <!-- End Main -->

    <!-- Start About 
    ============================================= -->
    <div class="about-style-one-area default-padding">
      <!-- Shape -->
      <div class="shape-right-top">
        <img src="assets/img/shape/leaf.png" alt="Image not found" />
      </div>
      <!-- End Shape -->

      <div class="container">
        <div class="row align-center">
          <div
            class="col-xl-5 col-lg-6 about-style-one pr-50 pr-md-15 pr-xs-15"
          >
            <div class="thumb">
              <img src="assets/img/Menanam Talas.png" alt="Image Not Found" />
              <div class="sub-item">
                <img src="assets/img/3 Buah Talas.png" alt="Image Not Found" />
              </div>
            </div>
          </div>
          <div class="col-xl-7 col-lg-6 about-style-one">
            <div class="row align-center">
              <div class="col-xl-12 col-lg-12">
                <h2 class="heading">
                  Bersama TalasGO, Raih Keberhasilan dalam Budidaya Talas Anda!
                  🌱
                </h2>
                <p>
                  TalasGO adalah platform online yang dirancang untuk para
                  petani dan pecinta pertanian yang ingin sukses dalam budidaya
                  talas. Mari bersama-sama tumbuh dan berkembang di dunia pertanian talas yang penuh potensi!
                </p>
                <ul class="check-solid-list mt-25">
                  <h5><strong>Apa yang Anda dapatkan di sini?</strong></h5>
                  <li>
                    <div class="icon"><i class="fa fa-comments"></i></div>
                    <div class="content">
                      Konsultasi cerdas dengan bot kami untuk pertanyaan dan
                      masalah budidaya
                    </div>
                  </li>
                  <li>
                    <div class="icon"><i class="fa fa-book"></i></div>
                    <div class="content">
                      Artikel informatif dan menginspirasi untuk memandu dalam
                      budidaya tanaman talas
                    </div>
                  </li>
                  <li>
                    <div class="icon"><i class="fa fa-map"></i></div>
                    <div class="content">
                      Pemetaan canggih untuk menemukan produk talas berkualitas
                      di sekitar Anda
                    </div>
                  </li>
                  <li>
                    <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                    <div class="content">
                      Lihat produk unggul talas dari berbagai petani dan
                      produsen terpercaya
                    </div>
                  </li>
                </ul>
              </div>
              <!-- <div class="col-xl-5 col-lg-12 pl-50 pl-md-15 pl-xs-15">
                <div class="top-product-item">
                  <img src="assets/img/icon/1.svg" alt="Icon" />
                  <h5><a href="#">Natural Farming</a></h5>
                  <p>Resolve parties but trying she shewing of moment.</p>
                </div>
                <div class="top-product-item">
                  <img src="assets/img/icon/2.svg" alt="Icon" />
                  <h5><a href="#">Quality Products</a></h5>
                  <p>Always parties but trying she shewing of moment.</p>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End About -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-style-one-area default-padding bg-gray half-bg-theme">
      <div class="shape-extra">
        <img src="assets/img/shape/18.png" alt="Image Not Found" />
      </div>
      <div class="container">
        <div class="heading-left">
          <div class="row">
            <div class="col-lg-5">
              <div class="left-info">
                <h5 class="sub-title">Toko</h5>
                <h2 class="title">Jelajahi Produk Unggulan Talas Bogor🚀</h2>
              </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
              <div class="right-info">
                <p>
                  TalasGO sebagai tempat yang menyediakan berbagai produk talas
                  dari beragam petani dan produsen ternama. Produk yang tersedia
                  mulai dari bahan mentahnya seperti buah dan daun talas hingga
                  produk-produk hasil olahan dari talas itu sendiri.
                </p>
                <a
                  class="btn btn-theme btn-md radius animation"
                  href="shop.html"
                  >Selengkapnya</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="services-style-one-carousel swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                
                <?php $i = 1; ?>
                <?php foreach ($produk as $row) : ?>
                  <!-- Single Item -->
                  <div class="swiper-slide">
                    <div class="services-style-one">
                      <div class="thumb">
                        <img
                          src="Penjual/assets/images/produk/<?= $row["gambar"]; ?>"
                          alt="Image Not Found"
                        />
                      </div>
                      <h5><a href="#"><?= $row["nama_produk"]; ?></a></h5>
                      <p>
                        <?= $row["deskripsi_produk"]; ?>
                      </p>
                    </div>
                  </div>
                  <!-- End Single Item -->
                <?php endforeach; ?>
                <?php $i++; ?>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Services -->

    <!-- Start Fun Factor Area
    ============================================= -->
    
    <!-- End Fun Factor Area -->

    <!-- Start Why Choose Us 
    ============================================= -->
    <div class="choose-us-style-one-area overflow-hidden default-padding">
      <div class="container">
        <div class="row align-center">
          <div class="col-lg-6 choose-us-style-one">
            <div class="thumb">
              <img src="assets/img/Petani6.jpeg" alt="Image Not Found" />
              <div class="shape">
                <img
                  class="wow fadeInDown"
                  src="assets/img/shape/22.png"
                  alt="Image not found"
                />
              </div>
              <div class="product-produce">
                <div class="icon">
                  <i class="flaticon-farmer"></i>
                </div>
                <div class="fun-fact">
                  <div class="counter">
                    <div class="timer" data-to="350" data-speed="2000">350</div>
                    <div class="operator">+</div>
                  </div>
                  <span class="medium">Digunakan Petani Talas</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 choose-us-style-one">
            <h5 class="sub-title">FAQ</h5>
            <h2 class="title">
              Lihat Pertanyaan Umum
              yang Sering Diajukan🔍
            </h2>
            <div class="accordion accordion-regular mt-35" id="faqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Bagaimana cara mencari lokasi penjualan talas di daerah
                    Bogor?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    <p>
                      Untuk mencari lokasi penjualan, Anda dapat mengakses fitur
                      "Pemetaan" kami. Cukup masukkan kata kunci atau kriteria
                      tertentu, seperti wilayah geografis atau jenis produk yang
                      Anda cari. Sistem akan menampilkan hasil pencarian yang
                      mencakup lokasi-lokasi yang sesuai dengan kriteria Anda.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Bagaimana saya dapat memulai konsultasi dengan bot di
                    TalasGO?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    <p>
                      Anda dapat memulai konsultasi dengan bot kami dengan
                      mengakses fitur "Konsultasi" di situs web TalasGO. Bot
                      akan membantu Anda dalam menangani permasalahan yang Anda
                      alami terkait hama dan penyakit yang menyerang tanaman
                      talas Anda.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Apakah TalasGO menyediakan artikel dan sumber daya terkini
                    tentang budidaya talas?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body">
                    <p>
                      Ya, TalasGO menyediakan berbagai artikel dan sumber daya
                      terkini tentang budidaya talas. Anda dapat mengaksesnya
                      melalui bagian "Artikel" di situs web kami. Kami terus
                      memperbarui dan menambahkan konten baru secara berkala
                      untuk memberikan informasi terbaru, tips, dan panduan bagi
                      petani dan pecinta pertanian talas. Kami berkomitmen untuk
                      menjadi sumber informasi yang lengkap dan berguna dalam
                      mendukung budidaya talas yang sukses.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Why Choose us -->

    <!-- Start Testimonials 
    ============================================= -->
    <div
      class="testimonials-area default-padding bg-gray"
      style="background-image: url(assets/img/shape/23.png)"
    >
      <div class="container">
        <div class="row align-center">
          <div class="col-lg-5">
            <div class="testimonial-info text-center">
              <h4>Testimoni</h4>
              <div class="thumb">
                <img src="assets/img/Petani1.jpeg" alt="Image Not Found" />
                <img src="assets/img/Petani7.jpeg" alt="Image Not Found" />
                <img src="assets/img/Petani2.jpeg" alt="Image Not Found" />
                <img src="assets/img/Petani4.jpeg" alt="Image Not Found" />
              </div>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <div class="testimonial-carousel testimonial-style-one swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Single item -->
                  <?php foreach ($testimonials as $row): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-style-two">
                          <div class="item">
                            <div class="content">
                                <p>
                                    <?= $row['testimoniweb']; ?>
                                </p>
                            </div>
                            <div class="provider">
                                <div class="info">
                                    <h4><?= $row['name']; ?></h4>
                                    <span><?= $row['role']; ?></span>
                                </div>
                            </div>
                          </div>
                      </div>  
                    </div>
                  <?php endforeach; ?>
                <!-- End Single item -->
                <!-- Single item -->
                <!-- <div class="swiper-slide">
                  <div class="testimonial-style-two">
                    <div class="item">
                      <div class="content">
                        <p>
                          "Saya merasa bersyukur telah menemukan TalasGO. Situs
                          ini telah mempermudah hidup saya sebagai petani talas
                          di Bogor. Informasinya lengkap, komunitasnya ramah,
                          dan fitur-fiturnya luar biasa. Saya tidak bisa
                          berterima kasih lebih banyak!"
                        </p>
                      </div>
                      <div class="provider">
                        <div class="info">
                          <h4>Super Clint</h4>
                          <span>Petani Talas</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Single item -->
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Farmer 
    ============================================= -->
    <div class="farmer-area default-padding bottom-less">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
              <h5 class="sub-title">Tim Kami</h5>
              <h2 class="title">Berkenalan dengan Tim Kreatif Kami😎</h2>
              <div class="devider"></div>
              <p>
                Inilah orang-orang di balik layar! Dapatkan informasi lebih
                lanjut tentang individu kreatif di balik setiap pixel pada
                website kami.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="row g-5 d-flex justify-content-center">
              <!-- Single Item -->
              <div class="col-lg-4 farmer-stye-one">
                <div class="farmer-style-one-item">
                  <div class="thumb">
                    <img src="assets/img/Bennefit.png" alt="Image Not Found" />
                    <div class="social">
                      <i class="fas fa-share-alt"></i>
                      <ul>
                        <li class="linkedin">
                          <a href="https://www.linkedin.com/in/bennefit-christy-saragih/">
                            <i class="fab fa-linkedin-in"></i>
                          </a>
                        </li>
                        <li class="instagram">
                          <a href="https://www.instagram.com/bennefitchristy/">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li class="whatsapp">
                          <a href="https://wa.me/6282269075325">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="info" style="text-align: center;">
                    <span>Project Manager</span>
                    <h4><a href="#">Bennefit Christy Saragih</a></h4>
                  </div>
                </div>
              </div>
              <!-- End Single Item -->
              <!-- Single Item -->
              
              <div class="col-lg-4 farmer-stye-one">
                <div class="farmer-style-one-item">
                  <div class="thumb">
                    <img src="assets/img/Ihzra.png" alt="Image Not Found" />
                    <div class="social">
                      <i class="fas fa-share-alt"></i>
                      <ul>
                        <li class="linkedin">
                          <a href="https://www.linkedin.com/in/ihzra-fahrullizian">
                            <i class="fab fa-linkedin-in"></i>
                          </a>
                        </li>
                        <li class="instagram">
                          <a href="https://instagram.com/ihzrafy_">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li class="whatsapp">
                          <a href="http://wa.me/6285724182324">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="info" style="text-align: center;">
                    <span>Front-End Developer</span>
                    <h4><a href="#">Ihzra Fahrullizian Yusuf</a></h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 farmer-stye-one">
                <div class="farmer-style-one-item">
                  <div class="thumb">
                    <img src="assets/img/Alif.png" alt="Image Not Found" />
                    <div class="social">
                      <i class="fas fa-share-alt"></i>
                      <ul>
                        <li class="linkedin">
                          <a href="https://www.linkedin.com/in/alif-reyhan-putra/">
                            <i class="fab fa-linkedin-in"></i>
                          </a>
                        </li>
                        <li class="instagram">
                          <a href="https://www.instagram.com/ryhnn_ptra/">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li class="whatsapp">
                          <a href="https://wa.me/6282285761280">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="info" style="text-align: center;">
                    <span>Back-End Developer</span>
                    <h4><a href="#">Alif Reyhan Putra</a></h4>
                  </div>
                </div>
              </div>
              
              <!-- End Single Item -->
              <!-- Single Item -->
              <div class="col-lg-4 farmer-stye-one">
                <div class="farmer-style-one-item">
                  <div class="thumb">
                    <img src="assets/img/Sevia.png" alt="Image Not Found" />
                    <div class="social">
                      <i class="fas fa-share-alt"></i>
                      <ul>
                        <li class="linkedin">
                          <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                          </a>
                        </li>
                        <li class="instagram">
                          <a href="https://instagram.com/sevia.dwynt_">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li class="whatsapp">
                          <a href="https://wa.me/6281239116946">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="info" style="text-align: center;">
                    <span>Data Scientist</span>
                    <h4><a href="#">Sevia Dwi Yanti</a></h4>
                  </div>
                </div>
              </div>
              <!-- End Single Item -->
              <!-- Single Item -->
              <div class="col-lg-4 farmer-stye-one">
                <div class="farmer-style-one-item">
                  <div class="thumb">
                    <img src="assets/img/Najla.png" alt="Image Not Found" />
                    <div class="social">
                      <i class="fas fa-share-alt"></i>
                      <ul>
                        <li class="linkedin">
                          <a href="https://www.linkedin.com/in/najla-putri-afifah/">
                            <i class="fab fa-linkedin-in"></i>
                          </a>
                        </li>
                        <li class="instagram">
                          <a href="https://instagram.com/najlaput">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li class="whatsapp">
                          <a href="https://wa.me/6285921688921">
                            <i class="fab fa-whatsapp"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="info" style="text-align: center;">
                    <span>UI/UX Designer</span>
                    <h4><a href="#">Najla Putri Afifah</a></h4>
                  </div>
                </div>
              </div>
              <!-- End Single Item -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Farmer -->

    <!-- Start Contact Us 
    ============================================= -->
    <div
      class="contact-area bg-gray default-padding"
      style="background-image: url(assets/img/shape/27.png)"
    >
      <div class="container">
        <div class="row align-center">
          <div class="col-tact-stye-one col-lg-7">
            <div class="contact-form-style-one mb-md-50">
              <h5 class="sub-title">Testimoni</h5>
              <h2 class="heading">Kami mengharapkan penilaian Anda terkait website ini</h2>
              <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group testimoniweb">
                    <textarea
                        class="form-control"
                        id="testimoniweb"
                        name="testimoniweb"
                        placeholder="Isi kesan dan pesan Anda di sini"
                        type="text"
                        required
                      ></textarea>
                    </div>
                  </div>
                </div>
                
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row">
                  <div class="col-lg-12">
                    <button type="submit" name="submit" id="submit">
                      <i class="fa fa-paper-plane"></i> Kirim 
                    </button>
                  </div>
                </div>
                </form>
                <!-- Alert Message -->
                <div class="col-lg-12 alert-notification">
                  <div id="message" class="alert-msg"></div>
                </div>
              </form>
            </div>
          </div>



          <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15">
            <div class="contact-style-one-info">
              <h2>
                Informasi
                <span>
                  Kontak
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 500 150"
                    preserveAspectRatio="none"
                  >
                    <path
                      d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0"
                      style="animation-play-state: running"
                    ></path>
                  </svg>
                </span>
              </h2>
              <p>
                Kami sangat senang mendengar dari Anda! Silakan hubungi tim kami
                melalui formulir yang ada atau melalui kontak yang tertera untuk
                mengajukan pertanyaan, memberikan umpan balik, atau meminta
                informasi lebih lanjut.
              </p>
              <ul>
                <li class="wow fadeInUp">
                  <div class="icon">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <div class="content">
                    <h5 class="title">Nomor Telepon</h5>
                    <a href="">+6281213141516</a>
                  </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="300ms">
                  <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="info">
                    <h5 class="title">Alamat</h5>
                    <p>
                      Jl. Malabar Ujung, Kost Pondok Cemara, <br />
                      Kota Bogor
                    </p>
                  </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="500ms">
                  <div class="icon">
                    <i class="fas fa-envelope-open-text"></i>
                  </div>
                  <div class="info">
                    <h5 class="title">Email</h5>
                    <a href="mailto:info@agrul.com.com"
                      >gotalas26@gmail.com</a
                    >
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact -->

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
    <!-- End Footer -->

    <script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("testimoni-form").addEventListener("submit", function(event) {
      // Ganti "your_login_page.php" dengan nama halaman login Anda
      var loginPage = "/Admin/Dason-PHP.php";

      // Cek apakah pengguna sudah login
      // Ganti "user" dengan key yang menyimpan informasi login di session Anda
      if (!sessionStorage.getItem("user")) {
        event.preventDefault(); // Mencegah pengiriman formulir

        // Tampilkan pesan peringatan
        alert("Anda harus login terlebih dahulu untuk mengirim testimonial.");

        // Redirect ke halaman login
        window.location.href = loginPage;
      }
    });
  });
</script>


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