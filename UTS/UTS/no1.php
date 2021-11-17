<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nomor 1</title>
</head>
<body>
    <a>Toko Alat Tulis</a>
    <form method="POST" action="no1.php">
        <table border="0"> 
            <tr>
                <td>
                    <select name="list">
                        <option>Ballpoint</option>
                        <option>Buku Tulis</option>
                        <option selected>Pensil</option>
                    </select>
                </td>
                <td>
                    Harga:<input type="text" name="harga">
                </td>
                <td>
                    Jumlah Pesanan:<input type="text" name="jumlah">
                </td>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>

    </form>
    <?php
        if (isset($_POST['submit'])){
            $list = $_POST['list'];
            $harga = $_POST['harga'];
            $jumlah = $_POST['jumlah'];
            $totalharga = $harga * $jumlah;

            echo "Anda memesan $jumlah $list dengan total harga $totalharga";
            echo "<br>";
            echo "Terimakasih atas kesedian anda memesan barang kami!";

        }
    ?>
</body>
</html>