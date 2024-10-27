<?php
$serverhost = "localhost";
$username = "root";
$password = "";
$dbName = "azisya-portfolio";

// Membuat koneksi
$conn = new mysqli($serverhost, $username, $password, $dbName);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// echo "Koneksi berhasil";
?>