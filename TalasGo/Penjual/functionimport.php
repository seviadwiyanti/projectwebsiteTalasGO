<?php 

$db = mysqli_connect("localhost", "root", "", "talasgo");
function importFromExcel($excelData) {
    global $db;

    // Ambil ID pengguna dari session atau variabel yang sesuai
    $id_users = isset($_SESSION["user"]) ? $_SESSION["user"] : null;

    if ($id_users === null) {
        // Tidak dapat menambah produk jika ID pengguna tidak tersedia
        return false;
    }

    foreach ($excelData as $data) {
        // Check if any of the required fields are empty
        if (empty($data[0]) || empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) || empty($data[5])) {
            // Handle empty data, maybe skip the row or show an error message
            continue;
        }

        // Assuming your Excel columns are in order: Nama Produk, Harga, Deskripsi, Stok, Kategori, Gambar
        $namaProduk = mysqli_real_escape_string($db, $data[0]);
        $hargaProduk = mysqli_real_escape_string($db, $data[1]);
        $deskripsi = mysqli_real_escape_string($db, $data[2]);
        $stok = mysqli_real_escape_string($db, $data[3]);
        $kategori = mysqli_real_escape_string($db, $data[4]);
        $gambar = mysqli_real_escape_string($db, $data[5]);

        $query = "INSERT INTO tbl_produk
                    (id_users, nama_produk, harga, deskripsi_produk, stok, kategori, gambar)
                    VALUES
                    ('$id_users', '$namaProduk', '$hargaProduk', '$deskripsi', '$stok', '$kategori', '$gambar')
                ";

        echo $query . "<br>"; // Tambahkan ini untuk melihat query yang dijalankan

        mysqli_query($db, $query);
    }

    return true;
}
