<?php
    include "koneksi.php";

    // mengambil data  user dengan kode paling besar
    $query = mysqli_query($koneksi, "SELECT max(id_user) as kodeTerbesar FROM user");
    $data = mysqli_fetch_array($query);
    $kodeUSER = $data['kodeTerbesar'];
    
    // mengambil angka dari kode  user terbesar, menggunakan fungsi substr
    // dan diubah ke integer dengan (int)
    $urutan = (int) substr($kodeUSER, 3, 3);
    
    // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
    $urutan++;

    // membentuk kode  user baru
    // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
    // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
    // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan 
    $huruf = "US-";
    $kodeUSER = $huruf . sprintf("%03s", $urutan);

    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        // Post pendaftaran
        $id_pendaftaran        = $_POST['id_pendaftaran'];
        $tgl_pendaftaran       = date('Y-m-d');
        $status                = "Menunggu Konfirmasi";

        // Post User
        $id_user               = $kodeUSER;
        $username              = $_POST['username'];
        $password              = $_POST['password'];
        $password1             = $_POST['password1'];
        $level                 = "pengguna";

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
        $str_ortu              = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $rndom_sw              = str_shuffle($str_ortu);
        $substr_sw             = substr($rndom_sw,0,2);
        $tahun                 = date('Y');
        $id_ortu               = "OT".substr($tahun,2).(substr($tahun,2)+1)."RA".$substr_sw;

        // data ayah
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
        $no_telp              = $_POST['username'];

        //username tidak boleh kurang dari 10 dan lebih dari 13 digit
        if (strlen($username) > 13 || strlen($username) < 10){
            echo'<script> window.location="form_pendaftaran.php?pesan=tlpn_salah"; </script> ';
        } else {
            //password tidak boleh lebih dari 10 karakter
            if (strlen($password) > 10 || strlen($password) < 10){
                echo'<script> window.location="form_pendaftaran.php?pesan=pw_salah"; </script> ';
            } else {
                //untuk mengecek apakah form password dan form konfirmasi password sudah sama
                if ($password == $password1){
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
                            
                            $insert_pendaftaran = mysqli_query($koneksi, "INSERT INTO `pendaftaran` (`id_pendaftaran`,`id_pendaftar`, `id_user`, `tgl_pendaftaran`, `status`) 
                            VALUES ('$id_pendaftaran', '$id_pendaftar', '$id_user', '$tgl_pendaftaran', '$status')");
                
                
                            if (!$insert_user || !$insert_ortu || !$insert_pendaftar || !$insert_pendaftaran) {
                                echo'<script> window.location="form_pendaftaran.php?pesan=gagal"; </script> ';
                            } else {
                                echo'<script> window.location="form_pendaftaran.php?pesan=sukses"; </script> ';
                            }
                        }
                        else {
                            echo'<script> window.location="form_pendaftaran.php?pesan=id_ditolak"; </script> ';
                        }
                    } else {
                        echo'<script> window.location="form_pendaftaran.php?pesan=pw_salah1"; </script> ';
                    }
                }
            }
}
?>