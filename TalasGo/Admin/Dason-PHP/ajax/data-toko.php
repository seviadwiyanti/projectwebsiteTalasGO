<?php 
require '../functions.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM tbl_pemetaan 
                    WHERE
                   productname LIKE '%$keyword%' OR
                   manufacturername LIKE '%$keyword%'
                   ";

$data_toko = query($query);
?>

<table class="table"style="margin-bottom: 0;" >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Link G-Maps</th>
            <th>Jam Buka-Tutup</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach($data_toko as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['productname']; ?></td>
                <td><?= $row['manufacturername']; ?></td>
                <td><?= $row['manufacturerbrand']; ?></td>
                <td><?= $row['longitude']; ?></td>
                <td><?= $row['latitude']; ?></td>
                <td><a href="<?= $row['linkname']; ?>" target="_blank">Open in Google Maps</a></td>
                <td><?= $row['jamname']; ?></td>
                <td>
                    <a href="edit-data-toko.php?id=<?= $row['id']; ?>"><button type='button' class='btn btn-warning'>Edit</button></a>
                    <a href="hapus-data-toko.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm ('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>