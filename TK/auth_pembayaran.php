<?php 
    include 'koneksi.php';

    $query = mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE id_bayar='$_GET[id]'");
    $status_bayar = mysqli_fetch_array($query);

    $id_bayar = $status_bayar['id_bayar'];
    $id_pendaftar = $status_bayar['id_pendaftar'];
    $tgl_bayar = $status_bayar['tgl_bayar'];
    $bukti_bayar = $status_bayar['bukti_bayar'];
    $status = 'Sudah Bayar';


    $updata_status = mysqli_query($koneksi, "UPDATE `pembayaran` SET `id_pendaftar` = '$id_pendaftar', `tgl_bayar` = '$tgl_bayar', `bukti_bayar` = '$bukti_bayar', `status` = '$status' WHERE `pembayaran`.`id_bayar` = $id_bayar;");

    echo'<script> window.location="data-pembayaran.php?pesan=berhasil-konfirmasi"; </script> ';
    
?>