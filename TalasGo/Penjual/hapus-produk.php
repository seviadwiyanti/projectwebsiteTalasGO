<?php
require 'functions.php';
$id_produk = $_GET["id_produk"];

if (hapus($id_produk) > 0) {
    echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
}
?>