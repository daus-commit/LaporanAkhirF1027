<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
  <h1 align="center">laporan-akhir-template</h1>
  <p align="center">Laporan Akhir Latihan Industri — Sesi 2 2025/2026<br>Muhammad Firdaus Hakimi bin Risal | 17DDT23F1027<br>Politeknik Sultan Idris Shah · Diploma Teknologi Maklumat (Teknologi Digital)</p>
</p>

---

## 📖 Tentang Projek Ini

Projek ini ialah sebuah laman web laporan akhir latihan industri yang dibangunkan menggunakan **Laravel 12**. Laman ini mendokumentasikan pengalaman latihan industri selama **20 minggu** (5 Januari – 22 Mei 2026) di **HPCS Sdn Bhd**, merangkumi ringkasan eksekutif, latar belakang organisasi, laporan teknikal, aktiviti mingguan, dan kesimpulan.

Laman ini turut dilengkapi dengan **ciri AI** pada halaman "Hubungi Saya" yang menjana cadangan mesej menggunakan OpenRouter.

---

## ✨ Ciri-ciri

- 📄 **Laporan berstruktur** — 8 bahagian utama laporan latihan industri
- 📅 **Log aktiviti mingguan** — 20 minggu dokumentasi aktiviti dengan gambar
- 🤖 **AI Jana Mesej** — integrasi OpenRouter pada halaman hubungi saya
- 📱 **Responsif** — reka bentuk mesra mudah alih dengan hamburger menu
- 🐳 **Docker & Render.com** — sedia untuk deployment ke cloud
- 🎨 **CSS tersuai** — setiap halaman mempunyai stylesheet tersendiri

---

## 🗺️ Struktur Halaman

| Laluan | Halaman | Keterangan |
|--------|---------|-----------|
| `/` | Laman Utama | Profil pelajar & penghargaan |
| `/ringkasan` | Ringkasan Eksekutif | Rumusan keseluruhan latihan industri |
| `/pengenalan` | Pengenalan | Objektif & kepentingan latihan industri |
| `/latarbelakang` | Latar Belakang | Profil HPCS Sdn Bhd & mesej CEO |
| `/aktiviti` | Aktiviti | Indeks aktiviti minggu 1–20 |
| `/minggu1` – `/minggu20` | Aktiviti Mingguan | Log terperinci setiap minggu |
| `/laporan` | Laporan Teknikal | Tugasan projek sepanjang latihan |
| `/kesimpulan` | Kesimpulan & Cadangan | Refleksi & cadangan penambahbaikan |
| `/rujukan` | Rujukan | Senarai rujukan |
| `/hire` | Hubungi Saya | Borang hubungi + jana mesej AI |

---

## 📋 Kandungan Laporan Teknikal

Tugasan yang dilaksanakan sepanjang latihan di **HPCS Sdn Bhd**:

| Sistem / Projek | Tugasan |
|-----------------|---------|
| **TadikaPro** | Manual pengguna bagi peranan Pengurus (Google Docs) |
| **SHERMAN × MyOSHE** | Akses & pelajari backend Yii2 Advanced (CRUD, folder structure) |
| **SHERMAN × MyOSHE** | Manual pengguna bagi peranan PTJ (Google Docs) |
| **SHERMAN × MyOSHE** | UAT (User Acceptance Test) bagi peranan PTJ |
| **Website Beambox Malaysia** | Bangunkan landing page menggunakan Joomla CMS |
| **MAINPP (Wakaf Pulau Pinang)** | Reka bentuk UI website menggunakan Figma |
| **TadikaPro App** | Reka bentuk UI aplikasi menggunakan Figma |

---

## 🤖 AI — Jana Mesej (Halaman Hubungi Saya)

Halaman `/hire` menyediakan borang hubungi lengkap dengan ciri **Jana Mesej AI** yang menggunakan OpenRouter untuk menjana cadangan mesej berdasarkan subjek yang dimasukkan.

Tambah kunci API ke `.env`:

```env
OPENROUTER_API_KEY=sk-or-xxxxxxxxxxxxxxxxxxxx
```

