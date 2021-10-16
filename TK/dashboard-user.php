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

        <title>TK Tarbiyatul Fallah | Dashboard User</title>

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
                    <li class="active">
                        <a href="dashboard-user.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg> Home
                        </a>
                    </li>
                    <li>
                        <a href="data-diri.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg> Data Diri
                        </a>
                    </li>
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

                <!-- Syarat pendaftaran -->
                <section>
                    <div class="text-left text-md-start" style="margin-top: -2%;">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card text-white bg-light border-dark">
                                    <div class="container card-body text-dark text-center">
                                        <div class="card-body">
                                            <div class="card bg-transparent p-2 border-dark" style="margin-bottom: 1%; border-radius: 15px 50px 30px 5px;">
                                                <h3 class="text-center" style="margin-top: 1%;">SYARAT PENDAFTARAN</h3>
                                                <hr class="mb-2 mt-0 d-inline-block mx-auto container col-md-8" style="width: 60px; background-color: black; height: 2px;"/>
                                                <div class="col-md-12">
                                                    <p class="text-left p-2 text-dark">Berikut adalah syarat pendaftaran yang harus dipenuhi antara lain :</p>
                                                    <ol class="text-left">
                                                        <li>Melakukan pendaftaran melalu website resmi TK Tarbiyatul Fallah.</li>
                                                        <li>Melakukan Ujian masuk pada aplikasi TK Tarbiyatul Fallah dengan menggunkan akun yang sudah didaftarkan.</li>
                                                        <li>Membawa fotocopy KK, fotocopy akte kelahiran dan foto anak pada saat pembayaran tunai pada bagian TU di sekolah.</li>
                                                        <li>Membayar biaya pendaftaran tunai saat menyerahkan dokumen-dokumen pendukung pendaftaran.</li>
                                                    </ol>
                                                    <p class="text-danger font-weight-bold text-left">*NOTE : Silahkan menunggu konfirmasi dari admin paling lambat 1 hari kerja dan apabila belum ada konfirmasi silahkan hubungi nomer yang tertera pada website untuk informasi pendaftaran.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Informasi Pendaftaran -->
                <section style="margin-top: 2%;">
                    <div class="text-left text-md-start">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card text-white bg-light border-dark">
                                    <div class="container card-body text-dark text-center">
                                        <div class="card-body">
                                            <div class="card bg-transparent p-2 border-dark" style="margin-bottom: 1%; border-radius: 15px 50px 30px 5px;">
                                                <h3 class="text-center" style="margin-top: 1%;">INFORMASI PENDAFTARAN</h3>
                                                <hr class="mb-2 mt-0 d-inline-block mx-auto container col-md-8" style="width: 60px; background-color: black; height: 2px;"/>
                                                <div class="col-md-12">
                                                    <p class="text-left p-2 text-dark">Berikut adalah informasi mengenai status pendaftaran :</p>
                                                    <?php 
                                                        include 'koneksi.php';

                                                        $query1 = mysqli_query($koneksi,"SELECT pendaftaran.id_pendaftaran, pendaftar.nama_lengkap, pendaftaran.tgl_pendaftaran, user.username as no_tlp, pendaftaran.status  from pendaftar INNER JOIN pendaftaran ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar INNER JOIN user ON user.id_user=pendaftaran.id_user WHERE user.username='$_SESSION[username]'");
                                                        $status_pendaftaran = mysqli_fetch_array($query1);
                                                    ?>
                                                    
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                <th scope="col">No. Pendaftaran</th>
                                                                <th scope="col">Nama Lengkap</th>
                                                                <th scope="col">Tanggal Pendaftaran</th>
                                                                <th scope="col">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                <td><?= $status_pendaftaran['id_pendaftaran'] ?></td>
                                                                <td><?= $status_pendaftaran['nama_lengkap'] ?></td>
                                                                <td><?= date('d/m/Y', strtotime($status_pendaftaran['tgl_pendaftaran'])) ?></td>
                                                                <td><?= $status_pendaftaran['status'] ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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