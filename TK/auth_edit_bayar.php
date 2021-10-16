<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        // Ambil Data yang Dikirim dari Form
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];

        $id_gambar_lama = $_POST['id_bayar'];
        $nama_lama  = $_POST['nama_lama'];
        $extensi_valid = ['jpg', 'jpeg', 'png'];

        // Nama file baru
        $extensi_gambar = explode('.', $nama_file);
        $extensi_gambar = strtolower(end($extensi_gambar));

        $nama_baru = uniqid();
        $nama_baru .= '.';
        $nama_baru .= $extensi_gambar;

        $path = "pembayaran/".$nama_baru;

        //cek apakah data ada atau tidak ada
        if ($error == 4) {
            $query = mysqli_query($koneksi, "UPDATE `pembayaran` SET `id_bayar` = '$id_gambar_lama', `bukti_bayar` = '$nama_lama' WHERE `pembayaran`.`id_bayarr` = '$id_gambar_lama';");
            echo "<script>alert('update berhasil!');</script>";
            echo'<script> window.location="pembayaran.php"; </script> ';
            return false;
        } elseif (!in_array($extensi_gambar, $extensi_valid)) {//cek apakah extensi gambar sudah benar
            echo "<script>alert('yang anda upload bukan gambar');</script>";
            echo'<script> window.location="edit_bayar.php"; </script> ';
            return false;
        } elseif ($ukuran_file > 2000000) {//cek apakah ukuran gambar tidak lebih besar dari 2MB
            echo "<script>alert('gambar teralu besar');</script>";
            echo'<script> window.location="edit_bayar.php"; </script> ';
            return false;
        } elseif (move_uploaded_file($tmp_file, $path)) {//jika semua sudah selesai silahkan lanjutkan proses upload
            $files    =glob('pembayaran/'.$nama_lama);
            foreach ($files as $file) {
                if (is_file($file))
                unlink($file); // hapus file
            }

            $query1 = mysqli_query($koneksi, "UPDATE `pembayaran` SET `id_bayar` = '$id_gambar_lama', `bukti_bayar` = '$nama_baru' WHERE `pembayaran`.`id_bayar` = '$id_gambar_lama';");
            echo "<script>alert('gambar berhasil diubah!');</script>";
            echo'<script> window.location="pembayaran.php"; </script> ';
            return false;
        }
    }
?>