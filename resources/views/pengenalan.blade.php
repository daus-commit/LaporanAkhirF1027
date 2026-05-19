<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengenalan</title>

    {{-- css style/design path --}}
    <link rel="stylesheet" href="{{ asset('css/pengenalanstyle.css') }}" class="">
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
            <a href="{{ route('Kesimpulan') }}" class="">KESIMPULAN</a>
        </nav>
    </header>

    <section class="intro">
        <div class="home-content">
            <h1 class="">PENGENALAN LATIHAN INDUSTRI</h1>
        </div>

        <p class="">Latihan industri ialah satu program latihan yang diwajibkan kepada pelajar institusi pengajian
            untuk bekerja sementara di organisasi atau syarikat sebenar dalam bidang yang berkaitan dengan kursus yang dipelajari.
            Tujuan utama latihan industri ialah untuk memberi pendedahan kepada dunia pekerjaan sebenar sebelum pelajar menamatkan pengajian.</p>

            <h2 class="heading">OBJEKTIF LATIHAN INDUSTRI</h2>

            <div class="services-container">

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/idea.png" alt="" class="">
                        </i>
                        <h4>Mengaplikasikan pengetahuan teori</h4>
                        <p>Memberi peluang kepada pelajar menggunakan ilmu yang dipelajari
                            di kelas dalam situasi kerja sebenar, terutamanya dalam pembangunan perisian
                            dan penyelesaian masalah teknikal.
                        </p>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/work.png" alt="" class="">
                        </i>
                        <h4>Meningkatkan kemahiran teknikal dan insaniah</h4>
                        <p>Membantu pelajar meningkatkan kemahiran teknikal seperti
                            pengaturcaraan serta kemahiran insaniah seperti komunikasi, kerja
                            berpasukan dan pengurusan masa.
                        </p>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/up.png" alt="" class="">
                        </i>
                        <h4>Pendedahan kepada dunia pekerjaan sebenar</h4>
                        <p>Memberi pengalaman kepada pelajar tentang suasana kerja,
                            etika profesional dan tanggungjawab sebenar dalam organisasi.
                        </p>
                    </div>
                </div>

            </div>

            <h2 class="heading">KEPENTINGAN LATIHAN INDUSTRI</h2>

            <div class="services-container">

                <div class="service-box2">
                    <div class="service-info2">
                        <i class="">
                            <img src="/icon/dashboard.png" alt="" class="">
                        </i>
                        <h4>Menambah pengalaman kerja sebenar</h4>
                        <p>Pelajar dapat merasai suasana kerja sebenar dan memahami
                            cara organisasi beroperasi.
                        </p>
                    </div>
                </div>

                <div class="service-box2">
                    <div class="service-info2">
                        <i class="">
                            <img src="/icon/pengalaman.png" alt="" class="">
                        </i>
                        <h4>Meningkatkan kemahiran diri</h4>
                        <p>Latihan industri membantu pelajar meningkatkan kemahiran teknikal,
                            komunikasi, kerja berpasukan dan penyelesaian masalah.
                        </p>
                    </div>
                </div>

                <div class="service-box2">
                    <div class="service-info2">
                        <i class="">
                            <img src="/icon/homework.png" alt="" class="">
                        </i>
                        <h4>Persediaan sebelum memasuki alam pekerjaan</h4>
                        <p>Memberi keyakinan kepada pelajar serta membantu mereka lebih
                            bersedia menghadapi dunia pekerjaan selepas tamat pengajian.
                        </p>
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
                <a href="{{ route('Kesimpulan') }}" class="">KESIMPULAN</a>
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
