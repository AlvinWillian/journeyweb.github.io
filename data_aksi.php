<?php
include 'koneksi.php';
session_start();
$id = $_POST['id'];
$nik = $_SESSION['nik'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu_tubuh = $_POST['suhu_tubuh'];

$data = mysqli_query($koneksi,"insert into perjalanan values('$id','$nik','$tanggal','$waktu',
'$lokasi','$suhu_tubuh')");

header("location:tampil_data_perjalanan.php?pesan=input");
?>