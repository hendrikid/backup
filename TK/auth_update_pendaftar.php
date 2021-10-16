<?php 

    include 'koneksi.php';

    // Post data pendaftar
    $id_pendaftar          = $_POST['id_pendaftar'];
    $nama_lengkap          = $_POST['nama_lengkap'];
    $nama_panggilan        = $_POST['nama_panggilan'];
    $tmp_tgl_lahir         = $_POST['tmp_tgl_lahir'];
    $jenis_kelamin         = $_POST['jenis_kelamin'];
    $agama                 = $_POST['agama'];
    $anak_ke               = $_POST['anak_ke'];
    $jumlah_saudara        = $_POST['jumlah_saudara'];
    $alamat_lengkap        = $_POST['alamat_lengkap'];
    $kelainan_jasmani      = $_POST['kelainan_jasmani'];

    // Post data orangtua
    $id_ortu               = $_POST['id_ortu'];
    $nama_ayah             = $_POST['nama_ayah'];
    $tmp_tgl_lahir_ayah    = $_POST['tmp_tgl_lahir_ayah'];
    $agama_ayah            = $_POST['agama_ayah'];
    $pendidikan_ayah       = $_POST['pendidikan_ayah'];
    $pekerjaan_ayah        = $_POST['pekerjaan_ayah'];
    $alamat_ayah           = $_POST['alamat_ayah'];
    $no_ktp_ayah          = $_POST['agama'];
    $nama_ibu              = $_POST['nama_ibu'];
    $tmp_tgl_lahir_ibu     = $_POST['tmp_tgl_lahir_ibu'];
    $agama_ibu             = $_POST['agama_ibu'];
    $pendidikan_ibu        = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu         = $_POST['pekerjaan_ibu'];
    $alamat_ibu           = $_POST['alamat_ibu'];
    $no_ktp_ibu           = $_POST['agama'];
    

    $updata_pendaftar = mysqli_query($koneksi, "UPDATE `pendaftar` SET `nama_lengkap` = '$nama_lengkap', `nama_panggilan` = '$nama_panggilan', `tmp_tgl_lahir` = '$tmp_tgl_lahir', `jenis_kelamin` = '$jenis_kelamin', `agama` = '$agama', `anak_ke` = '$anak_ke', `jumlah_saudara` = '$jumlah_saudara', `alamat_lengkap` = '$alamat_lengkap', `kelainan_jasmani` = '$kelainan_jasmani' WHERE `pendaftar`.`id_pendaftar` = '$id_pendaftar';");
    $updata_orangtua = mysqli_query($koneksi, "UPDATE `orangtua` SET `nama_ayah` = '$nama_ayah', `nama_ibu` = '$nama_ibu', `tmp_tgl_lahir_ayah` = '$tmp_tgl_lahir_ayah', `tmp_tgl_lahir_ibu` = '$tmp_tgl_lahir_ibu', `agama_ayah` = '$agama_ayah', `agama_ibu` = '$agama_ibu', `pendidikan_ayah` = '$pendidikan_ayah', `pendidikan_ibu` = '$pendidikan_ibu', `pekerjaan_ayah` = '$pekerjaan_ayah', `pekerjaan_ibu` = '$pekerjaan_ibu', `alamat_ayah` = '$alamat_ayah', `alamat_ibu` = '$alamat_ibu', `no_ktp_ayah` = '$no_ktp_ayah', `no_ktp_ibu` = '$no_ktp_ibu' WHERE `orangtua`.`id_ortu` = '$id_ortu';");

    echo'<script> window.location="data-pendaftar.php?pesan=berhasil"; </script> ';
    
?>