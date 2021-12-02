<?php
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
}
require "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Index</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Selamat Datang</h1>
</body>
</html>