<?php
require("../../koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NamaLengkap = $_POST["NamaLengkap"];
    $NoTelepon = $_POST["NoTelepon"];
    $email = $_POST["email"];
    $unitkerja = $_POST["unitkerja"];
    $NamaKegiatan = $_POST["NamaKegiatan"];
    $TanggalKegiatan = $_POST["TanggalKegiatan"];
    $WaktuKegiatan = $_POST["WaktuKegiatan"];
    $lokasi = $_POST["lokasi"];
    $InputAlat = $_POST["InputAlat"];
    $InputSR = $_POST["InputSR"];
    $InputKartu = $_POST["InputKartu"];
    $CatatanPinjam = $_POST["CatatanPinjam"];
    $TglPengambilan = $_POST["TglPengambilan"];
    $WktPengambilan = $_POST["WktPengambilan"];
    $Penanggungjwb = $_POST["Penanggungjwb"];
    $TglPengembalian = $_POST["TglPengembalian"];
    $WktPengembalian = $_POST["WktPengembalian"];
    $Kondisi = $_POST["Kondisi"];

    $sql = "INSERT INTO peminjaman (NamaLengkap, NoTelepon, email, unitkerja, NamaKegiatan, TanggalKegiatan, WaktuKegiatan, lokasi, InputAlat, InputSR, InputKartu, CatatanPinjam, TglPengambilan, WktPengambilan, Penanggungjwb, TglPengembalian, WktPengembalian, Kondisi) 
        VALUES ('$NamaLengkap', '$NoTelepon', '$email', '$unitkerja', '$NamaKegiatan', '$TanggalKegiatan', '$WaktuKegiatan', '$lokasi', '$InputAlat', '$InputSR', '$InputKartu', '$CatatanPinjam', '$TglPengambilan', '$WktPengambilan', '$Penanggungjwb', '$TglPengembalian', '$WktPengembalian', '$Kondisi')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../riwayat/riwayathtml.php");
    } else {
        echo "Input Gagal " .mysqli_error($conn);
    }
}