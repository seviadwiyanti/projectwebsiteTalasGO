<?php
require '../vendor/autoload.php';
session_start();
$userId = $_SESSION["user"];

use PhpOffice\PhpSpreadsheet\IOFactory;

$con = mysqli_connect('localhost', 'root', '', 'talasgo');

if (isset($_POST["import"])) {
    $excelFile = $_FILES["excel"]["tmp_name"];

    try {
        $spreadsheet = IOFactory::load($excelFile);
        $worksheet = $spreadsheet->getActiveSheet();

        // Assuming your Excel columns are: A - N (adjust as needed)
        $highestRow = $worksheet->getHighestDataRow();

        // Start from the second row (assuming the first row is header)
        for ($row = 2; $row <= $highestRow; ++$row) {
            $nama_produk = $worksheet->getCell('A' . $row)->getValue();
            $harga = $worksheet->getCell('B' . $row)->getValue();
            $deskripsi_produk = $worksheet->getCell('C' . $row)->getValue();
            $stok = $worksheet->getCell('D' . $row)->getValue();
            $kategori = $worksheet->getCell('E' . $row)->getValue();
            $gambar = $worksheet->getCell('F' . $row)->getValue();

            // Generate a unique name for the image file
            $uniqueImageName = uniqid() . '_' . $gambar;

            // Upload image to a folder
            $imageFolder = 'assets/images/produk/';
            $imagePath = $imageFolder . $uniqueImageName;
            move_uploaded_file($_FILES["excel"]["tmp_name"], $imagePath);

            // Insert data into the database
            $query = "INSERT INTO `tbl_produk` (id_users, nama_produk, harga, deskripsi_produk, stok, kategori, gambar) 
                      VALUES ($userId, '$nama_produk', '$harga', '$deskripsi_produk', '$stok', '$kategori', '$uniqueImageName')";

            mysqli_query($con, $query);
        }

        echo '<script type="text/javascript">alert("Data Imported Successfully!"); 
            window.location.href="index.php"; 
        </script>';
    } catch (Exception $e) {
        echo '<script type="text/javascript">alert("Error: ' . $e->getMessage() . '"); 
            window.location.href="index.php"; 
        </script>';
    }
}
?>