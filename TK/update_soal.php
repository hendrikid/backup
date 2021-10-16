<?php 

    include 'koneksi.php';

    // Post data pendaftar
    $id_soal          = $_POST['id_soal'];
    $soal          = $_POST['soal'];
    $a        = $_POST['a'];
    $b  = $_POST['b'];
    $c         = $_POST['c'];
    $d = $_POST['d'];
    $kunci_jawaban =  $_POST['kunci_jawaban'];


    $updata_soal = mysqli_query($koneksi, "UPDATE `soal` SET `soal` = '$soal', `a` = '$a', `b` = '$b', `c` = '$c', `d` = '$d', `kunci_jawaban` = '$kunci_jawaban' WHERE `soal`.`id_soal` = $id_soal;");

    echo'<script> window.location="data-soal.php?pesan=diubah"; </script> ';
    
?>