<?php
include "Koneksi.php";

if (isset($_GET['delete'])) {
    $id_pembelian = $_GET['delete'];

    $sql = "DELETE FROM pembelian WHERE id_pembelian = '$id_pembelian'";

    if ($host->query($sql) === TRUE) {
        echo "Data Pembelian with ID: $id_pembelian has been deleted successfully.";
    } else {
        echo "Error deleting record: " . $host->error;
    }
}

$host->close();
?>
