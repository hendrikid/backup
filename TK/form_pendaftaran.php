    <!--include header-->

    <?php
        include "header.php";
    ?>

    <?php 
        error_reporting(0);

        session_start();
    
        // cek apakah yang mengakses halaman ini sudah login
        if ($_SESSION['level']==""){

        } else if ($_SESSION['level']=="admin"){
            header("location:dashboard-admin.php");
        } else {
            header("location:dashboard-user.php");
        }
 
	?>

    <!--end header-->

        <!--judul-->

        <title>TK Tarbiyatul Fallah | Halaman Utama</title>

        <!--end judul-->
        <style>
            .scrolling-active{
                background: white;
                padding: auto;
                box-shadow: 0 4px 2rem rgba(0,0,0,5);
            }
        </style>  
    </head>

    <body style="font-family: Sans-serif;" class="bg-danger">
    
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan']=="gagal") { ?>
            <script>
            $( document ).ready(function() {
                swal({
                    title: '<h5>Pendaftaran gagal, mungkin hal ini terjadi karena anda menekan tombol lanjutkan lebih dari 1 kali, silahkan coba beberapa saat lagi atau silahkan menghubungi kami melalui WhatsApp atau telepon.</h5>',
                    type: 'error',
                    showConfirmeButton: true
                })

            })
            </script>
        <?php
            } else if ($_GET['pesan']=="disable"){ ?>
                <script>
                $( document ).ready(function() {
                    swal({
                        title: '<h4 class="font-weight-bold" style="color: red;">Login gagal!</h4> <h5>Akun Diblokir!</h5>',
                        type: 'error',
                        showConfirmeButton: true
                    })
    
                })
                </script>
        <?php
            } else if ($_GET['pesan']=="gagal_login"){ ?>
                <script>
                $( document ).ready(function() {
                    swal({
                        title: '<h4 class="font-weight-bold" style="color: red;">Login gagal!</h4> <h5>No.telp/password salah.</h5>',
                        type: 'error',
                        showConfirmeButton: true
                    })
    
                })
                </script>
        <?php
            } else if ($_GET['pesan']=="tlpn_salah"){ ?>
                <script>
                $( document ).ready(function() {
                    swal({
                        title: '<h5>No. Telp. tidak boleh kurang/lebih dari 10-13 digit</h5>',
                        type: 'error',
                        showConfirmeButton: true
                    })
    
                })
                </script>
        <?php
            } else if ($_GET['pesan']=="pw_salah"){ ?>
                <script>
                $( document ).ready(function() {
                    swal({
                        title: '<h5>Password tidak boleh kurang/lebih dari 10 karakter.</h5>',
                        type: 'error',
                        showConfirmeButton: true
                    })
    
                })
                </script>
        <?php
            } else if ($_GET['pesan']=="pw_salah1"){ ?>
                <script>
                $( document ).ready(function() {
                    swal({
                        title: '<h5>Password berbeda anda harus memasukan password yang sama di kolom ulangi password.</h5>',
                        type: 'error',
                        showConfirmeButton: true
                    })
    
                })
                </script>        
        <?php
            } else if ($_GET['pesan']=="id_ditolak"){ ?>
                <script>
                $( document ).ready(function() {
                    swal({
                        title: '<h5>No. Telp. telah didaftarkan silahkan coba nomer yang lain.</h5>',
                        type: 'error',
                        showConfirmeButton: true
                    })
    
                })
                </script>
        <?php
            } else { ?>
                <script>
                $( document ).ready(function() {
                    swal({
                        title: '<h5>Selamat anda telah berhasil mendaftar, silahkan login kedalam aplikasi dengan menekan tombol login.</h5>',
                        type: 'success',
                        showConfirmeButton: true
                    })
    
                })
                </script>
            <?php
            }
        };
        ?>

        <div>
            <nav class="navbar navbar-expand-lg  fixed-top" id="myHeader" style="background-color: white; box-shadow: 0 4px 1rem rgba(0,0,0,0.2);">
                <div class="container" >

                    <a class="navbar-brand" href="index.php">
                        <img src="image/logo.png" alt="Logo" style="width:40px;">  
                        <span class="font-weight-bold text-light text-left text-dark" style="font-size: 20px; margin-left: 5px;">PSBO TK Tarbiyatul Fallah</span>
                        
                    </a>
                </div>
            </nav>
        </div>
        
        <!-- Modal Login -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                                    
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Silahkan Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                                        
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="auth_login.php">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="No. Telp">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <hr>
                            <div class="form-group" id="show_hide_password">
                                <input type="submit" name="" value="Login" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>                
                </div>
            </div>
        </div>

        <!--end navbar-->
        


        <!--konten-->
        <section>
            <div class="text-left text-md-start" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card text-white bg-danger">
                            <div class="container text-light text-center">
                                <div class="card bg-transparent p-2 border-light" style="margin-bottom: 1%; border-radius: 15px 50px 30px 5px;">
                                    <h2 class="text-center" style="margin-top: 1%;">PENDAFTARAN MURID BARU</h2>
                                    <hr class="mb-2 mt-0 d-inline-block mx-auto container col-md-8" style="width: 60px; background-color: white; height: 2px;"/>
                                    <div class="col-md-8 container">
                                        <p class="text-center p-2">Jika anda telah berhasil mendaftar silahkan login kedalam aplikasi <br> menggunakan no. telp. dan password yang telah dibuat dengan klik tombol login dibawah.</p>
                                        <div class="container text-center">
                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-outline-light border" data-toggle="modal" data-target="#myModal" style="margin-bottom: 1%;">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="mt-5 jumbotron text-center" style="background-image: url(image/bg-1.png);">
                <div class="container">
                    <div class="card bg-success" style="border-radius: 20px;">
                        <div class="card-header">
                            <h2 class="text-white">Formulir Pendaftaran</h2>
                        </div>
                        <div class="container">
                            <form action="validasi_pendaftaran.php" method="post" class="container">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <hr class="bg-light">
                                        <h2 class="text-light text-left">Data Anak</h2>
                                        <hr class="bg-light">
                                        <div class="card">
                                            <div class="card-body text-left">
                                                <div class="form-group">
                                                    <?php
                                                        $str_pendaftar    = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                                                        $rndom_sw   = str_shuffle($str_pendaftar);
                                                        $substr_sw  = substr($rndom_sw,0,4);
                                                        $tahun      = date('Y');
                                                        $id_pendaftar = "PD".substr($tahun,2).(substr($tahun,2)+1)."RA".$substr_sw;
                                                        $id_pendaftaran = "PDN".substr($tahun,2).(substr($tahun,2)+1)."RA".$substr_sw;
                                                    ?>
                                                    <input type="text" class="form-control" name="id_pendaftar" value="<?= $id_pendaftar; ?>" readonly hidden>    
                                                    <input type="text" class="form-control" name="id_pendaftaran" value="<?= $id_pendaftaran; ?>" readonly hidden>    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_lengkap">    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama Panggilan</label>
                                                    <input type="text" class="form-control" name="nama_panggilan">    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">Tempat/Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="tmp_tgl_lahir">    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label> 
                                                    <select name="jenis_kelamin" class="form-control">
                                                        <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                                    
                                                        <option value="L">L</option>
                                                        <option value="P">P</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <input type="text" class="form-control" name="agama">    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Anak Ke</label>
                                                    <input type="text" class="form-control" name="anak_ke">    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Jumlah Saudara</label>
                                                    <input type="text" class="form-control" name="jumlah_saudara">    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Alamat Lengkap</label>
                                                    <input type="text" class="form-control" name="alamat_lengkap">    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Kelainan Jasmani</label>
                                                    <select name="kelainan_jasmani" class="form-control">
                                                        <option value="" disabled selected>-- Pilih --</option>
                                                    
                                                        <option value="Ada">Ada</option>
                                                        <option value="Tidak Ada">Tidak Ada</option>
                                                    </select>   
                                                </div>      

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-left text-white">
                                    <hr class="bg-light">
                                    <h2>Data Orangtua</h2>
                                    <hr class="bg-light">
                                    </div>
                                    <div class="col-md-6 mb-2" style="margin-top: 2%;">
                                        <h4 class="text-white text-left">Data Ayah</h4>
                                        <hr class="bg-light">
                                        
                                        <div class="card">
                                            <div class="card-body text-left">
                                                <div class="form-group">
                                                    <label for="">Nama Ayah</label>
                                                    <input type="text" class="form-control" name="nama_ayah">    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tempat/Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="tmp_tgl_lahir_ayah">    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <input type="text" class="form-control" name="agama_ayah">    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">Pendidikan</label>
                                                    <input type="text" class="form-control" name="pendidikan_ayah">    
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ayah">    
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat_ayah">    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">No KTP</label>
                                                    <input type="text" class="form-control" name="no_ktp_ayah">    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2" style="margin-top: 2%;">
                                        <h4 class="text-white text-left">Data Ibu</h4>
                                        <hr class="bg-light">
                                        <div class="card">
                                            <div class="card-body text-left">
                                                <div class="form-group">
                                                    <label for="">Nama Ibu</label>
                                                    <input type="text" class="form-control" name="nama_ibu">    
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tempat/Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="tmp_tgl_lahir_ibu">    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <input type="text" class="form-control" name="agama_ibu">    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">Pendidikan</label>
                                                    <input type="text" class="form-control" name="pendidikan_ibu">    
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaan_ibu">    
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat_ibu">    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">No KTP</label>
                                                    <input type="text" class="form-control" name="no_ktp_ibu">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-left text-white">
                                        <hr class="bg-light">
                                        <h2>Buat Akun</h2>
                                        <hr class="bg-light">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>* Akun ini dapat digunakan untuk login kedalam aplikasi pendaftaran untuk melihat status pendaftaran, edit data pendaftaran dan tes pendaftaran</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>* Pastikan nomer telepon yang didaftarkan merupakan nomer telepon yang aktif agar memudahkan pihak sekolah menghubungi ketika proses pendaftaran berlangsung</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2" style="margin-top: 2%;">
                                        <div class="card">
                                            <div class="card-body text-left">
                                                <div class="form-group">
                                                    <label for="">No. Telp/HP</label>
                                                    <p style="color: red; font-size: 13px">*No. Telp/Hp tidak boleh kurang dari 10 dan lebih dari 13 digit dan pastikan nomer aktif</p> 
                                                    <input type="text" class="form-control" name="username" placeholder="">    
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="">Password</label>
                                                        <p style="color: red; font-size: 13px">*Password harus 10 karakter tidak boleh kurang/lebih</p> 
                                                        <input type="password" class="form-control" name="password" placeholder="">    
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="">Ulangi Password</label>
                                                        <p style="color: red; font-size: 13px">*Masukan password yang sama dengan kolom password dikiri</p> 
                                                        <input type="password" class="form-control" name="password1" placeholder="">    
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr class="bg-light">

                                                                
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-warning col-md-12 text-white border" value="Daftar" style="font-size: 20px;">
                                </div>
                                <br>

                            </form>

                            <p class="text-light" style="font-size: 12px;">Demi keamanan jangan memberitahukan username dan password pada siapapun kecuali petugas penerimaan di sekolah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--end konten-->

    <!--include footer-->

    <?php 
        include "footer.php";
    ?>

    <!--end footer-->

    <style>
                .sticky{
                    position: fixed;
                    top: 0;
                    width: 100%;
                }
            </style>
            <script>
                window.onscroll = function() {myFunction()};

                var header = document.getElementById("myHeader");
                var sticky = header.offsetTop;

                function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
                }
            </script>

            <script>
                window.addEventListener('scroll', function () {
                    let header = document.querySelector('nav');
                    header.classList.toggle('scrolling-active', window.scrollY > 0);
                })
            </script>
            <script>
                $(document).ready(function() {
                    $("#show_hide_password a").on('click', function(event) {
                        event.preventDefault();
                        if($('#show_hide_password input').attr("type") == "text"){
                            $('#show_hide_password input').attr('type', 'password');
                            $('#show_hide_password i').addClass( "fa-eye-slash" );
                            $('#show_hide_password i').removeClass( "fa-eye" );
                        }else if($('#show_hide_password input').attr("type") == "password"){
                            $('#show_hide_password input').attr('type', 'text');
                            $('#show_hide_password i').removeClass( "fa-eye-slash" );
                            $('#show_hide_password i').addClass( "fa-eye" );
                        }
                    });
                });
            </script>
