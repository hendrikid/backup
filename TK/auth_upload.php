<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$error = $_FILES['gambar']['error'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$id_pendaftar = $_POST['id_pendaftar'];
$id_gambar = uniqid();
$extensi_valid = ['jpg', 'jpeg', 'png'];

// Nama file baru
$extensi_gambar = explode('.', $nama_file);
$extensi_gambar = strtolower(end($extensi_gambar));

$nama_baru = uniqid();
$nama_baru .= '.';
$nama_baru .= $extensi_gambar;

$path = "pembayaran/".$nama_baru;

//cek apakah data ada atau tidak ada
if ($error == 4){
    echo "<script>alert('pilih gambar terlrbih dahulu');</script>";
    echo'<script> window.location="pembayaran.php"; </script> ';
    return false;
} else if (!in_array($extensi_gambar, $extensi_valid)){//cek apakah extensi gambar sudah benar
    echo "<script>alert('yang anda upload bukan gambar');</script>";
    echo'<script> window.location="pembayaran.php"; </script> ';
    return false;
} else if( $ukuran_file > 2000000){//cek apakah ukuran gambar tidak lebih besar dari 2MB
    echo "<script>alert('gambar teralu besar');</script>";
    echo'<script> window.location="pembayaran.php"; </script> ';
    return false;
} else if(move_uploaded_file($tmp_file, $path)){//jika semua sudah selesai silahkan lanjutkan proses upload

    $query = mysqli_query($koneksi, "INSERT INTO `pembayaran` (`id_pendaftar`, `bukti_bayar`) VALUES ('$id_pendaftar', '$nama_baru');");
    echo "<script>alert('upload berhasil!');</script>";
    // echo'<script> window.location="pembayaran.php"; </script> ';
    return false;
}

?>