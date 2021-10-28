<!DOCTYPE html>
<html>
<head>
    <title>Program persegi panjang</title>
</head>
<body>
    <h2>Operasi Luas dan Keliling Persegi Panjang</h2>
    <form method="POST" action="no2.php">
        <table>
            <tr>
                <td>Lebar</td>
                <td>
                    <input type="text" name="lebar" size="10">
                </td>
            </tr>
            <tr>
                <td>Panjang</td>
                <td><input type="text" name="panjang" size="10"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>
    <?php 
        error_reporting(E_ALL & E_NOTICE);
        $lebar = $_POST["lebar"];
        $panjang = $_POST["panjang"];
        $submit = $_POST["submit"];

        if (isset($_POST['submit'])){
            $keliling = 2 * ($lebar + $panjang);
            $luas = $lebar * $panjang;
            echo "Lebarnya: $lebar</br>";
            echo "Panjangnya:  $panjang</br>";
            echo "Jadi keliling persegi panjang: <b>$keliling</b>";
            echo " dan luas persegi panjang: <b>$luas</b>";
        };
    ?>
</body>
</html>