<?php

    //aktifkan seasson
    session_start();

    //menghaspus seasson
    session_destroy();

    //alihkan halaman
    header("location:index.php?pesan=logout")
?>