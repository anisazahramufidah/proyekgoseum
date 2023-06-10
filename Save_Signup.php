<?php
require 'Koneksi.php';

$no_hp = $_POST['no_hp'];
$gmail = $_POST['gmail'];
$password = $_POST['password'];

$sql = "INSERT INTO sign_up (no_hp,gmail,password) 
        VALUES ('$no_hp','$gmail','$password')";

if ($host->query($sql) === TRUE) {
    echo "Add Sign Up successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $host->error;
}

// Close the database connection
$host->close();
?>