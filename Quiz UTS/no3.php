<?php 
        error_reporting(E_ALL & E_NOTICE);
        $nilaiA = $_POST['nilaiA'];
        $nilaiB = $_POST['nilaiB'];
        $hasil = $_POST['hasil'];
        if (isset($_POST['submit1'])){
            $hasil = $nilaiA * $nilaiB;};
        if (isset($_POST['submit2'])){
            $hasil = $nilaiA / $nilaiB;};?>
<!DOCTYPE html>
<html>
<head>
    <title>Program persegi panjang</title>
</head>
<body>
    <h2>Operasi Perkalian dan Pembagian</h2>
    <form method="POST" action="no3.php">
        <table>
            <tr>
                <td>Nilai A</td>
                <td>:</td>
                <td colspan='2'><input type="text" name="nilaiA" size="5" value="<?=$nilaiA?>"></td></tr>
            <tr>
                <td>Nilai B</td>
                <td>:</td>
                <td colspan='2'><input type="text" name="nilaiB" size="5" value="<?=$nilaiB?>"></td></tr>
            <tr>
                <td></td>
                <td></td>
                <td ><input type="submit" name="submit1" value="Kali"> <input type="submit" name="submit2" value="Bagi"></td></tr>
            <tr>
                <td>Hasil</td>
                <td>:</td>
                <td colspan='2'><input type="text" name="hasil" value="<?=$hasil?>"></td></tr>
    </form>    
</body>
</html>