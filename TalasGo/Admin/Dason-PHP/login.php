<?php
session_start();
include_once "layouts/config.php";

// Menampilkan Pesan Alert
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    echo "<script>alert('$message')</script>";
    unset($_SESSION['message']);
}

// Proses Login
if (isset($_POST['Login'])) {
    $u = $_POST['username'];
    $p = md5($_POST['password']);

    // Periksa apakah koneksi database berhasil
    if ($config) {
        $user_query = mysqli_query($config, "SELECT * FROM users WHERE username='$u' AND password='$p'");

        // Periksa apakah query berhasil dieksekusi
        if ($user_query) {
            if (mysqli_num_rows($user_query) >= 1) {
                $user = mysqli_fetch_assoc($user_query);
                $_SESSION['auth'] = true;
                // Menambahkan session user
                $_SESSION['user'] = $user['id_users'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['username'] = $user['username'];


                if ( $_SESSION['role'] == 'User') {
                    // Jika role adalah "User", arahkan ke index.php
                    echo '<script>
                            alert("Login berhasil");
                            window.location.href = "../../index.php";
                          </script>';
                    exit(); // Pastikan untuk keluar setelah melakukan redirect
                } elseif ( $_SESSION['role'] == 'Penjual') {
                    // Jika role adalah "Penjual", arahkan ke penjual.php
                    echo '<script>
                            alert("Login berhasil");
                            window.location.href = "../../Penjual/index.php";
                          </script>';
                    exit();
                } else if( $_SESSION['role'] == 'admin')  {
                    // Role tidak dikenali, sesuaikan dengan kebutuhan Anda
                    echo '<script>
                            alert("Halo bang Admin");
                            window.location.href = "index.php"; // Atau arahkan ke halaman default lainnya
                          </script>';
                    exit();
                }
             } else {
            // Menampilkan alert jika query gagal dieksekusi
            echo '<script>
                    alert("Query error: ' . mysqli_error($config) . '");
                    window.location.href = "login.php";
                  </script>';
        }
    } else {
        // Menampilkan alert jika koneksi database gagal
        echo '<script>
                window.location.href = "login.php";
              </script>';
    }
}}
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
<style>
    
    @import url("https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Handlee&display=swap");

    .body {
        font-family: "Manrope", sans-serif;
    }
    
    .container-login100 {
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background: #f4f4f4;
    }

    .wrap-login100 {
        width: 400px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        padding: 77px 55px 33px 55px;
        box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .login100-form-title {
        font-family: "Manrope", sans-serif;
        font-size: 30px;
        color: white;
        line-height: 1.2;
        text-align: center;
        text-transform: uppercase;
        display: block;
        background-size: cover;
        background-position: center;
        padding: 4px 15px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .label-input100 {
        font-family: "Manrope", sans-serif;
        font-size: 16px;
        color: #000;
        display: block;
    }

    .input100 {
        width: 100%;
        height: 50px;
        background: transparent;
        padding: 0 5px;
        font-weight: 200;
        color: #555;
        border: none;
        border-bottom: 2px solid #e5e5e5;
        outline: none;
        margin: 5px 0;
    }

    /* .focus-input100 {
        display: block;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: #d9534f;
        transition: 0.4s;
    } */

    .container-login100-form-btn {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 13px;
    }

    .login100-form-btn {
        font-size: 16px;
        background: #49a760;
        border: none;
        border-radius: 25px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;
        padding: 14px 40px;
        cursor: pointer;
        box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
        transition: 0.4s;
    }

    .login100-form-btn:hover {
        background: #333;
    }

    .txt1 {
        font-size: 14px;
        color: #555;
        line-height: 1.5;
        text-align: center;
    }

    a {
        color: #49a760;
        text-decoration: none;
    }

    a:hover {
        color: #333;
    }
</style>

   
    <!-- End Header -->

    <!-- Start Akun 
    ============================================= -->
            <!-- Start Tab Content -->
            <div
              class="tab-content tab-content-info"
              id="shop-tabContent"
            >
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div class="login100-form-title" style="background-image: url(assets/images/2.png);">
                            <span class="login100-form-title-1">
                                <h3>Sign In</h3>
                            </span>
                        </div>
        
                        <form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
                            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                                <span class="label-input100">Username</span>
                                <input class="input100" type="text" name="username" placeholder="Enter username">
                                <span class="focus-input100"></span>
                            </div>
        
                            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                                <span class="label-input100">Password</span>
                                <input class="input100" type="password" name="password" placeholder="Enter password">
                                <span class="focus-input100"></span>
                            </div>
        
                            <div class="flex-sb-m w-full p-b-30">
                                <div class="contact100-form-checkbox">
                                        <p style="font-family: 'Manrope', sans-serif; font-size: 14px;">Belum memiliki akun? <a href="register.php">Register di sini!</a></p>
                                </div>
        
                            </div>
        
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" name="Login" type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    
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

    <script src="main.css"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
   
  </body>
</html>
