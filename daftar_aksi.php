<?php
include 'koneksi.php';
session_start();
$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"insert into pengguna values('$nik','$nama_lengkap','$tgl_lahir','$jk','$password')");

header("location:index.php?pesan=input");
?>

