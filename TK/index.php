    <!--include header-->

    <?php
        include "header.php";
    ?>

    <!--end header-->

        <!--judul-->

        <title>TK Tarbiyatul Fallah | Halaman Utama</title>

        <!--end judul-->

    </head>
    <body style="font-family: Sans-serif;">
        <!--include navbar-->

        <?php
            include "navbar.php";
        ?>

        <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan']=="belum_login") { ?>
                <script>
                $( document ).ready(function() {
                    swal({
                        title: '<h4 class="font-weight-bold" style="color: red;">Silahkan Login untuk mengakses aplikasi!</h4>',
                        type: 'info',
                        showConfirmeButton: true
                    })
                })
                </script>
            <?php
                } else if($_GET['pesan'] == "logout") { ?>
                <script>
                $( document ).ready(function() {
                    swal({
                        title: '<h4 class="font-weight-bold" style="color: red;">Anda telah logout dari aplikasi!</h4>',
                        type: 'info',
                        showConfirmeButton: true
                    })
                })
                </script>
            <?php
                }
            };
        ?>
        
        <!--end navbar-->

        
        <!--konten-->
        <div class="jumbotron text-center" style="background-image: url(image/fr-pd.jpg); background-size: cover; height: 700px; margin-bottom: auto; width: 100%;">
            <div class="container" style="width: 90%; height: 500px; outline:none; border-radius: 20px; background: linear-gradient(rgba(0,0,0.5,0.5), rgba(0,0,0.5,0.5));">

                <!-- jumbotron atas -->

                <div class="container  text-light">
                    <h1 class="p-4" style="margin-top: 45px;">WELCOME TO<br><span class="font-weight-bold">TK TARBIYATUL FALLAH</span></h1>
                    <div 
                        class="card col-md-7 container text-light" 
                        style="width: 500; 
                                outline:none; 
                                border-radius: 20px;
                                background: linear-gradient(rgba(0,0,0.5,0.5), rgba(0,0,0.5,0.5));"
                    >
                        <p class="lead" style="margin-top: 25px; font-size: 18px;">Selamat datang di Web TK TARBIYATUL FALLAH, temukan segala informasi dan update terbaru tentang TK TARBIYATUL FALLAH di sini.</p>

                    </div>
                </div>

                <a href="#sambutan" class="btn btn-light font-weight-bold js-scroll-trigger" style="margin-top: 50px; border-radius: 50px;">Mulai Melihat</a>

            </div>
                
        </div>

            <!-- end jumbotron -->

            <!-- kata sambutan -->
        <div style="background-image: url(image/bg-1.png); background-size:inherit;">
            <hr style="margin-bottom: 75px;">

            <!-- End Profil -->

            <div class="card container text-center text-light" style="font-family: cursive; background-color: #1c2331" id="sambutan">
                <h1 style="margin-top: 20px;">YAYASAN TARBIYATUL FALLAH AZ-ZAHRA</h1>

                <div class="text-left" style="margin-top: 50px; font-size: 17px; margin-left: 50px; margin-right: 50px;">

                    <p><img src="image/ft-sambutan.jpeg" class="float-right" style="margin-bottom: 40px; width: 280px; height: 400px;"></p>

                    <p class="font-weight-bold col-md-8">SAMBUTAN KEPALA YAYASAN TARBIYATUL FALLAH AZ-ZAHRA</p>

                    <p class="col-md-8">Assalamualaikum Wr. Wb.</p>

                    <p class="col-md-8">Puji syukur kami panjatkan kehadirat Allah SWT, atas segala limpahan Rahmat, Taufiq, Hidayah, serta Inayah-Nya kepada kita semua, sehingga kita masih diberi kesempatan untuk berpartisipasi secara aktif dalam dunia pendidikan.</p>

                    <p class="col-md-8">Dalam era globalisasi saat ini, kecepatan memperoleh informasi akan menjadi modal utama dalam rangka menentukan langkah kedepan. Untuk mewujudkan hal itu, telah membuat terobosan baru berupa website dengan harapan bisa lebih komunikatif dan lebih bisa memenuhi kebutuhan informasi tentang sekolah kami.</p>

                    <p class="col-md-8">Wassalamu’alaikum Wr.Wb.</p>
                    
                    <p class="col-md-8" style="margin-top: 50px; margin-bottom: 20px;">Gunung Putri, 10 April 2021</p>

                    <p class="col-md-8" style="margin-top: 50px; margin-bottom: 40px;">Rahmat, S.Pd.I</p>
                    
                </div>
            </div>

            <!-- end sambutan -->

            <!-- Profil Sekolah -->
            <section>
                    <div class="container text-left text-md-start mt-5">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card text-white" style="background-color: #331900">
                                    <div class="card-header">
                                        <h2 class="card-title text-center">Profil Singkat Sekolah</h2>
                                    </div>
                                    <div>
                                        <div class="card-body text-lg-center container " style="margin-bottom: auto; margin-top: auto; font-size: 20px;">
                                            <p>"TK Tarbiyatul Fallah adalah lembaga pendidikan yang berada di bawah naungan Yayasan Tarbiyatul Fallah Az-Zahra, berdiri pada tahun 2003 dan berlokasi di kelurahan gunung putri Kabupaten Bogor – Jawa Barat."</p>
                                            <a href="profil_sekolah.php" class="btn btn-outline-light" style="margin-top: 10px; margin-bottom: 12px;">Info Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card text-white" style="background-color: #331900;">
                                    <div class="card-header">
                                        <h2 class="card-title text-center">Bangunan Sekolah</h2>
                                    </div>
                                    <div class="card-body" style="margin-bottom: 0px; margin-top: 0px; ">
                                        <div class="text-lg-center container " style="font-size: 20px;">
                                        <div id="demo" class="carousel slide" data-ride="carousel" style="margin-bottom: auto;">
                                        <ul class="carousel-indicators">
                                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                                            <li data-target="#demo" data-slide-to="1"></li>
                                            <li data-target="#demo" data-slide-to="2"></li>
                                            <li data-target="#demo" data-slide-to="3"></li>
                                            <li data-target="#demo" data-slide-to="4"></li>
                                        </ul>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img src="image/bangunan1.jpg" alt="Los Angeles" width="100%" height="250px">
                                            <div class="carousel-caption">
                                                <h4>Tampak Depan</h4>
                                                <p>Foto Bangunan Depan Sekolah</p>
                                            </div>   
                                            </div>
                                            <div class="carousel-item">
                                            <img src="image/bangunan2.jpg" alt="Chicago" width="100%" height="250px">
                                            <div class="carousel-caption">
                                                <h4>Ruang Kelas</h4>
                                                <p>Foto Ruang Kelas PAUD dan TK/RA</p>
                                            </div>   
                                            </div>
                                            <div class="carousel-item">
                                            <img src="image/bangunan3.jpg" alt="New York" width="100%" height="250px">
                                            <div class="carousel-caption">
                                                <h3>Ruang Guru</h3>
                                                <p>Foto Ruang Guru</p>
                                            </div>   
                                            </div>
                                            <div class="carousel-item">
                                            <img src="image/bangunan5.jpg" alt="Chicago" width="100%" height="250px">
                                            <div class="carousel-caption">
                                                <h3>Taman Bermain</h3>
                                                <p>Foto Taman Bermain</p>
                                            </div>   
                                            </div>
                                            <div class="carousel-item">
                                            <img src="image/bangunan4.jpg" alt="Chicago" width="100%" height="250px">
                                            <div class="carousel-caption">
                                                <h3>Mushola</h3>
                                                <p>Foto Mushola</p>
                                            </div>   
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#demo" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>                
            </section>

            <!-- baris informasi -->
            <section>
            <div class="text-left text-md-start" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card text-white bg-info">
                            <div class="card-header">
                                <h2 class="card-title text-center">Aktivitas Tahunan</h2>
                            </div>
                                <div  class="container">
                                    <div class="card-body text-lg-left" style="margin-bottom: 40px; margin-top: 20px;">

                                        <img class="float-left mr-4 col-md-4" src="image/manasik_haji.jpg" style="width: 340px; height: 100%;">
                                        <h4 class="card-title">Manasik Haji</h4>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px"/>
                                        <p class="">Latihan Manasik haji TK dapat dipandang sebagai bentuk permainan, yaitu permainan peran yang mengasyikkan anak dimana anak pura-pura menjadi seorang muslim yang sedang melaksanakan ibadah terlengkap dalam agama Islam, karena dalam ritual haji meliputi pelaksanaan: Pengucapan Syahadatain, Sholat, Puasa dan zakat serta haji itu sendiri.</p>

                                    </div>

                                    <hr class="bg-white col-md-8">

                                    <div class="card-body text-lg-right" style="margin-bottom: 65px; margin-top: 20px;">

                                        <img class="float-right ml-4 col-md-4" src="image/market_day.jpg" style="width: 340px; height: 170px;">
                                        <h4 class="card-title">Market Day</h4>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px"/>
                                        <p class="">Untuk menumbuhkan jiwa kewirausahaan sejak dini sekaligus memberikan pengalaman langsung menjadi penjual dan pembeli bagi siswa taman kanak-kanak (TK) maka TK Tarbiyatul Fallah membuat kegiatan bernama Market Day (Hari Pasar).</p>

                                    </div>

                                    <hr class="bg-white col-md-8">

                                    <div class="card-body text-lg-left" style="margin-bottom: 65px; margin-top: 20px;">

                                        <img class="float-left mr-4 col-md-4" src="image/berenang.jpg" style="width: 340px; height: 170px;">
                                        <h4 class="card-title">Berenang</h4>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px"/>
                                        <p class="">Merupakan kegiatan rutin yang dilakukan TK Tarbiyatul Fallah sebagai upaya untuk memperkenalkan kepada anak salah satu olahraga yang sangat baik bagi pertumbuhan anak-anak seusia mereka.</p>

                                    </div>

                                    <hr class="bg-white col-md-8">

                                    <div class="card-body text-lg-right" style="margin-bottom: 85px; margin-top: 20px;">

                                        <img class="float-right ml-4 col-md-4" src="image/home_visits.jpg" style="width: 340px; height: 170px;">
                                        <h4 class="card-title">Home Visit</h4>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px"/>
                                        <p class="">Home visit merupakan suatu program sekolah yang dilaksanakan oleh guru dengan cara mengunjungi tempat tinggal murid untuk memberikan pembelajaran dan bimbingan.</p>

                                    </div>

                                    <hr class="bg-white col-md-8">
                                    
                                    <div class="card-body text-lg-left" style="margin-bottom: 80px; margin-top: 20px;"> 

                                        <img class="float-left mr-4 col-md-4" src="image/porseni.jpg" style="width: 340px; height: 170px;">
                                        <h4 class="card-title">Porseni</h4>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px"/>
                                        <p class="">Pekan Olahraga dan Seni atau disingkat PORSENI adalah ajang atau acara dimana siswa/i TK Tarbiyatul Fallah menunjukan minat dan bakatnya dibidang olahraga seni.</p>

                                    </div>

                                    <hr class="bg-white col-md-8">

                                    <div class="card-body text-lg-right" style="margin-bottom: 65px; margin-top: 20px;">

                                        <img class="float-right ml-4 col-md-4" src="image/tartib_ramadhan.jpeg" style="width: 340px; height: 170px;">
                                        <h4 class="card-title">Tarhib Ramadhan</h4>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px"/>
                                        <p class="">Acara untuk menyambut datangnya bulan suci ramadhan dimana siswa/i TK Tarbiyatul Fallah akan terlibat langsung dalam acara tersebut.</p>

                                    </div>

                                    <hr class="bg-white col-md-8">

                                    <div class="card-body text-lg-left" style="margin-bottom: 65px; margin-top: 20px;">

                                        <img class="float-left mr-4 col-md-4" src="image/tahun_islam.jpeg" style="width: 340px; height: 170px;">
                                        <h4 class="card-title">Tahun Baru islam</h4>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px"/>
                                        <p class="">Merupakan kegiatan rutin yang dilakukan TK Tarbiyatul Fallah dalam rangka memperingati pergantian tahun baru hijriah yang biasanya diadakan dengan acara pengajian dan pawai obor.</p>

                                    </div>

                                    <hr class="bg-white col-md-8">

                                    <div class="card-body text-lg-right" style="margin-bottom: 65px; margin-top: 20px;">

                                        <img class="float-right ml-4 col-md-4" src="image/agustusan.jpg" style="width: 340px; height: 170px;">
                                        <h4 class="card-title">Lomba 17 Agustus</h4>
                                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px"/>
                                        <p class="">Kegiatan tahunan yang diselenggaran TK Tarbiyatul Fallah dalam rangka memperingati hari kemerdekaan negara kesatuan republik indonesia.</p>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            </section>

            <section>
                <div class="container text-left text-md-start mt-5">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card text-white bg-danger">
                                <div class="card-header">
                                    <h2 class="card-title text-center">PPDB Online TK TARBIYATUL FALLAH Tahun Ajaran <?php echo (int)date('Y')."/".((int)date('Y')+1) ?></h2>
                                </div>
                                <div>
                                    <div class="card-body text-lg-center" style="margin-bottom: 40px; margin-top: 20px;">
                                        <h4>Waktu Pendaftaran</h4>
                                        <h4>Bulan Januari - Akhir Maret <?php echo (int)date('Y') ?> </h4>
                                        <h4>Setiap Hari Kerja</h4>
                                        <h4>Pukul : 07.00-15.00 WIB</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </section>

            <section class="projects-section" id="projects" style="padding: 50px;">
                <div class="container">
                    <!-- Project One Row-->
                    <div class="card-header bg-info">
                        <h2 class="card-title text-center text-light">Kenapa Kami?</h2>
                    </div>
                    <div class="card-body bg-info">
                        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                            <div class="col-lg-6"><img class="img-fluid" src="image/pendidikan_islami.jpg" alt="" /></div>
                            <div class="col-lg-6">
                                <div class="bg-info text-center h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-center text-lg-left">
                                            <h4 class="text-white">Pendidikan Islami</h4>
                                            <p class="mb-0 text-white">Menjadikan anak tidak hanya belajar tentang dunia saja tetapi juga belajar syariat-syariat agama islam </p>
                                            <hr class="d-none d-lg-block mb-0 ml-0" style="background-color: white; height: 4px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Two Row-->
                        <div class="row justify-content-center no-gutters">
                            <div class="col-lg-6"><img class="img-fluid" src="image/pengajar.jpg" alt="" /></div>
                            <div class="col-lg-6 order-lg-first">
                                <div class="bg-info text-center h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-center text-lg-right">
                                            <h4 class="text-white">Guru Kompeten</h4>
                                            <p class="mb-0 text-white">Memiliki guru-guru yang berkompeten dalam mengajar dan sudah memiliki pengalaman mengajar bertahun-tahun</p>
                                            <hr class="d-none d-lg-block mb-0 mr-0" style="background-color: white; height: 4px;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                            <div class="col-lg-6"><img class="img-fluid" src="image/pendidikan_berpengalaman.jpg" alt="" /></div>
                            <div class="col-lg-6">
                                <div class="bg-info text-center h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-center text-lg-left">
                                            <h4 class="text-white">Berpengalaman</h4>
                                            <p class="mb-0 text-white">Berpengalaman dalam dunia pendidikan lebih dari 18 tahun </p>
                                            <hr class="d-none d-lg-block mb-0 ml-0" style="background-color: white; height: 4px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Two Row-->
                        <div class="row justify-content-center no-gutters">
                            <div class="col-lg-6"><img class="img-fluid" src="image/piala.jpg" alt="" /></div>
                            <div class="col-lg-6 order-lg-first">
                                <div class="bg-info text-center h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-center text-lg-right">
                                            <h4 class="text-white">Berprestasi</h4>
                                            <p class="mb-0 text-white">Sudah mengikuti dan menjuarai berbagai lomba, baik lomba tingkat kota sampai tingkat kabupaten.</p>
                                            <hr class="d-none d-lg-block mb-0 mr-0" style="background-color: white; height: 4px;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
            <div class="text-left text-md-start" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card text-white bg-danger">
                            <div class="container  text-light">
                                <h1 class="p-4" style="margin-top: 45px;">Tunggu Apa Lagi?<br><span class="font-weight-bold">Daftarkan Anak Ayah dan Ibu Segera!</span></h1>
                            </div>
                            <div class="container col-md-9" style="padding: 20px;">
                                <a href="form_pendaftaran.php" class="btn btn-outline-light border">DAFTAR SEKARANG</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            </section>  

        </div>
        <!--end konten-->


    <!--include footer-->

    <?php 
        include "footer.php";
    ?>

    <!--end footer-->

    </body>
<html>
