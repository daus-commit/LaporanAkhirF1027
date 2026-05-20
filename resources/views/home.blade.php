<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laman Utama</title>

    {{-- css style/design path --}}
    <link rel="stylesheet" href="{{ asset('css/homestyle.css') }}" class="">
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

    <section class="home" id="home">

        <div class="home-content">
            <h1 class="">LAPORAN AKHIR</h1>
            <h1 class="">LATIHAN INDUSTRI</h1>
            <h3 class="">SESI 2 <span class="">2025/2026</span></h3>
            <a href="#about" class="btn-about">
                <p class="">TENTANG SAYA</p>
            </a>
            <a href="#penghargaan" class="btn-about">
                <p class="">PENGHARGAAN</p>
            </a>
        </div>

    </section>

    <section class="about" id="about">

        <div class="about-heading">
            <h1 class="">POLITEKNIK SULTAN IDRIS SHAH<br>
                                DIPLOMA TEKNOLOGI MAKLUMAT (TEKNOLOGI DIGITAL)<br>
                                TREK PEMBANGUNAN PERISIAN<br>
            </h1>
        </div>

        <div class="about-info">
            <div class="about-img">
                <img src="/img/image.jpg" alt="" class="">
            </div>

            <div class="about-content">
                <h2> <span class=""></span></h2>
                <p> NAMA: MUHAMMAD FIRDAUS HAKIMI BIN RISAL<br>
                    NO. MATRIX: 17DDT23F1027<br>
                    UMUR: 21 TAHUN<br>
                    TARIKH LAHIR: 23 DESEMBER 2005<br>
                    PUSAT LATIHAN INDUSTRI: HPCS SDN BHD<br>
                    </p>
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
                <div class="btn-container">
                    <a href="{{ route('hire') }}" class="btn-about" style="margin: 1rem">
                        HUBUNGI SAYA
                    </a>
                </div>
            </div>

        </div>



    </section>

    <section class="penghargaan" id="penghargaan">
        <div class="penghargaan-content">
            <h1 class="">PENGHARGAAN</h1>
        </div>

        <p class="">Syukur ke hadrat Allah SWT kerana dengan limpah kurnia-Nya saya berjaya menamatkan latihan industri serta menyiapkan
            laporan akhir latihan industri ini dengan jayanya. Latihan industri ini telah memberikan banyak pengalaman dan pengetahuan baharu
            yang amat berguna dalam bidang Information Technology khususnya Software Application Development.</p>

        <p class="">Setinggi-tinggi penghargaan dan terima kasih saya ucapkan kepada pihak organisasi tempat saya menjalani latihan industri
            kerana telah memberi peluang dan kepercayaan kepada saya untuk menimba pengalaman dalam persekitaran kerja sebenar. Segala bimbingan,
            tunjuk ajar serta kerjasama yang diberikan sepanjang tempoh latihan industri amat saya hargai dan telah banyak membantu saya memahami
            dunia pekerjaan dengan lebih mendalam.</p>

        <p class="">Saya juga ingin merakamkan penghargaan kepada pensyarah serta penyelia latihan industri yang telah banyak memberi panduan, nasihat
            serta sokongan sepanjang tempoh latihan industri dan dalam proses menyiapkan laporan ini. Bimbingan yang diberikan sangat membantu dalam
            memastikan latihan industri ini berjalan dengan lancar.</p>

        <p class="">Tidak dilupakan juga ucapan terima kasih kepada semua rakan sekerja serta rakan-rakan yang sentiasa memberi sokongan, berkongsi
            ilmu dan membantu saya sepanjang tempoh latihan industri ini.</p>

        <p class="">Akhir sekali, jutaan terima kasih kepada keluarga saya atas sokongan moral, doa dan dorongan yang tidak putus-putus sepanjang
            saya menjalani latihan industri dan menyiapkan laporan ini. Segala pengalaman dan ilmu yang diperoleh sepanjang latihan industri ini
            akan saya manfaatkan sebaik mungkin pada masa hadapan.</p>
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
    <a href="#home" class="float-nav-btn">
       <i class="">
            <img src="/icon/home2.png" alt="" class="">
        </i>
    </a>
    <script src="/js/homejs.js"></script>
</body>
</html>
