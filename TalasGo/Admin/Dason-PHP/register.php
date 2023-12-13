<?php 
    session_start();
    include_once "layouts/config.php";

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $username =$_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $role = $_POST['role'];
        $nomorwa = $_POST['nomorwa'];

        $insert = mysqli_query($config, "INSERT INTO users (name,username,email,password,role,nomorwa) VALUES ('$name','$username','$email','$password','$role','$nomorwa')");
        if($insert){
            // echo "<script>alert('Registrasi Berhasil')</script>";
            $_SESSION['message'] = "Register Berhasil";
            header('Location: login.php');
        }
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


    <!-- ========== End Stylesheet ========== -->
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Handlee&display=swap");

    body {
        font-family: "Manrope", sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .limiter {
        width: 100%;
        margin: 0 auto;
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
        margin-bottom: 15px;
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
        margin-bottom: 15px;;
    }

    .label-input100 {
        font-size: 16px;
        color: #000;
        display: block;
        margin-top: 12px;
    }

    .input100 {
        font-family: "Manrope", sans-serif;
        width: 100%;
        height: 50px;
        background: transparent;
        padding: 0 5px;
        color: #555;
        border: none;
        border-bottom: 2px solid #e5e5e5;
        outline: none;
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
        font-family: "Manrope", sans-serif;
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

    /* .txt1 {
        font-family: "Manrope", sans-serif;
        font-size: 14px;
        color: #FFF;
        line-height: 1.5;
        text-align: center;
    } */

    a {
        color: #49a760;
        text-decoration: none;
    }

    a:hover {
        color: #333;
    }

    .roleusers {
        font-size: 12px;
        color: #555;
        font-weight: 400;
    }
</style>

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
      
      <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Akun 
    ============================================= -->
            
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div class="login100-form-title" style="background-image: url(assets/images/2.png);">
                            <span class="login100-form-title-1">
                                <h3>Sign Up</h3>
                            </span>
                        </div>
                        <form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
                            <div class="wrap-input100 validate-input" data-validate="name is required">
                                <span class="label-input100">Name</span>
                                <input class="input100" type="text" name="name" placeholder="Enter name" required>
                            </div>
                            
                            <div class="wrap-input100 validate-input" data-validate="Username is required">
                                <span class="label-input100">Username</span>
                                <input class="input100" type="text" name="username" placeholder="Enter username" required>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="email is required">
                                <span class="label-input100">Email</span>
                                <input class="input100" type="email" name="email" placeholder="Enter email" required>
                            </div>
        
                            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <span class="label-input100">Password</span>
                                <input class="input100" type="password" name="password" placeholder="Enter password" required>
                            </div>
                        
                            <div class="wrap-input100 validate-input" data-validate = "Role is required" required>
                                <span class="label-input100">Role</span>
                                <input type="radio" id="User" name="role" value="User">
                                <label class="roleusers" for="User">User</label><br>
                                <input type="radio" id="Penjual" name="role" value="Penjual">
                                <label class="roleusers" for="Penjual">Penjual</label><br>
                            </div>
                            
                            <div class="wrap-input100 validate-input">
                                <span class="label-input100">Nomor Whatsapp</span>
                                <input class="input100" type="text" name="nomorwa" placeholder="Wajib isi jika penjual (Contoh: 6282269075325)">
                            </div>
                            
                            <div class="flex-sb-m w-full p-b-30">
                                <div class="contact100-form-checkbox">
                                        <p style="font-family: 'Manrope', sans-serif; font-size: 14px;">Sudah memiliki akun? <a href="login.php">Login di sini!</a></p>
                                </div>
        
                            </div>
        
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" name="register" type="submit">
                                    Daftar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

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
