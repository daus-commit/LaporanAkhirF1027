<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hubungi Saya</title>

    <link rel="stylesheet" href="{{ asset('css/hirestyle.css') }}" class="">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        emailjs.init('HOovqdTwqs86bbj6b');
    </script>

    <style>
        .jana-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.55rem 1rem;
            background: var(--main-color);
            color: #fff;
            border: none;
            border-radius: 0.6rem;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            transition: opacity 0.2s;
            white-space: nowrap;
        }
        .jana-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
        .jana-btn:not(:disabled):hover {
            opacity: 0.85;
        }
        .subjek-row {
            display: flex;
            gap: 0.6rem;
            align-items: center;
        }
        .subjek-row input {
            flex: 1;
        }
        .ai-loading {
            display: none;
            font-size: 1rem;
            color: var(--main-color);
            margin-top: 0.4rem;
            animation: pulse 1.2s ease-in-out infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50%       { opacity: 0.4; }
        }
    </style>
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

                {{-- Subjek + Jana Mesej button --}}
                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <div class="subjek-row">
                        <input type="text" id="subjek" placeholder="Berkenaan apa?">
                        <button type="button" class="jana-btn" id="janaBtn" onclick="janaMesej(this)">
                            Jana Mesej
                        </button>
                    </div>
                    <span class="ai-loading" id="aiLoading" style="color: green">AI sedang menjana mesej...</span>
                </div>

                <div class="form-group">
                    <label for="mesej">Mesej</label>
                    <textarea id="mesej" placeholder="Tulis mesej anda di sini, atau klik Jana Mesej untuk biarkan AI tolong(tapi jangan berharap sangatlah AHAHA)..."></textarea>
                </div>

                <button class="submit-btn" onclick="hantarEmel(this)">
                    Hantar Mesej
                </button>

                <div id="successMsg" style="display:none; margin-top:1.2rem; padding:1rem 1.2rem; background:rgba(101,183,210,0.2); border:1.5px solid var(--main-color); border-radius:0.8rem; color:var(--nav-color); font-size:1.3rem; font-weight:500; text-align:center;">
                    Terima kasih! Mesej anda telah berjaya dihantar ke Ts. Prof. Dr. Firdaus Hakimi
                </div>
                <div id="errorMsg" style="display:none; margin-top:1.2rem; padding:1rem 1.2rem; background:rgba(255,100,100,0.1); border:1.5px solid #e55; border-radius:0.8rem; color:#c00; font-size:1.3rem; font-weight:500; text-align:center;">
                    Anda telah buat yang terbaik sahabat! Cuba lagi nanti.
                </div>
            </div>
        </div>
    </section>

    <script>
    // ─── Hantar emel via EmailJS ────────────────────────────────────────────────
    function hantarEmel(btn) {
        const nama    = document.getElementById('nama').value.trim();
        const telefon = document.getElementById('telefon').value.trim();
        const emel    = document.getElementById('emel').value.trim();
        const subjek  = document.getElementById('subjek').value.trim();
        const mesej   = document.getElementById('mesej').value.trim();

        if (!nama || !emel || !mesej) {
            alert('Isi semua apa yang dia mintak dalam form sahabat baru boleh proceed menghantar.');
            return;
        }

        btn.disabled    = true;
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
                btn.disabled    = false;
                btn.textContent = 'Hantar Mesej';
            });
    }

    // ─── Jana mesej via AI ──────────────────────────────────────────────────────
    async function janaMesej(btn) {
        const subjek  = document.getElementById('subjek').value.trim();
        const loading = document.getElementById('aiLoading');

        if (!subjek) {
            alert('Isi subjek dulu sahabat, baru boleh jana mesej.');
            return;
        }

        btn.disabled    = true;
        btn.textContent = 'Menjana...';
        loading.style.display = 'inline';

        try {
            const res = await fetch('/ai-proxy.php', {
                method:  'POST',
                headers: { 'Content-Type': 'application/json' },
                body:    JSON.stringify({ subjek }),
            });

            const data = await res.json();

            if (data.mesej) {
                document.getElementById('mesej').value = data.mesej;
                btn.textContent = 'Selesai!';
                setTimeout(() => {
                    btn.textContent = 'Jana Mesej';
                    btn.disabled    = false;
                }, 2000);
            } else {
                alert('AI error: ' + (data.error ?? 'Cuba lagi'));
                btn.textContent = 'Jana Mesej';
                btn.disabled    = false;
            }

        } catch (err) {
            console.error(err);
            alert('Opss! AI tengah busy. Cuba lagi nanti!');
            btn.textContent = 'Jana Mesej';
            btn.disabled    = false;
        } finally {
            loading.style.display = 'none';
        }
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
            <li><a href="{{ route('ringkasan') }}" class="">RINGKASAN EKSEKUTIF</a></li>
            <li><a href="{{ route('pengenalan')}}" class="">PENGENALAN</a></li>
            <li><a href="{{ route('latarbelakang') }}" class="">LATAR BELAKANG</a></li>
            <li><a href="{{ route('aktiviti') }}" class="">AKTIVTI</a></li>
            <li><a href="{{ route('laporan') }}" class="">LAPORAN</a></li>
            <li><a href="{{ route('kesimpulan') }}" class="">KESIMPULAN</a></li>
        </ul>

        <p class="copyright">
            DISEDIAKAN OLEH MUHAMMAD FIRDAUS HAKIMI BIN RISAL | 17DDT23F1027
        </p>
    </footer>

    <a href="{{ route('home') }}" class="float-nav-btn">
        <i class="">
            <img src="/icon/home.png" alt="" class="">
        </i>
    </a>

    <script src="/js/homejs.js"></script>
</body>
</html>
