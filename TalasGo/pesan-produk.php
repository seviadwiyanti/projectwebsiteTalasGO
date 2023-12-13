<?php
// Periksa apakah data POST atau GET telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_GET["quantity"])) {
    // Mengambil nilai dari input
    $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : $_GET["quantity"];

    // Lakukan sesuatu dengan nilai $quantity, misalnya simpan ke database atau lakukan operasi lainnya
    echo "Jumlah yang dimasukkan: " . $quantity;
}
?>