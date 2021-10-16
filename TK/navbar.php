        <header>
        <style>
                .scrolling-active{
                    background: white;
                    box-shadow: 0 4px 1rem rgba(0,0,0,.1);
                }
            </style>  
            <div>
                <nav class="navbar navbar-expand-lg navbar-transparent fixed-top " id="myHeader">
                    <div class="container" >

                        <a class="navbar-brand" href="#">
                            <img src="image/logo.png" alt="Logo" style="width:40px;">
                            <span class="p-2 font-weight-bold text-dark">TK TARBIYATUL FALLAH</span>  
                        </a>
                            
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="menu">
                        
                        <hr class="" style="background: greenyellow;">
                        
                        <ul class="navbar-nav">
                            <li class="nav-item mr-sm-4 font-weight-bold">
                                <a class="nav-link text-dark" href="index.php">Home</a>
                            </li>
                            <li class="nav-item mr-sm-4 font-weight-bold">
                                <a class="nav-link text-dark" href="form_pendaftaran.php" target="_blank">Daftar Online</a>
                            </li>
                            <li class="nav-item mr-sm-4 font-weight-bold">
                                <a class="nav-link text-dark" href="https://api.whatsapp.com/send?phone=6285217074519&text=Halo%20saya%20ingin%20menanyakan%20tentang%20pendaftaran%20sekolah%di%20TK%20Tarbiyatul%20Fallah." target="_BLANK">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                    </svg>
                                    <span style="margin-left: 2px;">085217074519</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    </div>
                </nav>

            </div>

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
        </header>