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

function getArtikelSebelumnya($currentId) {
    global $db;
    $query = "SELECT id FROM tbl_artikel WHERE id < $currentId ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    return ($row) ? $row['id'] : null;
}


function getArtikelSelanjutnya($currentId) {
    global $db;
    $query = "SELECT id FROM tbl_artikel WHERE id > $currentId ORDER BY id ASC LIMIT 1";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    return ($row) ? $row['id'] : null;
}



function cari($keyword) {
    $query = "SELECT * FROM tbl_artikel 
                WHERE
            judulartikel LIKE '%$keyword%' OR
            isiartikel LIKE '%$keyword%'
        ";

    return query($query);
}
?>
