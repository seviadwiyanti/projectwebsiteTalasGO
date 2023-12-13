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



function hapus($id_produk) {
    global $db;
    mysqli_query($db, "DELETE FROM tbl_produk WHERE id_produk = $id_produk");

    return mysqli_affected_rows($db);
}



