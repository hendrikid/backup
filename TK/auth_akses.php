<?php 

    error_reporting(0);
    include 'koneksi.php';

    if($_GET['id_1']){
        $updata_status = mysqli_query($koneksi, "UPDATE `user` SET `level` = 'disable' WHERE `user`.`id_user` = '$_GET[id_1]'");
        echo'<script> window.location="data-user.php?pesan=disable"; </script> ';
    } else if($_GET['id_2']){
        $updata_status = mysqli_query($koneksi, "UPDATE `user` SET `level` = 'pengguna' WHERE `user`.`id_user` = '$_GET[id_2]'");
        echo'<script> window.location="data-user.php?pesan=active"; </script> ';
    };

    //ubah level
    
?>