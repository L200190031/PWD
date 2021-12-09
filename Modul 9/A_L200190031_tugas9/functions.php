<?php
    $conn = mysqli_connect("localhost", "root", "", "pwd");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    function registrasi($data){
        global $conn;

        $username = strtolower($data["username"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //Cek Username
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('Username Sudah Terdaftar')
                    </script>";
            return false;
        }

        //Cek Konfirmasi Password
        if ($password !== $password2) {
            echo "<script>
                    alert('Konfirmasi Password Tidak Sesuai')
                </script>";
            return false;
        }

        //Enkripsi Password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //Tambahkan User Baru Ke DB
        mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password')");
        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM mahasiswa WHERE 
                    nama LIKE '%$keyword%' OR
                    NIM LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%' OR
                    email LIKE '%$keyword%'
                    ";
        return query($query);
    }
?>