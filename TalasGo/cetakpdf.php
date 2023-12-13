<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();
require "functionArtikel.php";
$id = $_GET['id'];
$artikel = query("SELECT * FROM tbl_artikel WHERE id = $id");


$mpdf = new \Mpdf\Mpdf();
$mpdf->showImageErrors = true;

$html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="TalasGo - Budidaya Talas"
    />

    <title>TalasGo - Budidaya Talas</title>

    <link
      rel="shortcut icon"
      href="assets/img/logo talas.png"
      type="image/x-icon"
    />

    <link rel="stylesheet" href="assets/css/print.css">

  </head>

  <body>
  <div class="blog-area single full-blog full-blog default-padding atas">
    <div class="container">
      <div class="blog-items">
        <div class="row">
          <div class="blog-content col-lg-10 offset-lg-1 col-md-12">'; 

          foreach($artikel as $row) {
            $html .= "<h1>" . $row["judulartikel"] ."</h1>";
            
            $html .= '<div class="blog-style-two item">
                <div class="thumb">
                    <a href="#">
                        <img src="Admin/Dason-PHP/assets/images/artikel/'. $row["gambar"] .'" alt="Thumb"/>
                    </a>
                    <div class="date">';
                    
            // Tanggal dari database
            $tanggal_database = $row["tanggalpublish"];
            
            // Ubah format tanggal
            $tanggal_timestamp = strtotime($tanggal_database);
            
            // Pisahkan tanggal, bulan, dan tahun
            $tanggal = date("d", $tanggal_timestamp);
            $bulan = date("F", $tanggal_timestamp);
            $tahun = date("Y", $tanggal_timestamp);
            
            // Tampilkan tanggal, bulan, dan tahun secara terpisah
            $html .= "<br>" . "Tanggal publish: " . $tanggal . " " . $bulan . " " . " " . $tahun . "<br>";
            $html .= "Penulis: " . "<strong>" . $row["penulis"] ."</strong>";
            
            
            $db = mysqli_connect("localhost", "root", "", "talasgo");
            $id_artikel = $_GET["id"];
            $query = "SELECT COUNT(*) AS comment_count FROM tbl_komentar WHERE id_artikel = $id_artikel";
            $result = mysqli_query($db, $query);
            $rowKomen = mysqli_fetch_assoc($result);
            
            $html .= '
                            </li>
                        </ul>
                    </div>
                    '. htmlspecialchars_decode($row["isiartikel"]) .'
                </div>
            </div>';
        } // endforeach
        

        $html .= '
      </div>
    </div>
  </div>
</div>
</body>';

$mpdf->WriteHTML($html);
$filename = "artikel.pdf";

// Output the PDF with the specified filename
$mpdf->Output($filename, 'D');

?>