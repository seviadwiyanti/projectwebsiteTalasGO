<?php
include_once "config.php";
$id = $_SESSION['id'];
$user = mysqli_query($conn, "SELECT * FROM tbl_penjual WHERE id='$id'");
$user = mysqli_fetch_array($user);
?>