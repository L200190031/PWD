<?php 
    error_reporting(E_ALL & E_NOTICE);
    $conn = mysqli_connect("localhost", "root", "","pwd");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        $noktp = htmlspecialchars($data["Noktp"]);
        $nama = htmlspecialchars($data["Nama"]);
        $alamat = htmlspecialchars($data["Alamat"]);
        $jeniskelamin = htmlspecialchars($data["Jenis_kelamin"]);
        $tempatlahir = htmlspecialchars($data["Tempat_lahir"]);
        $tanggallahir = htmlspecialchars($data["Tanggal_lahir"]);
        $status = htmlspecialchars($data["Status_wn"]);
        $pulau = htmlspecialchars(implode(', ', $data["Pulau"]));            
        $query = "INSERT INTO penduduk VALUES ('$noktp', '$nama', '$alamat', '$jeniskelamin', '$tempatlahir', '$tanggallahir', '$status', '$pulau')";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    function checkbox_radiobutton($value,$input){
        $result =  $value==$input;
        return $result;}   
    
    function hapus($id){
        global $conn;
        $query = "DELETE FROM penduduk WHERE Noktp = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    
    function edit($data){
        global $conn;
        $id = $data["Noktp"];
        $nama = htmlspecialchars($data["Nama"]);
        $alamat = htmlspecialchars($data["Alamat"]);
        $jeniskelamin = htmlspecialchars($data["Jenis_kelamin"]);
        $tempatlahir = htmlspecialchars($data["Tempat_lahir"]);
        $tanggallahir = htmlspecialchars($data["Tanggal_lahir"]);
        $status = htmlspecialchars($data["Status_wn"]);
        $pulau = htmlspecialchars(implode(', ', $data["Pulau"]));
        
        $query = "UPDATE penduduk SET 
                    Nama = '$nama', Alamat = '$alamat', Jenis_kelamin = '$jeniskelamin', Tempat_lahir = '$tempatlahir', 
                    Tanggal_lahir = '$tanggallahir', Status_wn = '$status', Pulau = '$pulau' WHERE Noktp = '$id'
                ";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
?>