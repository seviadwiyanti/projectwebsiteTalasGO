<?php 
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "talasgo");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// function tambah($data) {
//     global $db;
//     $judulartikel = htmlspecialchars($data["judulartikel"]);
//     $isiartikel = htmlspecialchars($data["isiartikel"]);
//     $tanggalpublish = htmlspecialchars($data["tanggalpublish"]);
//     $penulis = htmlspecialchars($data["penulis"]);
    
//     // upload gambar
//     $gambar = upload();
//     if(!$gambar) {
//         return false;
//     }

//     $query = "INSERT INTO tbl_artikel
//                 VALUES
//                 ('', '$judulartikel', '$isiartikel', '$tanggalpublish', '$penulis', '$gambar')
//             ";
//     mysqli_query($db, $query);

//     return mysqli_affected_rows($db);
// }


// function upload() {
//     $namaFile = $_FILES['gambar']['name'];
//     $ukuranFile = $_FILES['gambar']['size'];
//     $error = $_FILES['gambar']['error'];
//     $tmpName = $_FILES['gambar']['tmp_name'];

//     if($error === 4) {
//         echo "<script>
//             alert('pilih gambar terlebih dahulu!');
//             </script>";
//         return false;
//     }

//     // cek apakah yang diupload adalah gambar
//     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiGambar = explode('.', $namaFile);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
//         echo "<script>
//             alert('yang Anda upload bukan gambar!');
//             </script>";
//         return false;
//     }

//     // cek jika ukuran gambar terlalu besar
//     if($ukuranFile > 10000000) {
//         echo "<script>
//             alert('ukuran gambar terlalu besar!');
//             </script>";
//         return false;
//     }

//     // lolos pengecekan
//     // generate nama gambar baru
//     $namaFileBaru = uniqid();
//     $namaFileBaru .= '.';
//     $namaFileBaru .= $ekstensiGambar;

//     move_uploaded_file($tmpName, 'assets/images/artikel/' . $namaFileBaru);
//     return $namaFileBaru;
// }

// function ubah($data) {
//     global $db;

//     $id = $data["id"];
//     $judulartikel = htmlspecialchars($data["judulartikel"]);
//     $isiartikel = htmlspecialchars($data["isiartikel"]);
//     $tanggalpublish = htmlspecialchars($data["tanggalpublish"]);
//     $penulis = htmlspecialchars($data["penulis"]);
//     $gambarLama = htmlspecialchars($data["gambarLama"]);

    
//     // cek apakah user pilih gambar baru atau tidak
//     if($_FILES['gambar']['error'] === 4) {
//         $gambar = $gambarLama;
//     } else {
//         $gambar = upload();
//     }

//     $query = "UPDATE tbl_artikel SET
//                 judulartikel = '$judulartikel', 
//                 isiartikel = '$isiartikel', 
//                 tanggalpublish = '$tanggalpublish',
//                 penulis = '$penulis',
//                 gambar = '$gambar'
//             WHERE id = $id
//                 ";
//     mysqli_query($db, $query);

//     return mysqli_affected_rows($db);
// }

// function hapus($id) {
//     global $db;
//     mysqli_query($db, "DELETE FROM tbl_artikel WHERE id = $id");

//     return mysqli_affected_rows($db);
// }


function cari($keyword) {
    $query = "SELECT * FROM tbl_produk 
                WHERE
            nama_produk LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%'
        ";

    return query($query);
}




