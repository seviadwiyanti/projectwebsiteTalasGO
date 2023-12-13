<?php 
require '../functionProduk.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM tbl_produk 
                    WHERE
                   nama_produk LIKE '%$keyword%' OR
                   deskripsi_produk LIKE '%$keyword%'
                   ";

$produk = query($query);
?>

<?php $i = 1; ?>
    <?php foreach($produk as $row) : ?>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="product-img position-relative">
                        <img src="assets/images/produk/<?= $row["gambar"]; ?>" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <div class="align-items-end mt-4">
                        <center><div>
                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark"><?= $row["nama_produk"] ?></a></h5>
                            <h5 class="my-0"><span class="text-muted me-2"><?= $row["harga"] ?></span></h5><p></p>
                        </div></center>
                    </div>
                    <center><div>
                        <a href="detail-produk.php?id_produk=<?= $row["id_produk"]; ?>" class="btn btn-info">Detail</a>
                        <a href="edit-produk.php?id_produk=<?= $row["id_produk"]; ?>" class="btn btn-primary">Edit</a>
                        <a href="hapus-produk.php?id_produk=<?= $row["id_produk"]; ?>" class="btn btn-danger" onclick="return confirm ('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
                    </div></center>
                </div>
            </div>
        </div>
    <?php $i++; ?>
    <?php endforeach; ?>