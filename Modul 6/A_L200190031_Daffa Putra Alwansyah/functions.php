<?php 
    $conn = mysqli_connect("localhost", "root", "", "pwd");
//QUERY  
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
//TAMBAH
    function tambah($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        
        $query = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
//HAPUS
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
//UPLOAD
    function upload(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
        
        if ($error === 4) {
            echo "<script>
                    alert('Gambar belum di upload!');
                </script>";
            return false;
        }
        
        $ekstensiGambarValid = ['png','jpg','jpeg'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo 
                "<script>
                    alert('Ekstensi gambar yang diperbolehkan adalah jpeg, jpg, dan png');
                </script>";
            return false;
        }
        
        if($ukuranFile > 5000000 ){
            echo 
                "<script>
                    alert('Gambar melebihi ukuran yang diperbolehkan');
                </script>";
            return false;
        }
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($tmpName, 'images/'. $namaFileBaru);
        return $namaFileBaru;
    }
//EDIT
    function edit($data){
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);   
        if($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        }else{
            $gambar = upload();
        }       
        $query = "UPDATE mahasiswa SET 
                    nim = '$nim', nama = '$nama', email = '$email', jurusan = '$jurusan', gambar = '$gambar'
                    WHERE id = '$id'
                ";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
?>