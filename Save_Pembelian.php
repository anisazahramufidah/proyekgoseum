<?php
require 'Koneksi.php';

$tiket_kunjungan = $_POST['tiket_kunjungan'];
$tujuan_kunjungan = $_POST['tujuan_kunjungan'];
$tanggal_pembelian = $_POST['tanggal_pembelian'];
$daftar_harga = $_POST['daftar_harga'];
$metode_transaksi = $_POST['metode_transaksi'];

$sql = "INSERT INTO pembelian (tiket_kunjungan,tujuan_kunjungan,tanggal_pembelian,daftar_harga,metode_transaksi) 
        VALUES ('$tiket_kunjungan','$tujuan_kunjungan','$tanggal_pembelian','$daftar_harga','$metode_transaksi')";

if ($host->query($sql) === TRUE) {
    echo "Add Pembelian successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $host->error;
}

// Close the database connection
$host->close();
?>