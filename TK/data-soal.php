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
            if ($_GET['pesan']=="berhasil") { ?>
            <script>
            $( document ).ready(function() {
                swal({
                    title: '<h5>Soal ditambahkan.</h5>',
                    type: 'success',
                    showConfirmeButton: true
                })

            })
            </script>
        <?php
        } else if ($_GET['pesan']=="dihapus") { ?>
            <script>
            $( document ).ready(function() {
                swal({
                    title: '<h5>Soal Dihapus!.</h5>',
                    type: 'success',
                    showConfirmeButton: true
                })

            })
            </script>
        <?php
        } else if ($_GET['pesan']=="diubah") { ?>
            <script>
            $( document ).ready(function() {
                swal({
                    title: '<h5>Soal Diubah!.</h5>',
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
                    <li>
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
                    <li class="active">
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
                                        <h3 class="text-center" style="margin-top: 1%;">DATA SOAL</h3>
                                        <hr class="mb-2 mt-0 d-inline-block mx-auto text-center" style="width: 60px; background-color: black; height: 2px;"/><br>
                                        <div class="card-body">
                                            <div class="text-right">
                                                <a href="" class="btn btn-info text-left" data-toggle="modal" data-target="#myModal">Tambah Data</a> 
                                                <hr class="col-md-12">
                                                <div class="table-responsive">
                                                    
                                                    <?php 
                                                        include 'koneksi.php';
                                                        $no = 1;
                                                        $query = mysqli_query($koneksi,"SELECT * FROM soal");

                                                    ?>
                                                    <table class="table table-striped border text-left table-hover datatab">
                                                        <thead>
                                                            <th scope="col" class="text-center">No</th>
                                                            <th scope="col">Soal</th>
                                                            <th scope="col">A</th>
                                                            <th scope="col">B</th>
                                                            <th scope="col">C</th>
                                                            <th scope="col">D</th>
                                                            <th scope="col">Opsi</th>
                                                        </thead>
                                                        <tbody  id="tabel-pendaftaran">
                                                            <?php
                                                                while($d = mysqli_fetch_array($query)){
                                                                ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no++; ?></td>
                                                                        <td><?php echo $d['soal']; ?></td>
                                                                        <td><?php echo $d['a']; ?></td>
                                                                        <td><?php echo $d['b']; ?></td>
                                                                        <td><?php echo $d['c']; ?></td>
                                                                        <td><?php echo $d['d']; ?></td>
                                                                        <td class="form-group">
                                                                            <a href="" class="btn text-right" style="color: blue; " data-toggle="modal" data-target="#myModal<?php echo $d['id_soal']; ?>">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                                </svg>
                                                                            </a>
                                                                            <a href="delete_soal.php?id=<?php echo $d['id_soal']; ?>" class="btn text-right" style="color: red; ">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
                                                                                <path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146z"/>
                                                                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                                                </svg>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- Modal Login -->
                                                                    <div class="modal text-left" id="myModal<?php echo $d['id_soal']; ?>">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                                
                                                                                <!-- Modal Header -->
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Edit Data</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                </div>
                                                                                                    
                                                                                <!-- Modal body -->
                                                                                <div class="modal-body">
                                                                                    <?php 
                                                                                        $query1111 = mysqli_query($koneksi,"SELECT * FROM soal WHERE id_soal='$d[id_soal]'");
                                                                                        $data_soal = mysqli_fetch_array($query1111)
                                                                                    ?>
                                                                                    <form method="post" action="update_soal.php">
                                                                                        <input type="text" name="id_soal" value="<?php echo $data_soal['id_soal'] ?>" hidden>
                                                                                        <div class="form-group">
                                                                                            <label>Soal</label>
                                                                                            <input type="text" name="soal" class="form-control" value="<?php echo $data_soal['soal'] ?>">
                                                                                        </div>                                                    
                                                                                        <div class="form-group">
                                                                                            <label>Jawaban A</label>
                                                                                            <input type="text" name="a" class="form-control" value="<?php echo $data_soal['a'] ?>">
                                                                                        </div>                                                    
                                                                                        <div class="form-group">
                                                                                            <label>Jawaban B</label>
                                                                                            <input type="text" name="b" class="form-control" value="<?php echo $data_soal['b'] ?>">
                                                                                        </div>                                                    
                                                                                        <div class="form-group">
                                                                                            <label>Jawaban C</label>
                                                                                            <input type="text" name="c" class="form-control" value="<?php echo $data_soal['c'] ?>">
                                                                                        </div>                                                    
                                                                                        <div class="form-group">
                                                                                            <label>Jawaban D</label>
                                                                                            <input type="text" name="d" class="form-control" value="<?php echo $data_soal['d'] ?>">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Kunci Jawaban</label>
                                                                                            <input type="text" name="kunci_jawaban" class="form-control" value="<?php echo $data_soal['kunci_jawaban'] ?>">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Soal Aktif</label>
                                                                                            <input type="text" name="kunci_jawaban" class="form-control" value="<?php echo $data_soal['aktif'] ?>">
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="form control">
                                                                                            <input type="submit" class="btn btn-info" value="Simpan">
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                                                                }
                                                            ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Login -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                                            
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tambah Soal</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                                                
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post" action="auth_simpan_soal.php">
                                                    <div class="form-group">
                                                        <label>Soal</label>
                                                        <input type="text" name="soal" class="form-control">
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label>Jawaban A</label>
                                                        <input type="text" name="a" class="form-control">
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label>Jawaban B</label>
                                                        <input type="text" name="b" class="form-control">
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label>Jawaban C</label>
                                                        <input type="text" name="c" class="form-control">
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label>Jawaban D</label>
                                                        <input type="text" name="d" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kunci Jawaban</label>
                                                        <input type="text" name="kunci_jawaban" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Soal Aktif</label>
                                                        <input type="text" name="aktif" class="form-control" placeholder="Y/T">
                                                    </div>
                                                    <hr>
                                                    <div class="form control">
                                                        <input type="submit" class="btn btn-info" value="Tambah Soal">
                                                    </div>
                                                </form>
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