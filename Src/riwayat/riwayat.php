<?php
require("../../koneksi.php");

// Retrieve data from the database
$sql = "SELECT NamaLengkap, TanggalKegiatan, TglPengambilan, TglPengembalian FROM peminjaman";
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Display the data in a table
echo "<table border='1'>";
echo "<tr><th>Nama Peminjam</th><th>Tanggal Kegiatan</th><th>Tanggal Pengambilan</th><th>Tanggal Pengembalian</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['NamaLengkap'] . "</td>";
    echo "<td>" . $row['TanggalKegiatan'] . "</td>";
    echo "<td>" . $row['TglPengambilan'] . "</td>";
    echo "<td>" . $row["TglPengembalian"] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Close the connection
mysqli_close($conn);
