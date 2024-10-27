<?php
$serverhost = "localhost";
$username = "bintang";
$password = "17Maret1999";
$dbName = "azisya-portfolio";

// Membuat koneksi
$conn = new mysqli($serverhost, $username, $password, $dbName);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// echo "Koneksi berhasil";
?>