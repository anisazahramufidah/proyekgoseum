<?php
require 'Koneksi.php';

$nama_museum = $_POST['nama_museum'];
$deskripsi_museum = $_POST['deskripsi_museum'];
$lokasi_museum = $_POST['lokasi_museum'];
$harga_tiket = $_POST['harga_tiket'];

$sql = "INSERT INTO museum (nama_museum, deskripsi_museum, lokasi_museum, harga_tiket) 
        VALUES ('$nama_museum', '$deskripsi_museum', '$lokasi_museum', '$harga_tiket')";

if ($host->query($sql) === TRUE) {
    echo "Add Data Museum successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $host->error;
}

// Close the database connection
$host->close();
?>
