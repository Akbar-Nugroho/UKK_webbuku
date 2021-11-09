<?php
$host = "localhost";
$user = "root";
$pass = "";
$nama_db = "web_buku"; //nama database
$koneksi = mysqli_connect($host, $user, $pass, $nama_db); //pastikan urutan nya seperti ini, jangan tertukar

if (!$koneksi) { //jika tidak terkoneksi maka akan tampil error
	die("Koneksi dengan database gagal: " . mysqli_connect_error());
}
function template_header($title)
{
	echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Website Buku Digital</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fas fa-user"></i>Admin</a>
    	</div>
    </nav>
EOT;
}
function template_footer()
{
	echo <<<EOT
    </body>
</html>
EOT;
}
