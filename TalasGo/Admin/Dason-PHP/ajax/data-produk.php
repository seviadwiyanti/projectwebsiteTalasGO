<?php 
require '../functionProduk.php';

$keyword = $_GET['keyword'];

// Get paginated products
// Menggabungkan tabel tbl_produk dengan tabel users berdasarkan id_users
$query = "SELECT tbl_produk.*, users.name
          FROM tbl_produk
          INNER JOIN users ON tbl_produk.id_users = users.id_users
          WHERE tbl_produk.nama_produk LIKE '%$keyword%'";


// Eksekusi query
$produk = query($query);
?>

<?php 

?>

<!-- tabel -->
<div class="table-responsive" id="container-produk">
    <table class="table align-middle table-nowrap table-check">
        <thead class="table-light">
            <tr>
                <th style="width: 20px;" class="align-middle">
                    <div class="form-check font-size-16">
                        <input class="form-check-input" type="checkbox" id="checkAll">
                        <label class="form-check-label" for="checkAll"></label>
                    </div>
                </th>
                <th class="align-middle">ID_Users</th>
                <th class="align-middle">Nama Penjual</th>
                <th class="align-middle">ID_Produk</th>
                <th class="align-middle">Nama Produk</th>
                <th class="align-middle">Harga</th>
                <th class="align-middle">Deskripsi Produk</th>
                <th class="align-middle">Stok</th>
                <th class="align-middle">Kategori</th>
                <th class="align-middle">Gambar</th>
                <th class="align-middle">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produk as $row) : ?>
                <tr>
                    <td>
                        <div class="form-check font-size-16">
                            <input class="form-check-input" type="checkbox" id="orderidcheck<?= $row["id_produk"]; ?>">
                            <label class="form-check-label" for="orderidcheck<?= $row["id_produk"]; ?>"></label>
                        </div>
                    </td>
                    <td><?= $row["id_users"]; ?></td>
                    <td><?= $row["name"]; ?></td>
                    <td><?= $row["id_produk"]; ?></td>
                    <td><?= $row["nama_produk"]; ?></td>
                    <td><?= $row["harga"]; ?></td>
                    <td><?= $row["deskripsi_produk"]; ?></td>
                    <td><?= $row["stok"]; ?></td>
                    <td><?= $row["kategori"]; ?></td>
                    <td><?= $row["gambar"]; ?></td>
                    <td>
                        <div>
                            <a href="hapus-data-produk.php?id_produk=<?= $row["id_produk"]; ?>" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>