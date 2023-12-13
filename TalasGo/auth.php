<?php 
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: /Admin/Dason-PHP/login.php');
}

?>