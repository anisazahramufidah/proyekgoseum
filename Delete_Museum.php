<?php
include "Koneksi.php";

if (isset($_GET['delete'])) {
    $id_museum = $_GET['delete'];

    $sql = "DELETE FROM museum WHERE id_museum = '$id_museum'";

    if ($host->query($sql) === TRUE) {
        echo "Data Museum with ID: $id_museum has been deleted successfully.";
    } else {
        echo "Error deleting record: " . $host->error;
    }
}

$host->close();
?>
