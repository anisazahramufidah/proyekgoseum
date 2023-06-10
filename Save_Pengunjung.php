<?php
require 'Koneksi.php';

$nama_pengunjung = $_POST['nama_pengunjung'];
$tanggal_kunjungan = $_POST['tanggal_kunjungan'];
$alamat_pengunjung = $_POST['alamat_pengunjung'];
$no_hp = $_POST['no_hp'];
$kunjungan_museum = $_POST['kunjungan_museum'];

$sql = "INSERT INTO pengunjung (nama_pengunjung,tanggal_kunjungan,alamat_pengunjung,no_hp,kunjungan_museum) 
        VALUES ('$nama_pengunjung','$tanggal_kunjungan','$alamat_pengunjung','$no_hp','$kunjungan_museum')";

if ($host->query($sql) === TRUE) {
    echo "Add Data Pengunjung successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $host->error;
}

// Close the database connection
$host->close();
?>