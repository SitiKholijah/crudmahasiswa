<?php
$host = "localhost"; //host database
$username = "root"; //username database
$password = ""; //password database
$database = "pmb"; //nama database

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//data dari formulir
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$nama_panggilan = $_POST['nama_panggilan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$no_aktaLahir = $_POST['no_aktaLahir'];
$nik = $_POST['nik'];
$jumlah_saudara = $_POST['jumlah_saudara'];
$agama = isset($_POST['agama']);
$no_telpon = $_POST['no_telpon'];

// Insert data ke dalam tabel
$sql = "INSERT INTO  data(nama_depan, nama_belakang, nama_panggilan, jenis_kelamin, tempat_lahir, tanggal_lahir, no_aktaLahir, nik, jumlah_saudara, agama, no_telpon) 
VALUES ('$nama_depan', '$nama_belakang', '$nama_panggilan', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$no_aktaLahir', '$nik', '$jumlah_saudara', '$agama', '$no_telpon')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan ke dalam database.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>