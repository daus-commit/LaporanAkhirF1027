<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ringkasan Aktiviti Latihan Industri-minggu 13</title>

    {{-- css style/design path --}}
    <link rel="stylesheet" href="{{ asset('css/aktivitistyle/minggu1.css') }}" class="">
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

    <section class="projects" id="projects">
        <div class="home-content">
            <h1 class="">MINGGU 13</h1>

            <div class="date-header">
                <h2 class="heading">30 March 2026 - 3 April 2026</h2>
            </div>

        </div>

            <div class="bubbles">
                <span><img src="/img/laravel.png" alt="" class=""></span>
                <span><img src="/img/affin.png" alt="" class=""></span>
                <span><img src="/img/vscode.png" alt="" class=""></span>
                <span><img src="/img/flutter.png" alt="" class=""></span>
                <span><img src="/img/android.png" alt="" class=""></span>
                <span><img src="/img/docs.png" alt="" class=""></span>
            </div>

           <div class="projects-box">

                <div class="project-card">
                    <img src="/img/minggu/minggu13/image.png" alt="" class="">
                    <h3>1. Sambung mendirikan landing website CMS untuk Beambox Malaysia.</h3>
                    <p>- Mendirikan dengan menggunakan software Joomla CMS.<br>
                        - Sambung membuat content untuk website
                        Beambox Malaysia yang kami sedang dirikan.
                    </p><br>
                    <h3>Impak yang diterima</h3>
                    <p>- Mempelajari lebih mendalam tentang selok-belok
                        Joomla CMS.<br>
                    </p>
                </div>

                <div class="project-card">
                    <img src="/img/minggu/minggu7/image2.jpeg" alt="" class="">
                    <h3>2. Membuat video content di Tiktok bagi App MasjidPro</h3>
                    <p>- Menggunakan Canva sebagai tool software untuk membuat content.<br>
                        - Generate img content dengan menggunakan AI(ChatGPT).<br>
                    </p>
                </div>

                <div class="project-card">
                    <img src="/img/minggu/minggu13/image2.png" alt="" class="">
                    <h3>3. Menghadiri taklimat secara atas talian untuk pengenalan projek SHERMAN x MyOSHE</h3>
                    <p>- Menghadiri sesi taklimat bersama developer projek tersebut.<br>
                        - Menelusuri sistem tersebut bagi mengetahui workflow sistem.<br>
                        - Melaporkan error/bug yang ada didalam sistem SHERMAN x MyOSHE dan
                        melaporkannya kepada developer dengan menggunakan google docs.<br>
                        -Mula membuat UAT(User Acceptance Test) bagi role PTJ(Pusat Tanggungjawab),
                    </p>
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
    <a href="{{ route('aktiviti') }}" class="float-nav-btn">
       <i class="">
            <img src="/icon/aktiviti.png" alt="" class="">
        </i>
    </a>
    <script src="/js/homejs.js"></script>
</body>
</html>
