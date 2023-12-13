<?php
session_start();
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

$con = mysqli_connect('localhost', 'root', '', 'talasgo');


$output = '';
if (isset($_POST["export"])) {
    $userId = $_SESSION["user"];
    $qry = "SELECT * FROM `tbl_produk` WHERE id_users=$userId";
    $res = mysqli_query($con, $qry);

    if (mysqli_num_rows($res) > 0) {
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getActiveSheet()->setTitle('Produk Data');

        // Set column width
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(15);

        // Set row height
        $spreadsheet->getActiveSheet()->getRowDimension(1)->setRowHeight(20); // Set the height of the first row

        $spreadsheet->getActiveSheet()->setCellValue('A1', 'Nama Produk');
        $spreadsheet->getActiveSheet()->setCellValue('B1', 'Harga');
        $spreadsheet->getActiveSheet()->setCellValue('C1', 'Deskripsi');
        $spreadsheet->getActiveSheet()->setCellValue('D1', 'Stok');
        $spreadsheet->getActiveSheet()->setCellValue('E1', 'Kategori');
        $spreadsheet->getActiveSheet()->setCellValue('F1', 'Gambar');

        // Make the header row bold
        $spreadsheet->getActiveSheet()->getStyle('A1:F1')->getFont()->setBold(true);

        $row = 2;

        while ($data = mysqli_fetch_array($res)) {
            $nama_produk = $data['nama_produk'];
            $harga = $data['harga'];
            $deskripsi_produk = $data['deskripsi_produk'];
            $stok = $data['stok'];
            $kategori = $data['kategori'];
            $gambar = $data['gambar'];

            // Assuming $gambar is the name returned by the upload function
            $imagePath = 'assets/images/produk/' . $gambar;

            $spreadsheet->getActiveSheet()->setCellValue('A' . $row, $nama_produk);
            $spreadsheet->getActiveSheet()->setCellValue('B' . $row, $harga);
            $spreadsheet->getActiveSheet()->setCellValue('C' . $row, $deskripsi_produk);
            $spreadsheet->getActiveSheet()->setCellValue('D' . $row, $stok);
            $spreadsheet->getActiveSheet()->setCellValue('E' . $row, $kategori);

            // Add image to Excel
            $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
            $drawing->setPath($imagePath);
            $drawing->setCoordinates('F' . $row);
            $drawing->setWidth(100);
            $drawing->setHeight(100);
            $drawing->setWorksheet($spreadsheet->getActiveSheet());

            // Set row height for each row
            $spreadsheet->getActiveSheet()->getRowDimension($row)->setRowHeight(100); // Set the height of each data row

            $row++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="dataProduk.xls"');
        header('Cache-Control: max-age=0');

        $writer = new Xls($spreadsheet);
        $writer->save('php://output');
        exit;
    } else {
        echo '<script type="text/javascript">alert("Record Not Found! Select Correct Date Range"); 
            window.location.href="index.php"; 
        </script>';
    }
}
?>
