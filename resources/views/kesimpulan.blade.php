<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kesimpulan dan Cadangan</title>

    {{-- css style/design path --}}
    <link rel="stylesheet" href="{{ asset('css/kesimpulanstyle.css') }}" class="">
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
            <h1 class="">KESIMPULAN DAN CADANGAN</h1>
        </div>

        <p class="">Latihan industri yang dijalankan sepanjang tempoh yang ditetapkan telah memberikan pengalaman yang sangat bermakna kepada saya
             dalam bidang Information Technology(Track Software Application Development). Sepanjang latihan ini, saya juga berpeluang
             mengaplikasikan pengetahuan teori yang saya pelajari semasa di institusi pengajian ke dalam situasi kerja sebenar, khususnya dalam proses
             pembangunan perisian seperti analisis keperluan sistem, pembangunan aplikasi, pengujian sistem serta penyelesaian masalah teknikal.</p>

        <p class="">Melalui pengalaman ini, saya tidak hanya dapat meningkatkan kemahiran teknikal seperti pengaturcaraan, pembangunan aplikasi
             web atau sistem dan pengujian perisian, malah turut dapat mempelajari kemahiran profesional seperti komunikasi, pengurusan masa, kerja
             berpasukan dan etika kerja dalam organisasi. Pendedahan kepada persekitaran kerja sebenar juga membantu saya memahami aliran kerja terutamnya dalam
             bahagian pembangunan sistem.</p>

        <p class="">Secara keseluruhannya, latihan industri ini banyak membantu bukan hanya diri saya tapi kebanyakkan pelajar dalam membina keyakinan diri
            serta menyediakan asas yang kukuh untuk melangkah ke alam pekerjaan dalam bidang pembangunan perisian pada masa hadapan.</p>

            <h2 class="heading">CADANGAN YANG BOLEH DIPERTIMBANGKAN</h2>

            <div class="services-container">

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/kerjaya.png" alt="" class="">
                        </i>
                        <h4>Pendedahan kepada projek sebenar</h4>
                        <p>Pelajar diberi peluang terlibat dalam projek
                            pembangunan perisian sebenar supaya memahami proses pembangunan sistem (SDLC).
                        </p>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/penyelia.png" alt="" class="">
                        </i>
                        <h4>Bimbingan daripada mentor atau penyelia industri</h4>
                        <p>Penyelia memberikan bimbingan berkala bagi membantu pelajar
                            memahami tugasan dan meningkatkan kemahiran.
                        </p>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/test.png" alt="" class="">
                        </i>
                        <h4>Penekanan kepada dokumentasi dan pengujian sistem</h4>
                        <p>Pelajar diberi pendedahan kepada penyediaan dokumentasi dan
                            proses pengujian untuk memastikan kualiti sistem.
                        </p>
                    </div>
                </div>

            </div>

        <div class="btn-container">
                <a href="{{ route('rujukan') }}" class="btn-about" style="margin: 1rem">
                    SUMBER RUJUKAN
                </a>

                <a href="{{ route('hire') }}" class="btn-about" style="margin: 1rem">
                    HUBUNGI SAYA
                </a>
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
