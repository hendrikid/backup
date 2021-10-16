<!DOCTYPE html>
<html>

    <?php 
        session_start();
        include 'koneksi.php';
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
            header("location:index.php?pesan=belum_login");
        } else if ($_SESSION['level']=="admin") {
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
        
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                        <a href="laporan_pimpinan.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
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
                                                <h3 class="text-center" style="margin-top: 1%;">GRAFIK PENDAFTARAN 5 TAHUN TERAKHIR</h3>
                                                <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: black; height: 2px;"/>
                                                <div class="">
                                                <canvas id="myChart" style="width: 100%; height: 400px"></canvas>
                                                <script>
                                                var ctx = document.getElementById('myChart');
                                                var myChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: ['<?php echo ((int)date('Y')-4) ?>', '<?php echo ((int)date('Y')-3) ?>', '<?php echo ((int)date('Y')-2) ?>', '<?php echo ((int)date('Y')-1) ?>', '<?php echo (int)date('Y') ?>'],
                                                        datasets: [{
                                                            label: 'Total Pendaftaran',
                                                            data: [
                                                                <?php
                                                                    $tahun_1 = ((int)date('y')-4).((int)date('y')-3); 
                                                                    $tahun_pertama = mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id_pendaftaran LIKE '%$tahun_1%'");
                                                                    echo mysqli_num_rows($tahun_pertama);
                                                                ?>,
                                                                <?php 
                                                                    $tahun_2 = ((int)date('y')-3).((int)date('y')-2); 
                                                                    $tahun_kedua = mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id_pendaftaran LIKE '%$tahun_2%'");
                                                                    echo mysqli_num_rows($tahun_kedua);
                                                                ?>,
                                                                <?php
                                                                    $tahun_3 = ((int)date('y')-2).((int)date('y')-1); 
                                                                    $tahun_ketiga = mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id_pendaftaran LIKE '%$tahun_3%'");
                                                                    echo mysqli_num_rows($tahun_ketiga);
                                                                ?>,
                                                                <?php 
                                                                    $tahun_4 = ((int)date('y')-1).(int)date('y'); 
                                                                    $tahun_keempat = mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id_pendaftaran LIKE '%$tahun_4%'");
                                                                    echo mysqli_num_rows($tahun_keempat);
                                                                ?>,
                                                                <?php 
                                                                    $tahun_5 = (int)date('y').((int)date('y')+1); 
                                                                    $tahun_kelima = mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id_pendaftaran LIKE '%$tahun_5%'");
                                                                    echo mysqli_num_rows($tahun_kelima);
                                                                ?>,
                                                            ],
                                                            backgroundColor: [
                                                                'rgba(255, 99, 132, 0.2)',
                                                                'rgba(54, 162, 235, 0.2)',
                                                                'rgba(255, 206, 86, 0.2)',
                                                                'rgba(75, 192, 192, 0.2)',
                                                                'rgba(153, 102, 255, 0.2)',
                                                                'rgba(255, 159, 64, 0.2)'
                                                            ],
                                                            borderColor: [
                                                                'rgba(255, 99, 132, 1)',
                                                                'rgba(54, 162, 235, 1)',
                                                                'rgba(255, 206, 86, 1)',
                                                                'rgba(75, 192, 192, 1)',
                                                                'rgba(153, 102, 255, 1)',
                                                                'rgba(255, 159, 64, 1)'
                                                            ],
                                                            borderWidth: 1
                                                        }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            y: {
                                                                beginAtZero: true
                                                            }
                                                        }
                                                    }
                                                });
                                                </script>
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