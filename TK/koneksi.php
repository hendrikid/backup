<?php
    //membuat koneksi
    
    $koneksi = mysqli_connect('localhost','root','','psbo');
    
    //cek koneksi
    
    if (!$koneksi){
        die('koneksi gagal : ' . mysqli_connect_error());
    }
    
    //echo "koneksi berhasil!";

    //tutup koneksi

?>