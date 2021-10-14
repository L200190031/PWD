<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
    <?php
   
        $tr =[
        ["001","Sabun",4,2000],
        ["002","Permen",10,500],
        ["003","Tisu",2,10000],
        ["004","Sampo",1,45500]
        ];

        $tot = 0;
        for ($i=0; $i < 4; $i++){
            $tot += $tr[$i][2] * $tr[$i][3];
        }
    ?>

    <table border="2" cellpadding="7">
        <tr>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Jumlah Harga</td>
            <td>Satuan</td>
        </tr>
        
    <?php 
    foreach ($tr as $trs){ ?>
        <tr>
            <?php
            for ($x=0; $x < 4; $x++){
                echo "<td>  $trs[$x] </td>";
            }
            ?>
            <?php } ?>
            </tr>
            <tr>
                <td colspan="3">total</td>
                <td><?php echo $tot ?></td>
            </tr>      
        </table>    


</body>
</html>