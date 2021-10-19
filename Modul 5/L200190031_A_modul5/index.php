<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * from mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- L200190031 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1; ?>    
        <?php foreach ($mahasiswa as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><a href="edit.php">Edit</a> |
            <a href="delete.php">Delete</a></td>
            <td><?=$row["nim"];?></td>
            <td><?=$row["nama"];?></td>
            <td><?=$row["email"];?></td>
            <td><?=$row["jurusan"];?></td>
            <td><img src="images/<?=$row["gambar"];?>" width="50"></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>