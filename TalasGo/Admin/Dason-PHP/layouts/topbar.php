<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once "config.php";

// Periksa apakah kunci 'user' ada dalam $_SESSION
if (!isset($_SESSION['auth'])) {
    // Redirect ke halaman login atau tindakan lain jika diperlukan
    header('Location: Admin/Dason-PHP/login.php');
    exit();
}

$id_user = $_SESSION['user'];

$userResult = mysqli_query($config, "SELECT * FROM users WHERE id_users='$id_user'");

if (!$userResult) {
    die('Query Error: ' . mysqli_error($config));
}

if (mysqli_num_rows($userResult) >= 1) {
    $user = mysqli_fetch_array($userResult);

    // Pastikan $user tidak null sebelum mengakses offset
    if (!is_null($user)) {
        // ... (lanjutan kode Anda)
    } else {
        die('User data is null');
    }
} else {
    die('No user found');
}
?>
 
 <header id="page-topbar">
     <div class="navbar-header">
         <div class="d-flex">
             <!-- LOGO -->
             <div class="navbar-brand-box">
                 <a href="Dason-PHP" class="logo logo-dark">
                     <span class="logo-sm">
                         <img src="assets/images/logo-sm.svg" alt="" height="30">
                     </span>
                     <span class="logo-lg">
                         <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt"></span>
                     </span>
                 </a>

                 <a href="/Dason-PHP" class="logo logo-light">
                     <span class="logo-sm">
                         <img src="assets/images/logo talas.png" alt="" height="45">
                     </span>
                     <span class="logo-lg">
                         <img src="assets/images/LogoTalasGO.png" alt="" height="40"> <span class="logo-txt"></span>
                     </span>
                 </a>
             </div>

             <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                 <i class="fa fa-fw fa-bars"></i>
             </button>

             <!-- App Search-->
             <!-- <form class="app-search d-none d-lg-block">
                 <div class="position-relative">
                     <input type="text" class="form-control" placeholder="Cari...">
                     <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                 </div>
             </form> -->
         </div>

         <div class="d-flex">

             <div class="dropdown d-inline-block d-lg-none ms-2">
                 <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i data-feather="search" class="icon-lg"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                     <form class="p-3">
                         <div class="form-group m-0">
                             <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                 <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
             
             <div class="dropdown d-none d-sm-inline-block">
                 <button type="button" class="btn header-item" id="mode-setting-btn">
                     <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                     <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                 </button>
             </div>


             <div class="dropdown d-inline-block">
                 <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img class="rounded-circle header-profile-user user-profile-image" src="assets/images/users/avatar-1.jpg" alt="Header Avatar" id="user_image">
                     <span class="d-none d-xl-inline-block ms-1 fw-medium setting_user_name" id="setting_user_name"><?= $user['username']; ?></span>
                     <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-end">
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                 </div>
             </div>

         </div>
     </div>
 </header>