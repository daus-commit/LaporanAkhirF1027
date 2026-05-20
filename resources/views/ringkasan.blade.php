<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ringkasan Eksekutif</title>

    {{-- css style/design path --}}
    <link rel="stylesheet" href="{{ asset('css/ringkasanstyle.css') }}" class="">
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
            <h1 class="">RINGKASAN EKSEKUTIF</h1>
        </div>

        <p class="">Selepas menamatkan Latihan Industri di HPCS SDN BHD selama 20 minggu dari 5 Januari hingga 22 Mei 2026, saya telah
            memperoleh pemahaman yang lebih mendalam tentang dunia profesional serta kemahiran dan pengalaman praktikal yang
            sangat berharga untuk pembangunan kerjaya saya. Pencapaian ini memberikan rasa bangga dan syukur atas ilmu yang diperoleh,
            yang pastinya akan membantu saya dalam mencapai kejayaan pada masa hadapan.</p>

        <p class="">Sepanjang tempoh latihan ini, saya terlibat dalam pelbagai latihan seperti mendirikan website, membuat design UI(UserInterface)
            dan banyak lagi yang melibatkan perisian komputer. Pengalaman ini bukan sahaja meningkatkan kemahiran teknikal saya, malah memberikan
            peluang untuk mengaplikasikan pengetahuan secara praktikal sebagai persediaan menghadapi dunia kerjaya sebenar.</p>

        <p class="">Program latihan ini juga mendedahkan saya kepada operasi harian dan etika kerja profesional, sekali gus memperluaskan pemahaman saya tentang
            bagaimana pengetahuan teori diaplikasikan dalam tugasan sebenar di tempat kerja. Walaupun terdapat cabaran ketika mempelajari tugasan
            baharu, pengalaman ini mengajar saya tentang kepentingan kebolehsuaian dan ketekunan dalam mencapai perkembangan profesional.</p>

        <p class="">Saya yakin bahawa pengetahuan dan kemahiran yang diperoleh sepanjang latihan ini akan memberi manfaat besar dalam usaha saya pada masa hadapan.
            Pengalaman ini juga mengukuhkan nilai tanggungjawab dan pengurusan masa yang berkesan dalam melaksanakan tugasan yang diberikan.</p>

        <p class="">Kesimpulannya, Latihan Industri bukan sekadar satu keperluan akademik, tetapi juga peluang penting untuk pembelajaran menyeluruh dan pembangunan diri.
            Ia telah meningkatkan penghargaan saya terhadap kerja berpasukan dan kerjasama, yang merupakan elemen penting dalam mana-mana persekitaran profesional.
            Tempoh latihan ini telah melatih saya untuk memulakan perjalanan kerjaya dengan asas pengalaman praktikal yang kukuh serta hala
            tuju yang lebih jelas.</p>
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
