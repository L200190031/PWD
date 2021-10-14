<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>
    <form action="latihan3.php" method="POST">
        <table>
            <tr>
                <td>Ketikan kalimat apasaja</td>
                <td><input type="text" name="text"></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
    $submit = $_POST["submit"];
    $txt = $_POST["text"];
    

    if($submit){
        echo "hasil submit: ". $txt ."<br>";
        echo "huruf vokal: ".preg_match_all('/[AUIEOauieo]/i',$txt)."<br>";
        echo "huruf konsonan: ".preg_match_all('/[BCDFGHJKLMNPQRSTVWXYZbcdfghjklmnpqrstvwxyz]/i',$txt)."<br>";
    }
    ?>
</body>
</html>