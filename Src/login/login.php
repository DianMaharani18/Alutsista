<?php
require("../../koneksi.php");
$username = $_POST["Username"];
$password = $_POST["Pass"];

$query_sql = "SELECT * FROM tbluser WHERE Username = '$username' AND Pass = '$password'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0) {
    header("Location: ../home/home.html");
} else {
    echo "Username atau Password anda Salah" . mysqli_error($conn);
}
