<?php
    include "koneksi.php";
    
    if ($_SERVER['REQUEST_METHOD']=="POST") {

        // Post pendaftaran
        $id_pendaftaran        = $_POST['id_pendaftaran'];
        $id_user1              = $_POST['id_user1'];
        $tgl_pendaftaran       = $_POST['tgl_pendaftaran'];
        $status                = $_POST["status"];

        // Post User
        $id_user               = $_POST['id_user'];
        $username              = $_POST['username'];
        $password              = $_POST['password'];
        $level                 = $_POST["level"];

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

        // post data orangtua
        $id_ortu               = $_POST['id_ortu'];
        $nama_ayah             = $_POST['nama_ayah'];
        $tmp_tgl_lahir_ayah    = $_POST['tmp_tgl_lahir_ayah'];
        $pendidikan_ayah       = $_POST['pendidikan_ayah'];
        $pekerjaan_ayah        = $_POST['pekerjaan_ayah'];
        $agama_ayah            = $_POST['agama_ayah'];
        $alamat_ayah           = $_POST['alamat_ayah'];
        $no_ktp_ayah           = $_POST['no_ktp_ayah'];

        // data ibu
        $nama_ibu             = $_POST['nama_ibu'];
        $tmp_tgl_lahir_ibu    = $_POST['tmp_tgl_lahir_ibu'];
        $pendidikan_ibu       = $_POST['pendidikan_ibu'];
        $pekerjaan_ibu        = $_POST['pekerjaan_ibu'];
        $agama_ibu            = $_POST['agama_ibu'];
        $alamat_ibu           = $_POST['alamat_ibu'];
        $no_ktp_ibu           = $_POST['no_ktp_ibu'];
        
        // no. telp.
        $no_telp              = $_POST['username'];


        $cari_username = mysqli_query ($koneksi, "SELECT * FROM user WHERE username = '$username'");
        $result = mysqli_num_rows($cari_username);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
        if ($result ==0) {
            $password = md5($password);

            $insert_user = mysqli_query($koneksi, "INSERT INTO `user` (`id_user`,`username`,`password`,`level`) 
            VALUES ('$id_user','$username','$password','$level')");
            
            $insert_ortu = mysqli_query($koneksi, "INSERT INTO `orangtua` (`id_ortu`, `nama_ayah`, `nama_ibu`, `tmp_tgl_lahir_ayah`, `tmp_tgl_lahir_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `agama_ayah`, `agama_ibu`, `alamat_ayah`, `alamat_ibu`, `no_ktp_ayah`, `no_ktp_ibu`, `no_tlpn`) 
            VALUES ('$id_ortu', '$nama_ayah', '$nama_ibu', '$tmp_tgl_lahir_ayah', '$tmp_tgl_lahir_ibu', '$pendidikan_ayah', '$pendidikan_ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$agama_ayah', '$agama_ibu', '$alamat_ayah', '$alamat_ibu', '$no_ktp_ayah', '$no_ktp_ibu', '$no_telp');");
            
            $insert_pendaftar = mysqli_query($koneksi, "INSERT INTO `pendaftar` (`id_pendaftar`, `nama_lengkap`, `nama_panggilan`, `tmp_tgl_lahir`, `jenis_kelamin`, `agama`, `anak_ke`, `jumlah_saudara`, `alamat_lengkap`, `kelainan_jasmani`, `id_ortu`) 
            VALUES ('$id_pendaftar', '$nama_lengkap', '$nama_panggilan', '$tmp_tgl_lahir', '$jenis_kelamin', '$agama', '$anak_ke', '$jumlah_saudara', '$alamat_lengkap', '$kelainan_jasmani', '$id_ortu')");
            
            $insert_pendaftaran = mysqli_query($koneksi, "INSERT INTO `pendaftaran` (`id_pendaftar`, `id_user`, `tgl_pendaftaran`, `status`) 
            VALUES ('$id_pendaftar', '$id_user', '$tgl_pendaftaran', '$status')");


            if (!$insert_user || !$insert_ortu || !$insert_pendaftar || !$insert_pendaftaran) {
                echo'<script> window.location="form_pendaftaran.php?pesan=gagal"; </script> ';
            } else {
                echo'<script> window.location="form_pendaftaran.php?pesan=sukses"; </script> ';
            }
        }
        else {
            echo "No.Telp sudah terdaftar";
        }

    }
    
?>