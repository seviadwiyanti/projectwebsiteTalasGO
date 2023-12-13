<?php
include_once "conn.php";

$query = "SELECT * FROM tbl_pemetaan";
$result = mysqli_query($conn, $query);

// Check if there are rows in the result
if(mysqli_num_rows($result) > 0){
    $data_toko = mysqli_fetch_all($result, MYSQLI_ASSOC);
}else{
    $data_toko = []; // Set empty array if no rows are found
}

header('Content-Type: application/json');
echo json_encode($data_toko);
