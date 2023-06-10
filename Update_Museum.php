<?php

// include("Koneksi.php");

include 'Koneksi.php';
$id_museum = $_GET['update'];
$sql = "select * from `museum` where id_tour = $id_museum";
$result = mysqli_query($host, $sql);
$row = mysqli_query($result);
$nama_museum = $row['nama_museum'];
$deskripsi_museum = $row['deskripsi_museum'];
$lokasi_museum = $row['lokasi_museum'];
$harga_tiket = $row['harga_tiket'];


if (isset($_POST['submit'])) {
$nama_museum = $_POST['nama_museum'];
$deskripsi_museum = $_POST['deskripsi_museum'];
$lokasi_museum = $_POST['lokasi_museum'];
$harga_tiket = $_POST['harga_tiket'];



    $sql = "update `museum` set id_museum=$id_museum,nama_museum='$nama_museum', deskripsi_museum='$deskripsi_museum', lokasi_museum='$lokasi_museum', harga_tiket='$harga_tiket'";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:View_Museum.php");

    } else {
        die(mysqli_error($host));

    }
}

