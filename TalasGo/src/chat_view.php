<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['auth'])) {
    // Redirect ke halaman login
    header('Location: ../Admin/Dason-PHP/login.php');
    exit();
}
?>

<?php
include_once "../conn.php";
$id_user = $_SESSION['user'];

$userResult = mysqli_query($conn, "SELECT * FROM users WHERE id_users='$id_user'");

if (!$userResult) {
    die('Query Error: ' . mysqli_error($conn));
}

if (mysqli_num_rows($userResult) >= 1) {
    $user = mysqli_fetch_array($userResult);

    // Pastikan $user tidak null sebelum mengakses offset
    if (!is_null($user)) {
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
      href="../assets/img/logo talas.png"
      type="image/x-icon"
    />

    <!-- ========== Start Stylesheet ========== -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/css/themify-icons.css" rel="stylesheet" />
    <link href="../assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="../assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="../assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="../assets/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.css" rel="stylesheet" />
    <link href="../assets/css/validnavs.css" rel="stylesheet" />
    <link href="../assets/css/helper.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/unit-test.css" rel="stylesheet" />
    <link href="../style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/chatcss.css" />
    <!-- ========== End Stylesheet ========== -->

    <style>
        div.chat-bot {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            margin-top: 100px;
            margin-bottom: 100px;
        }

        div.chat-bot-kecil {
            background-color: #fff;
            margin-top: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            text-align: justify;
        }


        .jawaban {
        background-color: #F5F7F8;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: auto;
        max-width: 720px;
        text-align: justify;
        height: auto; /* Menyesuaikan tinggi secara otomatis */
    }

        h1,h3 {
            color: #333;
            text-align:Center;
        }

        .user-info h3{
          text-align: left;
        }

        form {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
            color: #555;
        }
    </style>
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
                src="../assets/img/logo talasgo terbaru.png"
                class="logo"
                alt="Logo"
              />
            </a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <img src="../assets/img/logo talasgo terbaru.png" alt="Logo" />
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
                <a href="../index.php">Beranda</a>
              </li>
              <li class="dropdown">
                <a href="../artikel.php">Artikel</a>
              </li>
              <li class="dropdown">
                <a href="chat_view.php">Konsultasi</a>
              </li>
              <li class="dropdown">
                <a href="../index-map.php">Pemetaan</a>
              </li>
              <li class="dropdown">
                <a href="../shop.php">Produk</a>
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
          <img src="../img/user-img.png" alt="user image">
      </div>
      <div class="user-info">
          <h3 class="username">'. $user['username'] .'
          </h3>
          <a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout Akun</a>
      </div>
  </div>';
}
?>
           
            </nav>
          </div>
        <?php
    } else {
        die('User data is null');
    }
} else {
    die('No user found');
}
?>
            <!-- End Atribute Navigation -->

            <!-- Start Side Menu -->
            <div class="side">
              <a href="#" class="close-side"><i class="icon_close"></i></a>
              <div class="widget">
                <div class="logo">
                  <img src="../assets/img/logo-light.png" alt="Logo" />
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
        <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div
      class="breadcrumb-area text-center shadow dark bg-fixed text-light"
      style="background-image: url(../assets/img/Background\ Konsultasi.png)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <h1>Konsultasi</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li>
                  <a href="../index.html"><i class="fas fa-home"></i> Beranda</a>
                </li>
                <li class="active">Konsultasi</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Product
    ============================================= -->
    <div
      class="product-list-area default-padding bottom-less bg-gray text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
              <h2 class="title">Tidak Perlu Ragu Bertanya pada TalasBot🤖</h2>
              <div class="devider"></div>
              <p>
                Bersiaplah untuk terjun ke dunia konsultasi dengan bot yang luar
                biasa, menarik, dan tentunya membantu Anda dalam menghadapi
                permasalahan pertanian talas.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="product-list-box">
            <!-- Single Item -->
            <div class="product-list-item">
              <a href="#">
                <div class="thumb">
                  <img src="../assets/img/icon/icon rocket.svg" alt="Icon" />
                </div>
                <h5>Respons Cepat</h5>
                <p>Dapatkan jawaban seketika.</p>
              </a>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="product-list-item">
              <a href="#">
                <div class="thumb">
                  <img src="../assets/img/icon/icon light.svg" alt="Icon" />
                </div>
                <h5>Solusi Pintar</h5>
                <p>Temukan solusi terbaik.</p>
              </a>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="product-list-item">
              <a href="#">
                <div class="thumb">
                  <img src="../assets/img/icon/icon lock.svg" alt="Icon" />
                </div>
                <h5>Keamanan Terjamin</h5>
                <p>Lindungi informasi Anda.</p>
              </a>
            </div>
            <!-- End Single Item -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Product Area -->
    


    <div class="fun-facts-area bg-dark" >
      <div class="chat-bot">
          <div class="chat-bot-kecil">
              <div class="chat-bot-kecil">
                  <h1>Chat with Bot TalasGo</h1>
                  <form method="post" action="ChatController.php" onsubmit="showAlert(); return true;">
                      <input type="text" name="user_input" placeholder="Type your message">
                      <button type="submit">Send</button>
                  </form>
              </div>
              <div class="jawaban">
                  <h3>Jawaban</h3>
                  <?php
                  if (isset($chat_output)) {
                      echo '<p>' . $chat_output . '</p>';
                  }
                  ?>
              </div>
          </div>
      </div>
    </div>



    <!-- Start Footer 
    ============================================= -->
    <footer
      class="bg-dark text-light"
      style="background-image: url(../assets/img/shape/brush-down.png)"
    >
      <div class="container">
        <div class="f-items default-padding">
          <div class="row">
            <!-- Single Itme -->
            <div class="col-lg-5 col-md-6 item">
              <div class="footer-item about">
                <img class="logo" src="../assets/img/logo grayscale.png" alt="Logo" />
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
        <img src="../assets/img/shape/10.png" alt="Image Not Found" />
      </div>
      <div class="shape-left-bottom">
        <img src="../assets/img/shape/11.png" alt="Image Not Found" />
      </div>
    </footer>
    <!-- End Footer -->
<!-- Add your other body elements here -->

<script>
    function showAlert() {
        alert("Mohon tunggu lebih kurang 1 menit...");
        setTimeout(function(){
            alert("Jaringan anda kurang stabil...");
        }, 60000); // Show the second alert after 1 minute
    }
</script>
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.appear.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/modernizr.custom.13711.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/progress-bar.min.js"></script>
    <script src="../assets/js/circle-progress.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/count-to.js"></script>
    <script src="../assets/js/jquery.scrolla.min.js"></script>
    <script src="../assets/js/YTPlayer.min.js"></script>
    <script src="../assets/js/TweenMax.min.js"></script>
    <script src="../assets/js/validnavs.js"></script>
    <script src="../assets/js/main.js"></script>



</body>
</html>