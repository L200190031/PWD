<?php
	require "../functions.php";
	
	$keyword = $_GET["keyword"];
	$query = "SELECT * FROM mahasiswa WHERE 
                    nama LIKE '%$keyword%' OR
                    NIM LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%' OR
                    email LIKE '%$keyword%'";
	$mahasiswa = query($query);
?>

<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><img src="images/<?= $row["gambar"]?>" width="50"></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>