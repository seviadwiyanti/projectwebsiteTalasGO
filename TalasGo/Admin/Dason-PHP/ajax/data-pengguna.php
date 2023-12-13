<?php 
require '../functionuser.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM users 
                    WHERE
                   name LIKE '%$keyword%' OR
                   role LIKE '%$keyword%'
                   ";

$data_pengguna = query($query);
?>

<!-- tabel -->
<div class="table-responsive" id="container-pengguna">
    <table class="table align-middle table-nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php $i = 1; ?>
        <?php foreach($data_pengguna as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><p class="mb-0"><?= $row['email']; ?></p></td>
                <td><?= $row['role']; ?></td>
                <td><a href="hapus-pengguna.php?id=<?= $row["id_users"]; ?>" class="btn btn-danger" onclick="return confirm ('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a></td>
        <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>