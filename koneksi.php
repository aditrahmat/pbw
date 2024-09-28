<?php
// File: koneksi.php
$servername = "localhost";
$username = "root";
$password = "Midgard1!1!";
$dbname = "my_wedding_db";

// Membuat koneksi ke MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>