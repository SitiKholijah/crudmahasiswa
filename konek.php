<?php
$host = "localhost"; //host database
$username = "root"; //username database
$password = ""; //password database
$database = "pmb"; //nama database
//koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);
// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>