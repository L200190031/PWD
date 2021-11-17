<?php
error_reporting (E_ALL & E_NOTICE);
$conn = mysqli_connect("localhost", "root", "" , "pwduts");
$images = $_FILES['gambar']['name'];
$dir = "images/";
$up = $dir.$images;
move_uploaded_file($_FILES["gambar"]["tmp_name"],$up);

?>
<html>
    <head>
        <title>Upload File</title>
    </head>
    <body>
            <form method='POST' enctype="multipart/form-data" action="no4.php">
                Image file : <input type='file'name='gambar' size='20'> 
                <input type = 'submit' name='submit' value='Upload image'>
            </form>
            <?php 
                if(isset($_POST['submit']))
                {
                    $query ="INSERT into no4 (gambar) Values('$images')";
                    $hasil= mysqli_query($conn, $query);
                    echo "<img src='images/$images'> ";
                }
            ?>

    </body>
</html>
</body>
</html>