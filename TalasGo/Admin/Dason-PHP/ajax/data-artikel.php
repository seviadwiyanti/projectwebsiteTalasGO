<?php 
require '../functionArtikel.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM tbl_artikel 
                    WHERE
                   judulartikel LIKE '%$keyword%' OR
                   isiartikel LIKE '%$keyword%'
                   ";

$artikel = query($query);
?>

<?php $i = 1; ?>
<?php foreach($artikel as $row) : ?>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="product-img position-relative">
                    <img src="assets/images/artikel/<?= $row["gambar"]; ?>" alt="Foto Artikel" class="img-fluid mx-auto d-block">
                </div>
                <div class="align-items-end mt-4">
                    <center><div>
                        <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark"><?= $row["judulartikel"];?></a></h5>
                        <h5 class="my-0"><span class="text-muted me-2"><?= $row["penulis"];?></span></h5><p><?= $row["tanggalpublish"];?></p>
                    </div></center>
                </div>
                <center><div>
                    <a href="detail-artikel.php?id=<?= $row["id"]; ?>" class="btn btn-info">Detail Artikel</a>
                    <a href="ubah-artikel.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Edit</a>
                    <a href="hapus-artikel.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm ('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
                </div></center>
            </div>
        </div>
    </div>
<?php $i++; ?>
<?php endforeach; ?>