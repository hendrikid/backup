<!DOCTYPE html>
<html>

    <?php 
        session_start();
    
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
            header("location:index.php?pesan=belum_login");
        } else if ($_SESSION['level']=="admin") {
            header("location:index.php?pesan=belum_login");
        };
        
 
	?>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>TK Tarbiyatul Fallah | Data Diri</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/styles_dashboard.css">

        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    </head>

    <body style="background-image: url(image/bg-1.png); background-size:inherit;">

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h4>TK Tarbiyatul Fallah Az-Zahra</h4>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="dashboard-user.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg> Home
                        </a>
                    </li>
                    <li  class="active">
                        <a href="data-diri.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg> Data Diri
                        </a>
                    <li>
                        <a href="ujian-masuk.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                            </svg> Ujian Masuk
                        </a>
                    </li>
                    <li>
                        <a href="pembayaran.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                            </svg> Pembayaran
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="nav navbar-nav ml-auto text-dark">
                            <li>
                                <?php 
                                    include 'koneksi.php';

                                    $query = mysqli_query($koneksi,"SELECT pendaftar.nama_lengkap from pendaftar INNER JOIN pendaftaran ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar INNER JOIN user ON user.id_user=pendaftaran.id_user WHERE user.username='$_SESSION[username]'");
                                    $nama_user = mysqli_fetch_array($query);
                                ?>
                                <h4>Nama user : <?= $nama_user['nama_lengkap'] ?></h4>
                            </li>
                        </ul>
                        <button class="btn btn-danger ml-auto" type="button">
                            <a href="auth_logout.php" class="">Logout</a>
                        </button>
                    </div>
                </nav>

                <!-- Data Diri -->
                <section>
                    <div class="text-left text-md-start" style="margin-top: -2%;">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card text-white bg-light border-dark">
                                    <div class="container card-body text-dark text-center">
                                        <div class="card-body">
                                        <form action="" class="" method="POST">

                                                        <span class="text-right btn-group" style="font-size: 27px;">DATA ANAK </span>
                                                            <a href="edit-data-diri.php" class="btn text-right" style="color: blue;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                </svg>
                                                            </a>
                                                            
<!--                                                             
                                                            <span>
                                                                <input type="submit" class="btn btn-outline-warning text-white border" value="Daftar" style="font-size: 20px;">
                                                            </span> -->
                                                        </span>
                                                        <?php 
                                                            include 'koneksi.php';

                                                            $query = mysqli_query($koneksi,"SELECT pendaftar.nama_lengkap, pendaftar.nama_panggilan, pendaftar.tmp_tgl_lahir, 
                                                            pendaftar.jenis_kelamin, pendaftar.agama, pendaftar.anak_ke, pendaftar.jumlah_saudara, 
                                                            pendaftar.alamat_lengkap, pendaftar.kelainan_jasmani, orangtua.nama_ayah, orangtua.nama_ibu, 
                                                            orangtua.tmp_tgl_lahir_ayah, orangtua.tmp_tgl_lahir_ibu, orangtua.agama_ayah, orangtua.agama_ibu, 
                                                            orangtua.pendidikan_ayah, orangtua.pendidikan_ibu, orangtua.pekerjaan_ayah, orangtua.pekerjaan_ayah, 
                                                            orangtua.pekerjaan_ibu, orangtua.alamat_ayah, orangtua.alamat_ibu, orangtua.no_ktp_ayah, orangtua.no_ktp_ibu, orangtua.no_tlpn 
                                                            FROM pendaftar INNER JOIN orangtua ON pendaftar.id_ortu=orangtua.id_ortu 
                                                            INNER JOIN pendaftaran ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar 
                                                            INNER JOIN user ON pendaftaran.id_user=user.id_user WHERE user.username='$_SESSION[username]'");

                                                            $data_pendaftar = mysqli_fetch_array($query);

                                                        ?>
                                                    </div>
                                                        <div class="col-md-12 text-center row">
                                                            <div class="">
                                                                <div class="col-md-12 text-left row">
                                                                    <div class="col-md-12 card-transparent row">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Nama Lengkap</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['nama_lengkap'] ?></td>
                                                                                    <td class="col-md-3">Nama Panggilan</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['nama_panggilan'] ?></td>
                                                                                    <td class="col-md-3">Tempat Tanggal Lahir</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['tmp_tgl_lahir'] ?></td>
                                                                                    <td class="col-md-3">Jenis Kelamin</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['jenis_kelamin'] ?></td>
                                                                                    <td class="col-md-3">Agama</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['agama'] ?></td>
                                                                                    <td class="col-md-3">Anak Ke</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['anak_ke'] ?></td>
                                                                                    <td class="col-md-3">Jumlah Saudara</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['jumlah_saudara'] ?></td>
                                                                                    <td class="col-md-3">Alamat Lengkap</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['alamat_lengkap'] ?></td>
                                                                                    <td class="col-md-3">Kelainan Jasmani</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['kelainan_jasmani'] ?></td>
                                                                                    <td class="col-md-3"></td>
                                                                                    <td class="col-md-8"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <h3 class="text-center">DATA ORANGTUA</h3><br>
                                                        <div class="col-md-12 text-center row">
                                                            <div class="container">
                                                                <div class="text-left row">
                                                                    <div class="col-md-12 card-transparent row">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3 border-white"><h5>DATA AYAH</h5></td>
                                                                                    <td class="col-md-8 border-white">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Nama Lengkap</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['nama_ayah'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Tempat Tanggal Lahir</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['tmp_tgl_lahir_ayah'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Agama</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['agama_ayah'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Pendidikan</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['pendidikan_ayah'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Pekerjaan</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['pekerjaan_ayah'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Alamat</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['alamat_ayah'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">No. KTP</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['no_ktp_ayah'] ?>
                                                                                    </td>
                                                                                    <td class="col-md-3"></td>
                                                                                    <td class="col-md-8"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="container">
                                                                <div class="text-left row">
                                                                    <div class="col-md-12 card-transparent row">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3 border-white"><h5>DATA IBU</h5></td>
                                                                                    <td class="col-md-8 border-white">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Nama Lengkap</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['nama_ibu'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Tempat Tanggal Lahir</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['tmp_tgl_lahir_ibu'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Agama</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['agama_ibu'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Pendidikan</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['pendidikan_ibu'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Pekerjaan</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['pekerjaan_ibu'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">Alamat</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['alamat_ibu'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="row">
                                                                                    <td class="col-md-3">No. KTP</td>
                                                                                    <td class="col-md-8">: <?= $data_pendaftar['no_ktp_ibu'] ?>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
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
                    </div>
                </section>
            </div>
        </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>

        <footer>
            <!-- Copyright -->
            <div class="text-center p-2 text-light" style="background-color: #000000">
                <h7>© 2021 YAYASAN TARBIYATUL FALLAH AZ-ZAHRA</h7>
            </div>
            <!-- Copyright -->
        </footer>
    </body>

</html>