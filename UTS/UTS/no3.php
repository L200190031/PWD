<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nomor 3</title>
</head>
<body>

    <form action="" method="POST"> 
        
        Masukkan angka 1 sampai 100:  <input type="text" name="angka">
        <button type="submit" name="submit">Proses</button>
    </form>

    <?php
    error_reporting(E_ALL & E_NOTICE);
    function ganjil($x){
        if($x % 2 == 1){
            return 1;
        }
        else return 0;
    }
    for ($bilangan =1; $bilangan <=100; $bilangan++){
        $jumlah = $jumlah + ganjil($bilangan);
    }
    echo"jumlah bilangan ganjil antara 1 sampai 100 adalah $jumlah";

    if(isset($_POST['submit'])){
        $angka=$_POST['angka'];
        if ($angka %2 == 0){
            echo "<br> $angka adalah bilangan genap";
        }

        elseif($angka %2 == 1) {
            echo "<br> $angka adalah bilangan ganjil";
        }
    }
    ?>
</body>
</html>