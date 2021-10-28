<?php require 'functions.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id =$id")[0];

if(isset($_POST["submit"])){
	if(edit($_POST) > 0){
		echo "
			<script>
				alert ('Data berhasil diedit');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert ('Data gagal diedit');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
</head>
<body>
	<h1>Edit Data Mahasiswa</h1>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type='hidden' name='id' value="<?= $mhs["id"];?>">
		<input type='hidden' name='gambarLama' value="<?= $mhs["gambar"];?>">
		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>"/>
			</li>
			<li>
				<label for="nim">NIM :</label>
				<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];?>"/>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" required value="<?= $mhs["email"];?>"/>
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"];?>"/>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<img src="images/<?= $mhs["gambar"];?>" width="40">
				<input type="file" name="gambar" id="gambar" required />
			</li>
			<li>
				<button type="submit" name="submit">Edit Data</button>
			</li>
		</ul>
	</form>
</body>
</html>