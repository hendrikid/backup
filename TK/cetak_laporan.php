<?php
    include "koneksi.php";
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
?>

<html>
    <head>
        <?php 
            if($bulan == 'semua'){
                echo "<title>LAPORAN-TAHUNAN-$tahun</title>";
            } else {
                echo "<title>FD-LAPORAN-BULAN-$bulan-$tahun</title>";
            }
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/animate.css">
        <link href="css/styles.css" rel="stylesheet" />

    </head>

    <body style="font-family: sans-serif;" style="height: auto;">
    <script>window.print();</script>
        <div class="container">
            <div class="">
                <div class="">
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
                                <div class="container">
                                <?php
                                    if($bulan == 'semua'){
                                        echo '<h5 class="text-center">LAPORAN KESELURUHAN PENDAFTARAN</h5>';
                                    } else {
                                        echo '<h5 class="text-center">LAPORAN PENDAFTARAN '.$bulan.'/'.$tahun.'</h5>';
                                    }
                                ?>
                                    <div class="text-left row">
                                        <H5 class="text-center">TAHUN AJARAN <?php echo (int)date('Y')."/".((int)date('Y')+1) ?></p>
                                        <div class="card-transparent container">
                                            <table class="table table-bordered border-dark" style=" font-size:15px">
                                                <thead>
                                                    <th scope="col" class="text-center">No</th>
                                                    <th scope="col">Nama</td>
                                                    <th scope="col">Tanggal</td>
                                                    <th scope="col">Nomer Orangtua</td>
                                                    <th scope="col">Status</td>
                                                </thead>
                                                <tbody  id="tabel-pendaftaran">
                                                    <?php
                                                    if ($bulan == 'semua'){
                                                        $query_tahunan   = mysqli_query($koneksi, "SELECT pendaftar.nama_lengkap, pendaftaran.tgl_pendaftaran, orangtua.no_tlpn, pendaftaran.status FROM pendaftar INNER JOIN orangtua ON pendaftar.id_ortu=orangtua.id_ortu INNER JOIN pendaftaran ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar INNER JOIN user ON pendaftaran.id_user=user.id_user WHERE YEAR(tgl_pendaftaran) = $tahun ORDER BY pendaftaran.status DESC");
                                                        $no = 0;
                                                        while($d = mysqli_fetch_array($query_tahunan)){
                                                            $no++;
                                                            ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $no; ?></td>
                                                                <td><?php echo $d['nama_lengkap']; ?></td>
                                                                <td><?php echo $d['tgl_pendaftaran']; ?></td>
                                                                <td><?php echo $d['no_tlpn']; ?></td>
                                                                <td><?php echo $d['status']; ?></td>
                                                            </tr>
                                                            <?php 
                                                        }
                                                    } else {
                                                            $query_bulanan   = mysqli_query($koneksi, "SELECT pendaftar.nama_lengkap, pendaftaran.tgl_pendaftaran, orangtua.no_tlpn, pendaftaran.status FROM pendaftar INNER JOIN orangtua ON pendaftar.id_ortu=orangtua.id_ortu INNER JOIN pendaftaran ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar INNER JOIN user ON pendaftaran.id_user=user.id_user WHERE MONTH(tgl_pendaftaran) = $bulan AND YEAR(tgl_pendaftaran) = $tahun");
                                                            $no = 0; 
                                                            if (mysqli_fetch_array($query_bulanan) == NULL){
                                                                echo '<tr><td colspan="5"><h2>DATA PENDAFTAR BELUM ADA.</h2></td></tr>';
                                                            } else {
                                                                $query_bulanan1   = mysqli_query($koneksi, "SELECT pendaftar.nama_lengkap, pendaftaran.tgl_pendaftaran, orangtua.no_tlpn, pendaftaran.status FROM pendaftar INNER JOIN orangtua ON pendaftar.id_ortu=orangtua.id_ortu INNER JOIN pendaftaran ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar INNER JOIN user ON pendaftaran.id_user=user.id_user WHERE MONTH(tgl_pendaftaran) = $bulan AND YEAR(tgl_pendaftaran) = $tahun ORDER BY pendaftaran.status DESC");

                                                                while ($d = mysqli_fetch_array($query_bulanan1)) {
                                                                $no++;?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no; ?></td>
                                                                        <td><?php echo $d['nama_lengkap']; ?></td>
                                                                        <td><?php echo $d['tgl_pendaftaran']; ?></td>
                                                                        <td><?php echo $d['no_tlpn']; ?></td>
                                                                        <td><?php echo $d['status']; ?></td>
                                                                    </tr>
                                                            <?php
                                                            }
                                                        }
                                                    }

                                                    ?>
                                            </table>
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