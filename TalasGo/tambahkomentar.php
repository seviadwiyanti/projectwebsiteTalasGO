<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: admin/Dason-PHP/login.php");
    exit();
}
$db = mysqli_connect("localhost", "root", "", "talasgo");
if(isset($_POST["submit"])) { 
    $isi = $_POST["isi"];
    $id_user = $_SESSION["user"];
    $id_artikel = $_POST["id_artikel"];
    // Menggunakan fungsi NOW() pada MySQL untuk menyimpan tanggal secara otomatis
    $query = "INSERT INTO tbl_komentar (id_users, id_artikel, isi, tanggalkomentar) VALUES ('$id_user', '$id_artikel', '$isi', NOW())";
    mysqli_query($db, $query);
    echo "
    <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'detail-artikel.php?id=$id_artikel';
    </script>
    ";
}
?>
