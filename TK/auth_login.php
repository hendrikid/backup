<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:dashboard-admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="pengguna"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengguna";
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard-user.php");

	}else if($data['level']=="pimpinan"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pimpinan";
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard-pimpinan.php");
	}else{
		// alihkan ke halaman login kembali
		header("location:form_pendaftaran.php?pesan=disable");
	}	
}else{
	header("location:form_pendaftaran.php?pesan=gagal_login");
}
 
?>