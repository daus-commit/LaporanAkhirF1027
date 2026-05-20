<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ringkasan Aktiviti Latihan Industri</title>

    {{-- css style/design path --}}
    <link rel="stylesheet" href="{{ asset('css/aktivitistyle.css') }}" class="">
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
            <h1 class="">RINGKASAN AKTIVITI LATIHAN INDUSTRI</h1>

            <div class="container-week">

                <a href="{{ route('minggu1') }}" class="week-btn">MINGGU 1</a>
                <a href="{{ route('minggu2') }}" class="week-btn">MINGGU 2</a>
                <a href="{{ route('minggu3') }}" class="week-btn">MINGGU 3</a>
                <a href="{{ route('minggu4') }}" class="week-btn">MINGGU 4</a>

                <a href="{{ route('minggu5') }}" class="week-btn">MINGGU 5</a>
                <a href="{{ route('minggu6') }}" class="week-btn">MINGGU 6</a>
                <a href="{{ route('minggu7') }}" class="week-btn">MINGGU 7</a>
                <a href="{{ route('minggu8') }}" class="week-btn">MINGGU 8</a>

                <a href="{{ route('minggu9') }}" class="week-btn">MINGGU 9</a>
                <a href="{{ route('minggu10') }}" class="week-btn">MINGGU 10</a>
                <a href="{{ route('minggu11') }}" class="week-btn">MINGGU 11</a>
                <a href="{{ route('minggu12') }}" class="week-btn">MINGGU 12</a>

                <a href="{{ route('minggu13') }}" class="week-btn">MINGGU 13</a>
                <a href="{{ route('minggu14') }}" class="week-btn">MINGGU 14</a>
                <a href="{{ route('minggu15') }}" class="week-btn">MINGGU 15</a>
                <a href="{{ route('minggu16') }}" class="week-btn">MINGGU 16</a>

                <a href="{{ route('minggu17') }}" class="week-btn">MINGGU 17</a>
                <a href="{{ route('minggu18') }}" class="week-btn">MINGGU 18</a>
                <a href="{{ route('minggu19') }}" class="week-btn">MINGGU 19</a>
                <a href="{{ route('minggu20') }}" class="week-btn">MINGGU 20</a>

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

