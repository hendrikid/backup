<?php
include 'koneksi.php';

	// Check If form submitted, insert form data into users table.
	if($_SERVER['REQUEST_METHOD']=="POST") {
		$soal = $_POST['soal'];
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['b'];
		$d = $_POST['d'];
		$kunci_jawaban = $_POST['kunci_jawaban'];
		$aktif = $_POST['aktif'];
				
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO `soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `kunci_jawaban`, `aktif`) VALUES (NULL, '$soal', '$a', '$b', '$c', '$d', '$kunci_jawaban', '$aktif');");
		
		// Show message when user added
		header("location:data-soal.php?pesan=berhasil");
	}
	?>
