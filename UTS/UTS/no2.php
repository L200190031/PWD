<?php 
    $NIK = array ("M001","M002","M003");
    $Nama = array ("Septiana","Rizki","Clarisa");
    $TmpLahir = array ("Solo", "Jakarta", "Surabaya");
    $TglLahir = array ("01-04-1988", "30-03-1985", "12-12-1990");
    $Usia = [];
    $Tglbaru = [];
    for ($i=0; $i < 3; $i++)  {

        $explode = explode("-",$TglLahir[$i]);
        $konv = $explode[1];
        if ($konv == '03') {
            $new = "Maret";
        }
        elseif ($konv == '04') {
            $new = "April";
        }
        elseif ($konv == '12') {
            $new = "Desember";
        }

        $Usia[] = date("Y") - $explode[2];
        $Tglbaru[] = "$explode[0] $new $explode[2]";
    }
?>
<!DOCTYPE hmtl>
<html lang="en">
<head>
    <title>Nomor 2</title>
</head>
<body>

    <table border="1"  width="500px" style="text-align: left;">
        <tr>
            <td>NIK</td>
            <td>Nama</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>Usia</td>
        </tr>
    <?php
        for ($i=0; $i < 3; $i++) { 
            echo 
            "<tr>
                <td>$NIK[$i]</td>
                <td>$Nama[$i]</td>
                <td>$TmpLahir[$i], $Tglbaru[$i]</td>
                <td>$Usia[$i]</td>
            </tr>"; 
        }
    ?>
    </table>
</body>
</html>