# Aplikasi Login Sederhana (Clone Ebdesk BY FHMIMDFKINSNE) untuk Railway

Proyek ini adalah sebuah *starter kit* aplikasi web berbasis **CodeIgniter 4** yang meniru halaman login `ima.ebdesk.com`. Proyek ini sudah dikonfigurasi secara khusus agar dapat di-deploy dengan sangat mudah ke platform **Railway.app**.

## Tumpukan Teknologi

-   **Backend**: PHP 8.1+
-   **Framework**: CodeIgniter 4
-   **Frontend**: Bootstrap 5
-   **Platform**: Railway.app

## Cara Menjalankan di Railway (Sangat Mudah)

Hanya butuh 3 langkah untuk membuat aplikasi ini online:

1.  **Fork atau Unggah ke GitHub**:
    -   *Fork* repositori ini ke akun GitHub Anda, ATAU
    -   Buat repositori baru di GitHub dan unggah semua file proyek ini ke sana.

2.  **Buat Proyek di Railway**:
    -   Login ke akun [Railway.app](https://railway.app) Anda.
    -   Klik **"New Project"** -> **"Deploy from GitHub repo"**.
    -   Pilih repositori yang baru saja Anda buat/fork.

3.  **Deploy Otomatis**:
    -   Railway akan secara otomatis mendeteksi file `composer.json` dan `Procfile`.
    -   Railway akan menginstal semua dependensi (CodeIgniter 4) dan menjalankan web server.
    -   Tunggu beberapa saat hingga proses *build* dan *deploy* selesai.

**Selesai!** Railway akan memberikan sebuah URL publik (contoh: `nama-proyek.up.railway.app`) di mana Anda bisa langsung mengakses aplikasi login ini.

### Data untuk Login (Simulasi)
-   **Email**: `admin@ebdesk.com`
-   **Password**: `password123`

## Menjalankan Secara Lokal (Opsional)

Jika Anda ingin mencoba atau mengembangkannya di komputer Anda:

1.  Pastikan Anda memiliki **PHP 8.1+** dan **Composer** terinstal.
2.  Clone repositori ini: `git clone [URL_REPO_ANDA]`
3.  Masuk ke folder proyek: `cd [NAMA_FOLDER]`
4.  Install dependensi: `composer install`
5.  Salin file environment: `copy env .env` (di Windows) atau `cp env .env` (di Mac/Linux).
6.  Jalankan server pengembangan CodeIgniter: `php spark serve`
7.  Buka browser dan akses `http://localhost:8080`.
