<?php

// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "talasgo");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $db;

    // Ambil ID pengguna dari session atau variabel yang sesuai
    $id_users = isset($_SESSION["user"]) ? $_SESSION["user"] : null;

    if ($id_users === null) {
        // Tidak dapat menambah produk jika ID pengguna tidak tersedia
        return false;
    }

    $namaProduk = htmlspecialchars($data["nama_produk"]);
    $hargaProduk = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi_produk"]);
    $stok = htmlspecialchars($data["stok"]);
    $kategori = htmlspecialchars($data["kategori"]);
    
    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO tbl_produk
                (id_users, nama_produk, harga, deskripsi_produk, stok, kategori, gambar)
                VALUES
                ('$id_users', '$namaProduk', '$hargaProduk', '$deskripsi', '$stok', '$kategori', '$gambar')
            ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}



function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4) {
        echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('yang Anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    if($ukuranFile > 10000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'assets/images/produk/' . $namaFileBaru);
    return $namaFileBaru;
}

function ubah($data) {
    global $db;

    $id_produk = $data["id_produk"];
    $namaProduk = htmlspecialchars($data["nama_produk"]);
    $hargaProduk = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi_produk"]);
    $stok = htmlspecialchars($data["stok"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    
    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE tbl_produk SET
                nama_produk = '$namaProduk', 
                harga = '$hargaProduk', 
                deskripsi_produk = '$deskripsi',
                stok = '$stok',
                kategori = '$kategori',
                gambar = '$gambar'

            WHERE id_produk = $id_produk
                ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id_produk) {
    global $db;
    mysqli_query($db, "DELETE FROM tbl_produk WHERE id_produk = $id_produk");

    return mysqli_affected_rows($db);
}


// function cari($keyword) {
//     $query = "SELECT * FROM tbl_produk 
//                 WHERE
//             nama_produk LIKE '%$keyword%' OR
//             deskripsi_produk LIKE '%$keyword%'
//         ";

//     return query($query);
// }




