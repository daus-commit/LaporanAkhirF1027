<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latar Belakang Latihan Industri</title>

    {{-- css style/design path --}}
    <link rel="stylesheet" href="{{ asset('css/latarbelakangstyle.css') }}" class="">
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
            <h1 class="">LATAR BELAKANG LATIHAN INDUSTRI</h1>
        </div>

        <div class="company-header">
            <img src="/img/hpcs.png" alt="HPCS Logo" class="company-logo">
            <h2 class="heading">HPCS SDN BHD</h2>
        </div>

        <p class="">HPCS bermula pada tahun 2009 sebagai bahagian IT di bawah Alam Budiman Residence Association (ABRA). Fokus utama kami adalah
            untuk memperkenalkan dan memacu penggunaan teknologi Open Source dalam komuniti. Melalui inisiatif ini, kami memperoleh peluang pertama
            untuk membangunkan sistem berasaskan Open Source seperti ABRIS, eVote dan SMS Blaster, yang diintegrasikan sebagai Residents
            Management Suites bagi membantu ABRA mengurus komuniti penduduk Alam Budiman dengan lebih cekap.</p>

        <p class="">Produk ini menerima pelbagai maklum balas yang membuktikan kepentingan kewujudannya serta kelebihan kompetitif yang dibawanya kepada komuniti.</p>

            <div class="dropdown-container">
                <div class="dropdown-item">
                    <button class="dropdown-header" onclick="toggleDropdown(this)">
                        <span class="dropdown-title">VISI</span>
                        <i class="bx bx-chevron-down dropdown-icon"></i>
                    </button>
                    <div class="dropdown-content">
                        <p>Membantu individu dan perniagaan menjadi lebih cekap dalam mengurus maklumat perniagaan mereka.</p>
                    </div>
                </div>

                <div class="dropdown-item">
                    <button class="dropdown-header" onclick="toggleDropdown(this)">
                        <span class="dropdown-title">MISI</span>
                        <i class="bx bx-chevron-down dropdown-icon"></i>
                    </button>
                    <div class="dropdown-content">
                        <p>Menyediakan Software as a Service (SaaS) bagi membolehkan pelbagai kemungkinan tanpa had diakses secara segera di hujung jari.</p>
                    </div>
                </div>

                <div class="dropdown-item">
                    <button class="dropdown-header" onclick="toggleDropdown(this)">
                        <span class="dropdown-title">KOMITMEN</span>
                        <i class="bx bx-chevron-down dropdown-icon"></i>
                    </button>
                    <div class="dropdown-content">
                        <p>Membawa penyelesaian perisian ke hujung jari anda. Kami komited untuk menyediakan perisian yang inovatif dan mesra pengguna bagi
                            membantu pelanggan mencapai matlamat mereka.</p>
                    </div>
                </div>
            </div>

            <div class="services-container">

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/right.png" alt="" class="">
                        </i>
                        <h4>Kebolehpercayaan</h4>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/right.png" alt="" class="">
                        </i>
                        <h4>Konsistensi</h4>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/right.png" alt="" class="">
                        </i>
                        <h4>Komitmen</h4>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/right.png" alt="" class="">
                        </i>
                        <h4>Kecekapan</h4>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-info">
                        <i class="">
                            <img src="/icon/right.png" alt="" class="">
                        </i>
                        <h4>Keandalan</h4>
                    </div>
                </div>

            </div>

    </section>


    <section class="ceo-message-section">
        <div class="ceo-container">
            <div class="ceo-left">
                <img src="/img/bos.png" alt="CEO Photo" class="ceo-photo">

            </div>

            <div class="ceo-right">
                <p class="ceo-welcome">Selamat Datang</p>
                <h2 class="ceo-heading">Mesej daripada Ketua Pegawai Eksekutif (CEO)</h2>
                <p class="ceo-message">Marilah kita bekerjasama untuk merancang pelan dan menetapkan matlamat yang boleh dicapai pada masa hadapan.</p>
                <p class="ceo-message">Sebagai satu pasukan, kami komited untuk membantu anda mencapai matlamat dan objektif anda. Jangan teragak-agak untuk menghubungi kami sekiranya anda memerlukan bantuan.</p>

            </div>

            <div class="btn-container">
                <a href="https://www.hpcs.com.my/index.php/en/about/team" class="btn-about" style="margin: 1rem">
                    CARTA ORGANISASI
                </a>

                <a href="https://www.hpcs.com.my/index.php/en/" class="btn-about" style="margin: 1rem">
                    WEBSITE HPCS
                </a>
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
