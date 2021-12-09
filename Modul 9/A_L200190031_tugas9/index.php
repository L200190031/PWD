<?php
    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
	require "functions.php";
	$mahasiswa = query("SELECT * FROM mahasiswa");

    //tekan tombol cari
    if (isset ($_POST["cari"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="logout.php">Log Out</a>
    <br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Kata Pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombolcari">Cari</button>
    </form>
    <br>
    <div id="container">
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
            <td><img src="images    /<?= $row["gambar"]?>" width="50"></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>