<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ringkasan Aktiviti Latihan Industri-minggu 5</title>

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
            <a href="{{ route('Kesimpulan') }}" class="">KESIMPULAN</a>
        </nav>
    </header>

    <section class="projects" id="projects">
        <div class="home-content">
            <h1 class="">MINGGU 5</h1>

            <div class="date-header">
                <h2 class="heading">2 Feb 2026 - 6 Feb 2026</h2>
            </div>

        </div>

            <div class="bubbles">
                <span><img src="/img/laravel.png" alt="" class=""></span>
                <span><img src="/img/joomla.png" alt="" class=""></span>
                <span><img src="/img/vscode.png" alt="" class=""></span>
                <span><img src="/img/flutter.png" alt="" class=""></span>
                <span><img src="/img/android.png" alt="" class=""></span>
                <span><img src="/img/figma.png" alt="" class=""></span>
            </div>

            <div class="projects-box">

                <div class="project-card">
                    <img src="/img/minggu/minggu4/image2.jpeg" alt="" class="">
                    <h3>1. Membentangkan design UI(UserInterface) bagi TadikaPro app version 3.0</h3>
                    <p>- Membentangkan design dihadapan para staff yang terlibat didalam projek.
                    </p><br>
                    <h3>Impak yang diterima(Cabaran)</h3>
                    <p>- Membentangkan design dihadapan staff-staff yang mempunyai pengalaman yang banyak(Senior) tentang UI-Friendly.<br>
                        - Belajar menerima kritikan bagi tujuan menimba ilmu dan pengalaman dimasa hadapan.
                    </p><br>
                    <h3>Cara penyelesaian</h3>
                    <p>- Mencuba untuk mengawal emosi dan panik ketika membentang.<br>
                        - Mencuba untuk menjadi seseorang yang profesional walauapapun keadaaan.
                    </p><br>
                    <h3>Impak yang diterima(Kemahiran)</h3>
                    <p>- Belajar menjadi seseorang yang profesional dalam apa jua situasi.<br>
                    </p>
                    <img src="/img/minggu/minggu4/image.png" alt="" class="">
                </div>

                <div class="project-card">
                    <img src="/img/minggu/minggu4/image2.jpeg" alt="" class="">
                    <h3>2. Membuat ulang design UI(UserInterface) TadikaPro app dengan menerapkan "Concept"</h3>
                    <p>- Menerapkan konsep yang konsisten(font, size, color) bagi setiap design konsep.<br>
                        - Target konsep yang digalakkan adalah sebanyak 5 design konsep dengan konsep-konsep yang berbeza setiap design.
                    </p><br>
                    <h3>Impak yang diterima(Kemahiran)</h3>
                    <p>- Belajar untuk membuat design se-friendly mungkin untuk tujuan kemudahan pengguna.<br>
                    </p>
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
    <a href="{{ route('aktiviti') }}" class="float-nav-btn">
       <i class="">
            <img src="/icon/aktiviti.png" alt="" class="">
        </i>
    </a>
    <script src="/js/homejs.js"></script>
</body>
</html>
