<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Tugasan Mingguan</title>

    {{-- css style/design path --}}
    <link rel="stylesheet" href="{{ asset('css/laporanstyle.css') }}" class="">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="{{ route('home') }}" class="logo">
            <img src="/img/psis.png" alt="" class="">
        </a>

        <i class="bx bx-menu" id="menu-icon"></i>

        <nav class="navbar">
            <a href="{{ route('ringkasan') }}" class="">RINGKASAN EKSEKUTIF</a>
            <a href="{{ route('pengenalan')}}" class="">PENGENALAN</a>
            <a href="{{ route('latarbelakang') }}" class="">LATAR BELAKANG</a>
            <a href="{{ route('aktiviti') }}" class="">AKTIVITI</a>
            <a href="{{ route('laporan') }}" class="">LAPORAN</a>
            <a href="{{ route('kesimpulan') }}" class="">KESIMPULAN</a>
        </nav>
    </header>

    <section class="intro">
        <div class="home-content">
            <h1 class="">LAPORAN TEKNIKAL</h1>
        </div>

        <p class="">Laporan teknikal ini memberi tumpuan kepada tugasan yang dilaksanakan sepanjang latihan industri selama 20 minggu,
            selaras dengan proses dan prosedur yang ditetapkan bagi memastikan kelancaran operasi organisasi. Semua aktiviti dan tugasan
            didokumentasikan bagi membantu pelajar memahami serta mengendalikan kerja secara berkesan.</p>

        <p class="">Laporan ini turut membentangkan aktiviti dan tugasan yang dilaksanakan di HPCS, dengan fokus kepada pembangunan
            dan penyelenggaraan sistem serta aplikasi berasaskan perisian. Tujuannya adalah untuk meningkatkan kecekapan pengurusan
            sistem sedia ada serta memastikan kualiti dan prestasi aplikasi berada pada tahap optimum.</p>

            <h2 class="heading">TUGASAN</h2>

                <div class="services-container2">
                    <div class="ceo-card2" style="margin-bottom: 5rem">
                        <div class="ceo-container2">
                            <div class="ceo-left2">
                                <img src="/img/laporan/manualTadika.png" alt="CEO Photo" class="ceo-photo2">

                            </div>

                            <div class="ceo-right2">
                                <p class="ceo-welcome2">SISTEM TADIKAPRO</p>
                                <h2 class="ceo-heading2">Membuat Manual Pengguna Bagi Peranan Pengurus</h2>
                                <p class="ceo-message2">Membuat manual pengguna dengan menggunakan perisian Google Docs.</p>
                                <p class="ceo-message2">Memastikan setiap modul didalam sistem TadikaPro tersedia didalam
                                                        manual pengguna bagi tujuan memudahkan pengguna dalam mengetahui selok-belok sistem.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services-container">
                    <div class="ceo-card" style="margin-bottom: 5rem">
                        <div class="ceo-container">
                            <div class="ceo-left">
                                <img src="/img/laporan/backendMyOshe.png" alt="CEO Photo" class="ceo-photo">

                            </div>

                            <div class="ceo-right">
                                <p class="ceo-welcome">SISTEM SHERMAN x MyOSHE</p>
                                <h2 class="ceo-heading">Mendapat Kebenaran Untuk Mengekses Code Backend</h2>
                                <p class="ceo-message">Mendaapat kebenaran daripada developer untuk mengekses code backend bagi sistem SHERMAN
                                                        dengan menggunakan Framework Yii2 Advance.</p>
                                <p class="ceo-message">Belajar untuk membuat asas-asas function seperti CRUD, dan belajar
                                                        untuk memahami folder structure dan coding style.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="services-container2">
                    <div class="ceo-card2" style="margin-bottom: 5rem">
                        <div class="ceo-container2">
                            <div class="ceo-left2">
                                <img src="/img/laporan/manualMyOshe.png" alt="CEO Photo" class="ceo-photo2">

                            </div>

                            <div class="ceo-right2">
                                <p class="ceo-welcome2">SISTEM SHERMAN x MyOSHE</p>
                                <h2 class="ceo-heading2">Membuat Manual Pengguna Bagi Peranan PTJ(Pusat Tanggungjawab)</h2>
                                <p class="ceo-message2">Membuat manual pengguna dengan menggunakan perisian Google Docs.</p>
                                <p class="ceo-message2">Memastikan setiap modul didalam sistem SHERMAN x MyOshe tersedia didalam
                                                        manual pengguna bagi tujuan memudahkan pengguna dalam mengetahui selok-belok sistem.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services-container">
                    <div class="ceo-card" style="margin-bottom: 5rem">
                        <div class="ceo-container">
                            <div class="ceo-left">
                                <img src="/img/laporan/UATMyOshe.png" alt="CEO Photo" class="ceo-photo">

                            </div>

                            <div class="ceo-right">
                                <p class="ceo-welcome">SISTEM SHERMAN x MyOSHE</p>
                                <h2 class="ceo-heading">Membuat UAT(User Acceptance Test) Bagi Peranan PTJ(Pusat Tanggungjawab)</h2>
                                <p class="ceo-message">Membuat UAT dengan menggunakan perisian Google Docs.</p>
                                <p class="ceo-message">Memastikan setiap modul didalam sistem SHERMAN x MyOshe tersedia didalam
                                                        UAT bagi tujuan memudahkan penguji dalam menguji sistem.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services-container2">
                    <div class="ceo-card2" style="margin-bottom: 5rem">
                        <div class="ceo-container2">
                            <div class="ceo-left2">
                                <img src="/img/minggu/minggu13/image.png" alt="CEO Photo" class="ceo-photo2">

                            </div>

                            <div class="ceo-right2">
                                <p class="ceo-welcome2">WEBSITE BEAMBOX MALAYSIA</p>
                                <h2 class="ceo-heading2">Mendirikan Website Beambox Malaysia</h2>
                                <p class="ceo-message2">Membangunkan website dengan menggunakan Joomla CMS.</p>
                                <p class="ceo-message2">Membangunkan landing website(CMS) dengan menerapkan design konsep yang
                                                        mesra pengguna.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services-container">
                    <div class="ceo-card" style="margin-bottom: 5rem">
                        <div class="ceo-container">
                            <div class="ceo-left">
                                <img src="/img/laporan/UIMAINPP.png" alt="CEO Photo" class="ceo-photo">

                            </div>

                            <div class="ceo-right">
                                <p class="ceo-welcome">DESIGN WAKAF PULAU PINANG(MAINPP)</p>
                                <h2 class="ceo-heading">Membuat Design UI(UserInterface) Bagi website MAINPP</h2>
                                <p class="ceo-message">Membuat design dengan menggunakan perisian Figma.</p>
                                <p class="ceo-message">Memastikan setiap design dibuat mesra pengguna dengan
                                                        menerapkan konsep(font, warna dan size) yang konsisten.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services-container2">
                    <div class="ceo-card2" style="margin-bottom: 5rem">
                        <div class="ceo-container2">
                            <div class="ceo-left2">
                                <img src="/img/laporan/UITadika.png" alt="CEO Photo" class="ceo-photo2">

                            </div>

                            <div class="ceo-right2">
                                <p class="ceo-welcome2">DESIGN TADIKAPRO APP</p>
                                <h2 class="ceo-heading2">Membuat Design UI(UserInterface) Bagi App TadikaPro</h2>
                                <p class="ceo-message2">Membuat design dengan menggunakan perisian Figma.</p>
                                <p class="ceo-message2">Memastikan setiap design dibuat mesra pengguna dengan
                                                        menerapkan konsep(font, warna dan size) yang konsisten.</p>
                            </div>
                        </div>
                    </div>
                </div>


    </section>
    <footer class="footer">
        <div class="social-icons">
                    <a href="https://github.com/daus-commit" class="">
                        <i class="bx bxl-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/firdaus-hakimi-07a376382?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="">
                        <i class="bx bxl-linkedin-square"></i>
                    </a>
                    <a href="https://www.tiktok.com/@hyefellers?_r=1&_t=ZS-94S1hwqlhZd" class="">
                        <i class="bx bxl-tiktok"></i>
                    </a>
                    <a href="https://www.instagram.com/nisapenihm?igsh=aDE5MjF5dGwxZHlo" class="">
                        <i class="bx bxl-instagram icon"></i>
                    </a>
                </div>

        <ul class="list">
            <li class="">
                <a href="{{ route('ringkasan') }}" class="">RINGKASAN EKSEKUTIF</a>
            </li>
            <li class="">
                <a href="{{ route('pengenalan')}}" class="">PENGENALAN</a>
            </li>
            <li class="">
                <a href="{{ route('latarbelakang') }}" class="">LATAR BELAKANG</a>
            </li>
            <li class="">
                <a href="{{ route('aktiviti') }}" class="">AKTIVTI</a>
            </li>
            <li class="">
                <a href="{{ route('laporan') }}" class="">LAPORAN</a>
            </li>
            <li class="">
                <a href="{{ route('kesimpulan') }}" class="">KESIMPULAN</a>
            </li>
        </ul>



        <p class="copyright">
            DISEDIAKAN OLEH MUHAMMAD FIRDAUS HAKIMI BIN RISAL | 17DDT23F1027
        </p>
    </footer>
    <!-- Floating navigation button (bottom-right) -->
    <a href="{{ route('home') }}" class="float-nav-btn">
       <i class="">
            <img src="/icon/home.png" alt="" class="">
        </i>
    </a>
    <script src="/js/homejs.js"></script>
</body>
</html>
