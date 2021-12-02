<?php 
    require "functions.php";
    $penduduk = query("SELECT * FROM penduduk ORDER BY Noktp");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h1>Data Penduduk</h1>
    <a href = "tambah.php">Tambah Data Penduduk</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Pilihan</th>
            <th>No</th>
            <th>Noktp</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Status Wn</th>
            <th>Pulau</th>
   
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($penduduk as $row) : ?>
        <tr>
            <td>
                <a href="edit.php?Noktp=<?= $row['Noktp']?>">edit</a> |
                <a href="hapus.php?Noktp=<?= $row['Noktp']?>" onclick = "return confirm ('apakah anda ingin menghapus data?');">delete</a>
            </td>
            <td><?= $i?></td>
            <td><?= $row["Noktp"];?></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Alamat"]; ?></td>
            <td><?= $row["Jenis_kelamin"]; ?></td>
            <td><?= $row["Tempat_lahir"]; ?></td>
            <td><?= $row["Tanggal_lahir"]; ?></td>
            <td><?= $row["Status_wn"]; ?></td>
            <td><?= $row["Pulau"]; ?></td>

        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>