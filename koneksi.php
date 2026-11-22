<?php
// Nama : Fasya Nia Iryanti
// NIM  : 250102106

mysqli_report(MYSQLI_REPORT_OFF);

$host     = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . htmlspecialchars(mysqli_connect_error()));
}

// Mengatur karakter agar huruf dan simbol tersimpan dengan benar
mysqli_set_charset($koneksi, "utf8mb4");

mysqli_report(MYSQLI_REPORT_OFF);
