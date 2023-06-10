<?php
include "Koneksi.php";

if (isset($_GET['delete'])) {
    $id_museum = $_GET['delete'];

    $sql = "DELETE FROM sign_up WHERE id_signup = '$id_signup'";

    if ($host->query($sql) === TRUE) {
        echo "Data Museum with ID: $id_signup has been deleted successfully.";
    } else {
        echo "Error deleting record: " . $host->error;
    }
}

$host->close();
?>
