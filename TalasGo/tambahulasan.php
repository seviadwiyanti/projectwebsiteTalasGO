<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: admin/Dason-PHP/login.php");
    exit();
}
$db = mysqli_connect("localhost", "root", "", "talasgo");
if(isset($_POST["submit"])) { 
    $isi =  $_POST["isi"];
    $id_user = $_SESSION["user"];
    $id_produk = $_POST["id_produk"];
    $query = "INSERT INTO tbl_ulasan
    VALUES
    ('', '$id_user', '$id_produk', '$isi')
        ";
    mysqli_query($db, $query);
    echo "
    <script>
        alert('Ulasan berhasil ditambahkan');
        document.location.href = 'detail-produk.php?id=$id_produk';
    </script>
";
}
?>
