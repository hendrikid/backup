<?php
session_start();
include 'koneksi.php';

       if(isset($_POST['submit'])){
            $pilihan=$_POST["pilihan"];
            $id_soal=$_POST["id"];
            $jumlah=$_POST['jumlah'];
            
            $score=0;
            $benar=0;
            $salah=0;
            $kosong=0;
            
            for ($i=0;$i<$jumlah;$i++){
                //id nomor soal
                $nomor=$id_soal[$i];
                
                //jika user tidak memilih jawaban
                if (empty($pilihan[$nomor])){
                    $kosong++;
                }else{
                    //jawaban dari user
                    $jawaban=$pilihan[$nomor];
                    
                    //cocokan jawaban user dengan jawaban di database
                    $query=mysqli_query($koneksi, "select * from soal where id_soal='$nomor' and kunci_jawaban='$jawaban'");
                    
                    $cek=mysqli_num_rows($query);
                    
                    if($cek){
                        //jika jawaban cocok (benar)
                        $benar++;
                    }else{
                        //jika salah
                        $salah++;
                    }
                    
                } 
                /*RUMUS
                Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
                hasil= 100 / jumlah soal * jawaban yang benar
                */
                
                $result=mysqli_query($koneksi, "select * from soal");
                $jumlah_soal=mysqli_num_rows($result);
                $score = $jumlah_soal*$benar;
                $hasil = $score;
            }
        }

        //Lakukan Penyimpanan Kedalam Database
        $query1 = mysqli_query($koneksi,"SELECT pendaftaran.id_pendaftaran, pendaftar.id_pendaftar, pendaftaran.tgl_pendaftaran, user.username as no_tlp, pendaftaran.status  from pendaftar INNER JOIN pendaftaran ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar INNER JOIN user ON user.id_user=pendaftaran.id_user WHERE user.username='$_SESSION[username]'");
        $data_user = mysqli_fetch_array($query1);

        $str_pendaftar    = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $rndom_sw   = str_shuffle($str_pendaftar);
        $substr_sw  = substr($rndom_sw,0,4);
        $tahun      = date('Y');
        $id_ujian = "UJ".substr($tahun,2).(substr($tahun,2)+1)."RA".$substr_sw;

        $insert_hasil_ujian = mysqli_query($koneksi, "INSERT INTO `hasil_ujian` (`id_ujian`, `id_pendaftar`, `jawaban_benar`, `jawaban_salah`, `jawaban_kosong`, `nilai`) VALUES ('$id_ujian', '$data_user[id_pendaftar]', '$benar', '$salah', '$kosong', '$hasil');");
        $updatae_status = mysqli_query($koneksi, "UPDATE `pendaftaran` SET `status` = 'Selesai' WHERE `pendaftaran`.`id_pendaftaran` = '$data_user[id_pendaftaran]';");
        
		header("location:ujian-masuk.php?pesan=selesai");

        ?>