Dapatkan kunci percuma di [openrouter.ai](https://openrouter.ai).

---

## 📋 Keperluan Sistem

- PHP >= 8.2
- Composer
- Node.js & npm
- SQLite (lalai) atau MySQL

---

## 🚀 Pemasangan

### Cara Cepat (satu arahan)

```bash
git clone https://github.com/daus-commit/laporan-akhir-template.git
cd laporan-akhir-template
composer run setup
```

Arahan ini akan: `composer install` → salin `.env` → jana kunci app → migrate → `npm install` → `npm run build`.

### Cara Manual

```bash
# 1. Clone repositori
git clone https://github.com/daus-commit/laporan-akhir-template.git
cd laporan-akhir-template

# 2. Pasang kebergantungan PHP
composer install

# 3. Persediaan persekitaran
cp .env.example .env
php artisan key:generate

# 4. Jalankan migrasi
php artisan migrate

# 5. Pasang & bina aset frontend
npm install
npm run build

# 6. Mulakan pelayan
php artisan serve
```

Buka pelayar dan pergi ke `http://localhost:8000`.

---

## 🛠️ Pembangunan

Jalankan semua servis serentak (pelayan, queue, log, Vite):

```bash
composer run dev
```

---

## 🐳 Docker

```bash
# Bina imej
docker build -t laporan-akhir .

# Jalankan kontena
docker run -p 10000:10000 laporan-akhir
```

Pelayan berjalan pada port **10000**.

---

## ☁️ Deployment (Render.com)

Projek ini sedia untuk deploy ke [Render.com](https://render.com) menggunakan `render.yaml`:

| Tetapan | Nilai |
|---------|-------|
| Nama servis | `laporanakhirf1027` |
| Persekitaran | PHP |
| Pelan | Free |
| Build command | `composer install` + cache config/route/view |
| Start command | `php artisan serve --host=0.0.0.0 --port=$PORT` |

---

## 📁 Struktur Direktori

```
app/
├── Http/Controllers/
│   └── UserController.php      semua route controller (home, ringkasan, laporan, minggu1-20, dll.)
└── Models/
    └── User.php

public/
├── ai-proxy.php                proxy OpenRouter untuk jana mesej (halaman hire)
├── css/                        stylesheet tersuai setiap halaman
│   ├── homestyle.css
│   ├── aktivitistyle.css
│   ├── laporanstyle.css
│   └── ...
├── icon/                       ikon UI (aktiviti, dashboard, cloud, dll.)
└── img/
    ├── laporan/                gambar tugasan teknikal
    └── minggu/minggu1-20/      gambar aktiviti mingguan

resources/views/
├── home.blade.php              laman utama + profil + penghargaan
├── ringkasan.blade.php         ringkasan eksekutif
├── pengenalan.blade.php        pengenalan latihan industri
├── latarbelakang.blade.php     latar belakang HPCS Sdn Bhd
├── aktiviti.blade.php          indeks 20 minggu
├── aktiviti/minggu1-20.blade.php  log aktiviti setiap minggu
├── laporan.blade.php           laporan teknikal
├── kesimpulan.blade.php        kesimpulan & cadangan
├── rujukan.blade.php           rujukan
└── hire.blade.php              borang hubungi + AI jana mesej

routes/
└── web.php                     9 laluan utama + 20 laluan minggu

Dockerfile                      Docker untuk deployment
render.yaml                     konfigurasi Render.com
```

---

## 👤 Maklumat Pelajar

| Perkara | Maklumat |
|---------|---------|
| Nama | Muhammad Firdaus Hakimi bin Risal |
| No. Matrik | 17DDT23F1027 |
| Institusi | Politeknik Sultan Idris Shah (PSIS) |
| Program | Diploma Teknologi Maklumat (Teknologi Digital) — Trek Pembangunan Perisian |
| Pusat Latihan | HPCS Sdn Bhd |
| Tempoh Latihan | 5 Januari – 22 Mei 2026 (20 minggu) |
| GitHub | [daus-commit](https://github.com/daus-commit) |
| LinkedIn | [firdaus-hakimi](https://www.linkedin.com/in/firdaus-hakimi-07a376382) |

---

## 📦 Kebergantungan Utama

| Pakej | Versi | Tujuan |
|-------|-------|--------|
| `laravel/framework` | ^12.0 | Framework utama |
| `laravel/tinker` | ^2.10.1 | REPL interaktif |
| `laravel/sail` *(dev)* | ^1.41 | Persekitaran Docker |
| `phpunit/phpunit` *(dev)* | ^11.5.3 | Ujian automatik |

---

## 📄 Lesen

Projek ini dilesenkan di bawah [MIT License](https://opensource.org/licenses/MIT).
