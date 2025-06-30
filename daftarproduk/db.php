<?php
$host = "172.206.24.100";
$user = "dhafinkamil";
$pass = "Deviant201203";
$dbname = "tokodb";

// Buat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
