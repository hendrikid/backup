<!DOCTYPE html>
<html>

    <?php 
        session_start();
    
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
            header("location:index.php?pesan=belum_login");
        } else if ($_SESSION['level']=="pengguna") {
            header("location:index.php?pesan=belum_login");
        };
 
	?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>TK Tarbiyatul Fallah | Data Admin</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/styles_dashboard.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
        
    </head>

    <body style="background-image: url(image/bg-1.png); background-size:inherit;">
        <?php 
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan']=="berhasil-konfirmasi") { ?>
            <script>
            $( document ).ready(function() {
                swal({
                    title: '<h5>Pendaftaran dikonfirmasi.</h5>',
                    type: 'success',
                    showConfirmeButton: true
                })

            })
            </script>
        <?php
        }
        } ?>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h4>TK Tarbiyatul Fallah Az-Zahra</h4>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="dashboard-admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="data-pendaftaran.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-file-earmark-post" viewBox="0 0 16 16">
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                            <path d="M4 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7zm0-3a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1-.5-.5z"/>
                            </svg> Data Pendaftaran
                        </a>
                    <li>
                        <a href="data-pendaftar.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                            <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                            </svg> Data Pendaftar
                        </a>
                    </li>
                    <li>
                        <a href="data-pembayaran.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                            </svg> Data Pembayaran
                        </a>
                    </li>
                    <li>
                        <a href="data-user.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                            <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                            <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> Data User
                        </a>
                    </li>
                    <li>
                        <a href="data-soal.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                            </svg> Data Soal
                        </a>
                    </li>
                    <li>
                        <a href="hasil-ujian.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                            </svg> Hasil Ujian
                        </a>
                    <li>
                        <a href="laporan.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                            </svg> Laporan
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
                                <h4>ANDA BERADA DALAM ADMIN MODE.</h4>
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
                                    <div class="card-body text-dark text-center">
                                        <div class="card-body">
                                                <h3 class="text-center" style="margin-top: 1%;">PENDAFTAR BARU</h3>
                                                <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: black; height: 2px;"/>
                                                <div class="table-responsive">
                                                    <?php 
                                                        include 'koneksi.php';
                                                        $no = 1;
                                                        $query = mysqli_query($koneksi,"SELECT pendaftaran.id_pendaftaran, pendaftar.nama_lengkap, pendaftaran.tgl_pendaftaran, user.username as no_tlp, pendaftaran.status  from pendaftar INNER JOIN pendaftaran ON pendaftaran.id_pendaftar=pendaftar.id_pendaftar INNER JOIN user ON user.id_user=pendaftaran.id_user WHERE pendaftaran.status='Menunggu Konfirmasi'");

                                                    ?>
                                                    <table class="table table-striped border text-left table-hover datatab">
                                                        <thead>
                                                            <th scope="col" class="text-center">No</th>
                                                            <th scope="col">No. Pendaftaran</th>
                                                            <th scope="col">Nama Lengkap</th>
                                                            <th scope="col">Tanggal Pendaftaran</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Opsi</th>
                                                        </thead>
                                                        <tbody  id="tabel-pendaftaran">
                                                            <?php
                                                                while($d = mysqli_fetch_array($query)){
                                                                    $tgl_daftar = date('d/m/Y', strtotime($d['tgl_pendaftaran']));

                                                                    if($d['id_pendaftaran']=='NULL'){
                                                                        echo "<tr><td colspan='6'>";
                                                                            echo "<h2>Belum ada pendaftar baru!<h2>";
                                                                        echo "</tr></td>";
                                                                    } else {
                                                                        echo "<tr>";
                                                                            echo "<td class='text-center'>$no</td>";
                                                                            echo "<td>$d[id_pendaftaran]</td>";
                                                                            echo "<td>$d[nama_lengkap]</td>";
                                                                            echo "<td>$tgl_daftar</td>";
                                                                            echo "<td>$d[status]</td>";
                                                                            echo "<td>";
                                                                                echo "<a href='auth_konfirmasi.php?id=$d[id_pendaftaran]' class='btn btn-primary form-control'>KONFIRMASI</a>";
                                                                            echo "</td>";
                                                                        echo "</tr>";
                                                                        $no++;
                                                                    }
                                                                }
                                                            ?>
                                                    </table>
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
        
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
            $('.datatab').DataTable();
            } );
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