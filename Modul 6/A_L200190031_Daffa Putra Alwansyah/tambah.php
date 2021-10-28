<?php
require 'functions.php';

//cek tombol submit sudah ditekan atau belom
if (isset($_POST["submit"])) {
    //cek jika berhasil ditambahkan
    if (tambah($_POST) > 0){
        echo 
            "<script>
				alert('Data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script> ";
    }else{
        echo 
            "<script>
				alert('Data gagal untuk ditambahkan');
				document.location.href = 'index.php';
			</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required/>
        </li>
        <li>
            <label for="nim">NIM :</label>
            <input type="text" name="nim" id="nim" required/>
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" required/>
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan" required/>
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <input type="file" name="gambar" id="gambar" required/>
        </li>
        <li>
        <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
    </form>
</body>
</html>