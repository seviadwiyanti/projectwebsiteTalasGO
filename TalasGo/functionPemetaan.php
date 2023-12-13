<?php

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

function cari($keyword) {
    $query = "SELECT * FROM tbl_pemetaan 
                WHERE
            productname LIKE '%$keyword%' OR
            manufacturername LIKE '%$keyword%'
        ";

    return query($query);
}