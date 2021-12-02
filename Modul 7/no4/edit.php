<?php require 'functions.php';

$id = $_GET["Noktp"];
$pnd = query("SELECT * FROM penduduk WHERE Noktp =$id")[0];

if(isset($_POST["submit"])){
	if(edit($_POST) > 0){
		echo "
			<script>
                alert ('Data berhasil diedit');document.location.href = 'index.php';
            </script>";
    }else{
		echo "
			<script>
                alert ('Data gagal diedit');document.location.href = 'index.php';
            </script>";
        }
}
?>
<html>
<head>
	<title>Edit Data Penduduk</title>
</head>
<body>
	<h1>Edit Data Penduduk</h1>
	<form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                 <label for="Noktp">Noktp</label></td>
                 <input type="text" name="Noktp" id="Noktp" required value="<?= $pnd["Noktp"];?>"/>
            </li>
            <li>
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" id="Nama" required value="<?= $pnd["Nama"];?>"/>
            </li>
            <li>
                 <label for="Alamat">Alamat</label>
                 <input type="text" name="Alamat" id="Alamat" required value="<?= $pnd["Alamat"];?>"/>
            </li>
            <li>
                    <label for="Jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="Jenis_kelamin" id="Jenis_kelamin" required value="<?= $pnd["Jenis_kelamin"];?>"/>
            </li>
            <li>
                    <label for="Tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="Tempat_lahir" id="Tempat_lahir" required value="<?= $pnd["Tempat_lahir"];?>"/>
            </li>
            <li>
                    <label for="Tanggal_lahir">Tanggal Lahir</label>
                    <input type="text" name="Tanggal_lahir" id="Tanggal_lahir" required value="<?= $pnd["Tanggal_lahir"];?>"/>
            </li>
            <li>
                    <label for="Status_wn">Status WN</label>
                    <input type="radio" name="Status_wn" value="WNI" <?php echo checkbox_radiobutton("WNI", $row['Status_wn'])?>>WNI
                    <input type="radio" name="Status_wn" value="WNA" <?php echo checkbox_radiobutton("WNA", $row['Status_wn'])?>>WNA
                    
            </li>
            <li>
                    <label for="Pulau">Pulau</label>
                    <input type="checkbox" name="Pulau[]" value="Jawa">Jawa
                    <input type="checkbox" name="Pulau[]" value="Sumatra">Sumatra
                    <input type="checkbox" name="Pulau[]" value="Kalimantan">Kalimantan
                    <input type="checkbox" name="Pulau[]" value="Papua">Papua
            </li>
            <li>
                    <button type="submit" name="submit">Edit Data</button>
                    <input type="button" name="Kembali" value="Kembali" onclick="document.location.href='index.php'">
            </li>
        </ul>

    </form>
</body>
</html>