<?php 
// mengaktifkan session php
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'koneksi.php';
 
// berfungsi menangkap data yang dikirim
$nik = $_POST['nik'];
$password = $_POST['password'];
 
// berfungsi menyeleksi data user dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE nik='$nik' AND password='$password'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
		$_SESSION['nik'] =  $nik;
		$_SESSION['status'] = "login";
		header("location:tampil_data_perjalanan.php");
			
}else{
		header("location:index.php?pesan=gagal");
}
?>