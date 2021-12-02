<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pwd");

function registrasi($data) {
	global $conn;

	$username = strtolower($data["username"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username 
	$result = mysqli_query($conn, "SELECT user FROM user WHERE user = '$username'");

	if (mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar')
				</script>";
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert ('konfirmasi password tidak sesuai')
				</script>";
		return false;
	} 

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke DB
	mysqli_query($conn, "INSERT into user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}

?>