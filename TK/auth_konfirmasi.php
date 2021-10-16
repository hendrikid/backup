<?php 
    include 'koneksi.php';

    $query = mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id_pendaftaran='$_GET[id]'");
    $status_pendaftaran = mysqli_fetch_array($query);

    $id_user = $status_pendaftaran['id_user'];
    $id_pendaftaran = $status_pendaftaran['id_pendaftaran'];
    $id_pendaftar = $status_pendaftaran['id_pendaftar'];
    $status = 'Terkonfirmasi';


    $updata_status = mysqli_query($koneksi, "UPDATE `pendaftaran` SET `id_pendaftaran` = '$id_pendaftaran', `id_pendaftar` = '$id_pendaftar', `id_user` = '$id_user', `status` = '$status' WHERE `pendaftaran`.`id_pendaftaran` = '$id_pendaftaran'");

    echo'<script> window.location="dashboard-admin.php?pesan=berhasil-konfirmasi"; </script> ';
    
?>