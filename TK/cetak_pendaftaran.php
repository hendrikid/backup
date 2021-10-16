<?php
    include "koneksi.php";

    $id = $_GET['id'];

    $query_informasi_pendaftaran = mysqli_query($koneksi,"SELECT pendaftar.nama_lengkap, pendaftar.nama_panggilan, pendaftar.tmp_tgl_lahir, 
    pendaftar.jenis_kelamin, pendaftar.agama, pendaftar.anak_ke, pendaftar.jumlah_saudara, 
    pendaftar.alamat_lengkap, pendaftar.kelainan_jasmani, orangtua.nama_ayah, orangtua.nama_ibu, 
    orangtua.tmp_tgl_lahir_ayah, orangtua.tmp_tgl_lahir_ibu, orangtua.agama_ayah, orangtua.agama_ibu, 
    orangtua.pendidikan_ayah, orangtua.pendidikan_ibu, orangtua.pekerjaan_ayah, orangtua.pekerjaan_ayah, 
    orangtua.pekerjaan_ibu, orangtua.alamat_ayah, orangtua.alamat_ibu, orangtua.no_ktp_ayah, orangtua.no_ktp_ibu, orangtua.no_tlpn 
    FROM pendaftar INNER JOIN orangtua ON pendaftar.id_ortu=orangtua.id_ortu 
    INNER JOIN pendaftaran ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar 
    INNER JOIN user ON pendaftaran.id_user=user.id_user WHERE pendaftaran.id_pendaftaran='$id'");

    $data_pendaftar = mysqli_fetch_array($query_informasi_pendaftaran);
?>

<html>
    <head>
        <title>FD-<?php echo $id.'-'.$data_pendaftar['nama_lengkap'] ?></title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/animate.css">
        <link href="css/styles.css" rel="stylesheet" />

    </head>

    <body style="font-family: sans-serif;" style="height: 550px;">
    <script>window.print();</script>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        
                        <div class="container text-center row">
                            <div class="col-md-12 row">
                                <p class="col-md-3"><img src="image/logo.png" class="float-left text-center" style="width: 70%; height: auto; margin-left: 25%;"></p>
                                <p class="col-md-1">
                                <p class="col-md-8" style="font-size: 14.5px;">
                                    <span  class="font-weight-bold" style="font-size: 25px;"> 
                                        YAYASAN TARBIATUL FALLAH
                                        <br>AZ-ZAHRA
                                    </span>
                                    <br>
                                    <span class="font-weight-bold"> 
                                        Notaris Nomor 03 Tanggal 21 April 2010 
                                        <br> SK. MEN. HUK. HAM Nomor AHU. 2022.AH.01.04 ATHUN 2010
                                        <br> NPWP No. : 31.190.046.8.403.000
                                    </span>
                                    <span>
                                        <br> Sekretariat : Kp. Bojong Rt. 03/06 Ds. Gn. Putri Kec. Gunung Putri Telp. (021) 87941546
                                        <br> Bogor 16961
                                    </span>
                                </p>
                            </div>
                            <hr class="bg-dark col-md-11">
                        </div>

                        <form action="act_pendaftaran.php" class="container" method="POST">
                            <div class="text-center row">
                                <div class="container" style="margin-right: 5%; margin-left: 5%;">
                                <h5 class="text-center">FORMULIR PENDAFTARAN TK/RA ONLINE</h5>
                                    <div class="text-left row">
                                        <p class="col-md-12">A. IDENTITAS ANAK</p>
                                        <div class="col-md-12 card-transparent row" style="margin-right: 2%; margin-left: 2%;">
                                            <table class="table table-borderless" style=" font-size:15px">
                                                <tbody>
                                                    <tr class="row">
                                                        <td class="col-md-3">1. Nama Lengkap</td>
                                                        <td class="col-md-8">:
                                                            <input disabled type="text" class="col-md-10" name="nama_lengkap" value="<?php echo $data_pendaftar['nama_lengkap'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">2. Nama Panggilan</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="nama_panggilan" value="<?php echo $data_pendaftar['nama_panggilan'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">3. Tempat Tanggal Lahir</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="tmp_tgl_lahir" value="<?php echo $data_pendaftar['tmp_tgl_lahir'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">4. Jenis Kelamin</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="jenis_kelamin" value="<?php echo $data_pendaftar['jenis_kelamin'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">5. Agama</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="agama" value="<?php echo $data_pendaftar['agama'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">6. Anak Ke</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="anak_ke" value="<?php echo $data_pendaftar['anak_ke'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">7. Jumlah Saudara</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="jumlah_saudara" value="<?php echo $data_pendaftar['jumlah_saudara'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">8. Alamat Lengkap</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="alamat_lengkap" value="<?php echo $data_pendaftar['alamat_lengkap'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">9. Kelainan Jasmani</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="kelainan_jasmani" value="<?php echo $data_pendaftar['kelainan_jasmani'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-center row">
                                <div class="container" style="margin-right: 5%; margin-left: 5%;">
                                    <div class="text-left row">
                                        <p class="col-md-12">B. IDENTITAS AYAH</p>
                                        <div class="col-md-12 card-transparent row" style="margin-right: 2%; margin-left: 2%;">
                                            <table class="table table-borderless" style=" font-size:15px">
                                                <tbody>
                                                    <tr class="row">
                                                        <td class="col-md-3">1. Nama Lengkap</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="nama_ayah" value="<?php echo $data_pendaftar['nama_ayah'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">2. Tempat Tanggal Lahir</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="tmp_tgl_lahir_ayah" value="<?php echo $data_pendaftar['tmp_tgl_lahir_ayah'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">3. Agama</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="agama_ayah" value="<?php echo $data_pendaftar['agama_ayah'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">4. Pendidikan</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="pendidikan_ayah" value="<?php echo $data_pendaftar['pendidikan_ayah'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">5. Pekerjaan</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="pekerjaan_ayah" value="<?php echo $data_pendaftar['pekerjaan_ayah'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">6. Alamat</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="alamat_ayah" value="<?php echo $data_pendaftar['alamat_ayah'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">7. No. KTP</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="no_ktp_ayah" value="<?php echo $data_pendaftar['no_ktp_ayah'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center row">
                                <div class="container" style="margin-right: 5%; margin-left: 5%;">
                                    <div class="text-left row">
                                        <p class="col-md-12">C. IDENTITAS IBU</p>
                                        <div class="col-md-12 card-transparent row" style="margin-right: 2%; margin-left: 2%;">
                                            <table class="table table-borderless" style=" font-size:15px">
                                                <tbody>
                                                <tr class="row">
                                                        <td class="col-md-3">1. Nama Lengkap</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="nama_ibu" value="<?php echo $data_pendaftar['nama_ibu'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">2. Tempat Tanggal Lahir</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="tmp_tgl_lahir_ibu" value="<?php echo $data_pendaftar['tmp_tgl_lahir_ibu'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">3. Agama</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="agama_ibu" value="<?php echo $data_pendaftar['agama_ibu'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">4. Pendidikan</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="pendidikan_ibu" value="<?php echo $data_pendaftar['pendidikan_ibu'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">5. Pekerjaan</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="pekerjaan_ibu" value="<?php echo $data_pendaftar['pekerjaan_ibu'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">6. Alamat</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="alamat_ibu" value="<?php echo $data_pendaftar['alamat_ibu'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td class="col-md-3">7. No. KTP</td>
                                                        <td class="col-md-8">: 
                                                            <input disabled type="text" class="col-md-10" name="no_ktp_ibu" value="<?php echo $data_pendaftar['no_ktp_ibu'] ?>" style="border-top: none; border-right: none; border-left: none;">
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <h5>No. Telp : <?php echo $data_pendaftar['no_tlpn'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>