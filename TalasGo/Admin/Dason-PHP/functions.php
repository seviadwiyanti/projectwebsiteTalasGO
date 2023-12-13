<?php


// function buat menu pemetaan

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

    $id = $data["id"];
    $productname = htmlspecialchars($data["productname"]);
    $manufacturername = htmlspecialchars($data["manufacturername"]);
    $manufacturerbrand = htmlspecialchars($data["manufacturerbrand"]);
    $longitude = htmlspecialchars($data["longitude"]);
    $latitude = htmlspecialchars($data["latitude"]);
    $linkname = htmlspecialchars($data["linkname"]);
    $jamname = htmlspecialchars($data["jamname"]);
    $kotakecamatanname = htmlspecialchars($data["kotakecamatanname"]);

    

    $query = "UPDATE tbl_pemetaan SET
                productname = '$productname', 
                manufacturername = '$manufacturername', 
                manufacturerbrand = '$manufacturerbrand',
                longitude = '$longitude',
                latitude = '$latitude',
                linkname = '$linkname',
                jamname = '$jamname',
                kotakecamatanname = '$kotakecamatanname'
            WHERE id = $id
                ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM tbl_pemetaan WHERE id = $id");

    return mysqli_affected_rows($db);
}


function cari($keyword) {
    $query = "SELECT * FROM tbl_artikel 
                WHERE
            judulartikel LIKE '%$keyword%' OR
            isiartikel LIKE '%$keyword%'
        ";

    return query($query);
}



