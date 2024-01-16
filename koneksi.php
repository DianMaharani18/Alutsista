<?php
$servername = "localhost";
$database = "Alutsista";
$username = "root";  // Tambahkan tanda titik koma di sini
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal : " .mysqli_connect_error());
} else {
    echo "";
}
