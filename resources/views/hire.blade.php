<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hubungi Saya</title>

    {{-- css style/design path --}}
    <link rel="stylesheet" href="{{ asset('css/hirestyle.css') }}" class="">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Dalam <head> atau sebelum </body> --}}
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        emailjs.init('HOovqdTwqs86bbj6b'); // ganti dengan Public Key anda
    </script>
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
        <h1>HUBUNGI SAYA</h1>
    </div>

    <div style="display:flex; justify-content:center;">
        <div class="contact-form-wrapper">
            <div class="row-2">
                <div class="form-group">
                    <label for="nama">Nama penuh</label>
                    <input type="text" id="nama" placeholder="cth. Ahmad bin Ali">
                </div>
                <div class="form-group">
                    <label for="telefon">No. telefon</label>
                    <input type="tel" id="telefon" placeholder="cth. +60 12-345 6789">
                </div>
            </div>
            <div class="form-group">
                <label for="emel">Alamat e-mel</label>
                <input type="email" id="emel" placeholder="contoh@emel.com">
            </div>
            <div class="form-group">
                <label for="subjek">Subjek</label>
                <input type="text" id="subjek" placeholder="Berkenaan apa?">
            </div>
            <div class="form-group">
                <label for="mesej">Mesej</label>
                <textarea id="mesej" placeholder="Tulis mesej anda di sini..."></textarea>
            </div>

            <button class="submit-btn" onclick="hantarEmel(this)">
                Hantar Mesej
            </button>

            <div id="successMsg" style="display:none; margin-top:1.2rem; padding:1rem 1.2rem; background:rgba(101,183,210,0.2); border:1.5px solid var(--main-color); border-radius:0.8rem; color:var(--nav-color); font-size:1.3rem; font-weight:500; text-align:center;">
                 Terima kasih! Mesej anda telah berjaya dihantar.
            </div>
            <div id="errorMsg" style="display:none; margin-top:1.2rem; padding:1rem 1.2rem; background:rgba(255,100,100,0.1); border:1.5px solid #e55; border-radius:0.8rem; color:#c00; font-size:1.3rem; font-weight:500; text-align:center;">
                ❌ Gagal hantar. Cuba lagi sebentar.
            </div>
        </div>
    </div>
</section>

<script>
function hantarEmel(btn) {
    const nama   = document.getElementById('nama').value.trim();
    const telefon = document.getElementById('telefon').value.trim();
    const emel   = document.getElementById('emel').value.trim();
    const subjek = document.getElementById('subjek').value.trim();
    const mesej  = document.getElementById('mesej').value.trim();

    if (!nama || !emel || !mesej) {
        alert('Sila isi Nama, E-mel dan Mesej.');
        return;
    }

    btn.disabled = true;
    btn.textContent = 'Menghantar...';

    const templateParams = {
        from_name:  nama,
        from_email: emel,
        phone:      telefon || 'Tidak diberikan',
        subject:    subjek  || 'Tiada subjek',
        message:    mesej
    };

    emailjs.send('service_t425xeg', 'template_b7dxeom', templateParams)
        .then(() => {
            document.getElementById('successMsg').style.display = 'block';
            document.getElementById('errorMsg').style.display   = 'none';
            btn.textContent = 'Dihantar';
        })
        .catch((err) => {
            console.error(err);
            document.getElementById('errorMsg').style.display   = 'block';
            document.getElementById('successMsg').style.display = 'none';
            btn.disabled = false;
            btn.textContent = 'Hantar Mesej';
        });
}
</script>

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