<!--             
            <script type='text/javascript'>
//<![CDATA[
// Inspect
var message="Hayo! Ngapain";function clickIE4(){if(2==event.button)return alert(message),!1}function clickNS4(e){if((document.layers||document.getElementById&&!document.all)&&(2==e.which||3==e.which))return alert(message),!1}document.layers?(document.captureEvents(Event.MOUSEDOWN),document.onmousedown=clickNS4):document.all&&!document.getElementById&&(document.onmousedown=clickIE4),document.oncontextmenu=new Function("alert(message);return false");
!function t(){try{!function t(n){1===(""+n/n).length&&0!==n||function(){}.constructor("debugger")(),t(++n)}(0)}catch(n){setTimeout(t,5e3)}}();
shortcut={all_shortcuts:{},add:function(e,t,a){var o={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(a)for(var r in o)void 0===a[r]&&(a[r]=o[r]);else a=o;o=a.target,"string"==typeof a.target&&(o=document.getElementById(a.target)),e=e.toLowerCase(),r=function(o){var r;if((o=o||window.event,a.disable_in_input)&&(o.target?r=o.target:o.srcElement&&(r=o.srcElement),3==r.nodeType&&(r=r.parentNode),"INPUT"==r.tagName||"TEXTAREA"==r.tagName))return;o.keyCode?code=o.keyCode:o.which&&(code=o.which),r=String.fromCharCode(code).toLowerCase(),188==code&&(r=","),190==code&&(r=".");var n=e.split("+"),c=0,l={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},s={esc:27,escape:27,tab:9,space:32,return:13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,break:19,insert:45,home:36,delete:46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},i=!1,d=!1,p=!1,u=!1,h=!1,f=!1,g=!1,v=!1;o.ctrlKey&&(u=!0),o.shiftKey&&(d=!0),o.altKey&&(f=!0),o.metaKey&&(v=!0);for(var y=0;k=n[y],y<n.length;y++)"ctrl"==k||"control"==k?(c++,p=!0):"shift"==k?(c++,i=!0):"alt"==k?(c++,h=!0):"meta"==k?(c++,g=!0):1<k.length?s[k]==code&&c++:a.keycode?a.keycode==code&&c++:r==k?c++:l[r]&&o.shiftKey&&(r=l[r],r==k&&c++);if(c==n.length&&u==p&&d==i&&f==h&&v==g&&(t(o),!a.propagate))return o.cancelBubble=!0,o.returnValue=!1,o.stopPropagation&&(o.stopPropagation(),o.preventDefault()),!1},this.all_shortcuts[e]={callback:r,target:o,event:a.type},o.addEventListener?o.addEventListener(a.type,r,!1):o.attachEvent?o.attachEvent("on"+a.type,r):o["on"+a.type]=r},remove:function(e){e=e.toLowerCase();var t=this.all_shortcuts[e];if(delete this.all_shortcuts[e],t){e=t.event;var a=t.target;t=t.callback;a.detachEvent?a.detachEvent("on"+e,t):a.removeEventListener?a.removeEventListener(e,t,!1):a["on"+e]=!1}}},shortcut.add("Ctrl+U",function(){alert("Cmon, you better than this")}),shortcut.add("Meta+Alt+U",function(){alert("This is joke right?")}),shortcut.add("Ctrl+C",function(){alert("Wow, amazing!")}),shortcut.add("Meta+C",function(){alert("This is joke right?")});
//]]>
</script> -->
    </body>
</html>
