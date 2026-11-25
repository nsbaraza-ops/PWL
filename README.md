# PWNED — Aplikasi Cek Kebocoran Data Email

Aplikasi web berbasis **CodeIgniter 4** untuk memeriksa apakah suatu alamat email pernah terdampak kebocoran data (*data breach*), dilengkapi bagian edukasi keamanan siber, visualisasi statistik kebocoran data, serta halaman perbandingan paket layanan.

## Fitur Utama

- **Pengecekan Email (`POST /cek-email`)**  
  Formulir pemeriksaan alamat email dengan proteksi CSRF (`csrf_field()`), tampilan status hasil **`SAFE`** atau **`PWNED!`**, serta tabel detail kebocoran (sumber kebocoran, tanggal, dan jenis data).
- **Statistik & Grafik Tren Kebocoran Data**  
  Menampilkan ringkasan metrik (sumber aktif, tingkat kebocoran, total akun terdampak) dan grafik tren kebocoran data global menggunakan **Chart.js**.
- **Edukasi Keamanan Akun**  
  Informasi singkat mengenai apa itu kebocoran data dan langkah pencegahan untuk melindungi akun.
- **Halaman Upgrade Paket (`GET /upgrade`)**  
  Tampilan pilihan paket layanan (**Plus** & **Pro**) dengan fitur *toggle* periode langganan bulanan dan tahunan.

## Teknologi yang Digunakan

- **Backend:** PHP (`^8.2`), CodeIgniter 4 (`codeigniter4/framework ^4.7`)
- **Frontend:** HTML5, Tailwind CSS, Chart.js, JavaScript
- **Tooling:** Composer, PHPUnit

## Struktur Direktori Utama

```text
PWL/
├── app/
│   ├── Config/
│   │   └── Routes.php          # Definisi rute /, /cek-email, dan /upgrade
│   ├── Controllers/
│   │   ├── Home.php            # Halaman utama & halaman upgrade
│   │   └── PwnedController.php # Pemrosesan pengecekan email
│   └── Views/
│       ├── pwned_search.php    # Halaman utama, form cek email, & grafik statistik
│       ├── v_upgrade.php       # Halaman pilihan paket upgrade
│       └── cek_email.php       # Template tampilan analisis email
├── public/
│   ├── css/
│   ├── js/
│   └── image/
├── composer.json
├── env
└── LICENSE
```

## Cara Menjalankan Secara Lokal

1. **Clone repository**
   ```bash
   git clone https://github.com/nsbaraza-ops/PWL.git
   cd PWL
   ```
2. **Install dependensi**
   ```bash
   composer install
   ```
3. **Konfigurasi environment**  
   Salin file `env` menjadi `.env`, lalu sesuaikan pengaturan seperti `CI_ENVIRONMENT` dan `app.baseURL`.
4. **Jalankan server lokal**
   ```bash
   php spark serve
   ```
   Akses aplikasi melalui browser di `http://localhost:8080`.

## Lisensi

Proyek ini menggunakan lisensi [MIT License](LICENSE).
