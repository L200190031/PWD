<?php require "functions.php";
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0){
        echo 
        "<script>
            alert('Data berhasil ditambahkan');document.location.href = 'index.php';
        </script> ";
    }else{
        echo 
        "<script>
            alert('Data gagal untuk ditambahkan!');document.location.href = 'index.php';
        </script>";
        }
}
?>
<html>
<head><title>Tambah Data Penduduk</title></head>
<body>
    <h1>Tambah Data Penduduk</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="Noktp">Noktp</label></td>
                <td width='5'> : </td>
                <td><input type="text" name="Noktp" id="Noktp" required/></td></tr>
            <tr>
                <td><label for="Nama">Nama</label></td>
                <td width='5'> : </td>
                <td><input type="text" name="Nama" id="Nama" required/></td></tr>
            <tr>
                <td><label for="Alamat">Alamat</label></td>
                <td width='5'> : </td>
                <td><input type="text" name="Alamat" id="Alamat" required/></td></tr>
            <tr>
                <td><label for="Jenis_kelamin">Jenis Kelamin</label></td>
                <td width='5'> : </td>
                <td><input type="text" name="Jenis_kelamin" id="Jenis_kelamin" required/></td></tr>
            <tr>
                <td><label for="Tempat_lahir">Tempat Lahir</label></td>
                <td width='5'> : </td>
                <td><input type="text" name="Tempat_lahir" id="Tempat_lahir" required/></td></tr>
            <tr>
                <td><label for="Tempat_lahir">Tanggal Lahir</label></td>
                <td width='5'> : </td>
                <td><input type="text" name="Tanggal_lahir" id="Tanggal_lahir" required/></td></tr>
            <tr>
                <td><label for="Status_wn">Status WN</label></td>
                <td width='5'> : </td>
                <td><input type="radio" name="Status_wn" value="WNI" <?php echo checkbox_radiobutton("WNI", $row['Status_wn'])?>>WNI
                    <input type="radio" name="Status_wn" value="WNA" <?php echo checkbox_radiobutton("WNA", $row['Status_wn'])?>>WNA
                </td>
            </tr>
            <tr>
                <td><label for="Pulau">Pulau</label></td>
                <td width='5'> : </td>
                <td>
                    <input type="checkbox" name="Pulau[]" value="Jawa">Jawa
                    <input type="checkbox" name="Pulau[]" value="Sumatra">Sumatra
                    <input type="checkbox" name="Pulau[]" value="Kalimantan">Kalimantan
                    <input type="checkbox" name="Pulau[]" value="Papua">Papua
            </tr>              
            <tr>
                <td><button type="submit" name="submit">Tambah Data</button></td>
                <td><input type="button" name="Kembali" value="Kembali" onclick="document.location.href='index.php'"></td>
            </tr>

        </table>
    </form>
</body>
</html>