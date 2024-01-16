<?php
require("../../koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaLengkap = $_POST["NamaLengkap"];
    $email = $_POST["Email"];
    $noHp = $_POST["NoHp"];
    $username = $_POST["Username"];
    $password = $_POST["Pass"];

    $sql = "INSERT INTO tbluser (NamaLengkap, Email, NoHp, Username, Pass) VALUES ('$namaLengkap', '$email', '$noHp', '$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../../index.html");
    } else {
        echo "Pendaftaran Gagal : " .mysqli_error($conn);
    }
}