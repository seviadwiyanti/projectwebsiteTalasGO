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


function ubah($data) {
    global $db;

    $id = $data["id_users"];
    $name = htmlspecialchars($data["name"]);
    $email = htmlspecialchars($data["email"]);
    $username = htmlspecialchars($data["username"]);
    $role = htmlspecialchars($data["role"]);

    

    $query = "UPDATE users SET
                name = '$name', 
                email = '$email', 
                username = '$username',
                role = '$role',
            WHERE id = $id
                ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;

    // Hapus data terkait di tabel tbl_ulasan
    mysqli_query($db, "DELETE FROM tbl_ulasan WHERE id_produk IN (SELECT id_produk FROM tbl_produk WHERE id_users = $id)");

    // Hapus data terkait di tabel tbl_produk
    mysqli_query($db, "DELETE FROM tbl_produk WHERE id_users = $id");

    // Hapus data terkait di tabel tbl_testimoni
    mysqli_query($db, "DELETE FROM tbl_testimoni WHERE id_users = $id");

    // Hapus data terkait di tabel tbl_komentar
    mysqli_query($db, "DELETE FROM tbl_komentar WHERE id_users = $id");

    // Hapus data di tabel users
    mysqli_query($db, "DELETE FROM users WHERE id_users = $id");

    return mysqli_affected_rows($db);
}





function cari($keyword) {
    $query = "SELECT * FROM users 
                WHERE
            name LIKE '%$keyword%' OR
            role LIKE '%$keyword%'
        ";

    return query($query);
}