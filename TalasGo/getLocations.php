<?php
// Gantilah dengan koneksi ke database dan query yang sesuai
$conn = mysqli_connect("localhost", "root", "", "talasgo");
$query = "SELECT * FROM tbl_pemetaan";
$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array(
        'latitude' => $row['latitude'],
        'longitude' => $row['longitude'],
        'Product Name ' => $row['productname'] ,
        'Manufacturer Name ' => $row['manufacturername'] , 
        'Manufacturer Brand ' => $row['manufacturerbrand'] ,
        'Link Name ' => $row['linkname'] ,
        'Jam Name ' => $row['jamname'] , 
        'Kota Kecamatan Name ' => $row['kotakecamatanname'] ,

    );
}

echo json_encode($data);

?>
