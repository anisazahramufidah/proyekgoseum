<?php
include "Koneksi.php";

if (isset($_GET['delete'])) {
    $id_museum = $_GET['delete'];

    $sql = "DELETE FROM pengunjung WHERE id_pengunjung = '$id_pengunjung'";

    if ($host->query($sql) === TRUE) {
        echo "Data Pengunjung with ID: $id_pengunjung has been deleted successfully.";
    } else {
        echo "Error deleting record: " . $host->error;
    }
}

$host->close();
?>
