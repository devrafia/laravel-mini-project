# README.md

## Petunjuk Instalasi

1. **Pastikan Persyaratan Terpenuhi**

    - **Laravel Herd** sudah terpasang di sistem Anda. Anda bisa mengikuti panduan instalasi Herd di [dokumentasi resmi Herd](https://laravel.com/docs/10.x/herd).
    - Pastikan Anda memiliki **PHP** versi 8.0 atau lebih tinggi.
    - **Composer** terinstal.
    - **Node.js** dan **npm** terinstal.

2. **Clone Repository**

    ```bash
    git clone https://github.com/username/repository.git
    cd repository
    Install Dependencies
    ```

Install dependencies PHP dan Node.js menggunakan Composer dan npm:
bash
Salin kode
composer install
npm install && npm run dev
Jalankan Laravel Herd

Setelah dependencies terpasang, Anda dapat menjalankan Laravel Herd untuk memulai lingkungan pengembangan.
bash
Salin kode
./vendor/bin/herd up
Konfigurasi Environment

Salin file .env.example menjadi .env:
bash
Salin kode
cp .env.example .env
Sesuaikan konfigurasi database di file .env (Herd sudah menyiapkan database MySQL secara otomatis):
env
Salin kode
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=root
Generate Application Key

Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
bash
Salin kode
php artisan key:generate
Migrasi dan Seed Database

Jalankan migrasi dan seed database untuk menyiapkan data awal:
bash
Salin kode
php artisan migrate --seed
Akses Aplikasi

Aplikasi Laravel Anda sekarang berjalan di http://localhost.
Panduan Penggunaan

1. Panduan untuk Admin
   Login sebagai Admin:

Email: admin@example.com
Password: admin
Manajemen Buku:

Menambah Buku:

Login sebagai admin.
Navigasi ke menu "Tambah Buku".
Isi formulir dengan informasi buku, termasuk judul, kategori, penulis, penerbit, dan gambar cover.
Klik tombol "Simpan".
Mengedit Buku:

Klik ikon edit di daftar buku.
Perbarui informasi yang diperlukan.
Klik tombol "Simpan".
Menghapus Buku:

Klik ikon edit di daftar buku.
Klik hapus buku.
Konfirmasi penghapusan.
Filter Kategori:

Pada menu kelola buku terdapat fitur filter berdasarkan kategori.
Pencarian Buku:

Gunakan kolom pencarian di halaman kelola buku untuk mencari buku berdasarkan judul, penulis, atau penerbit.
Hak Akses:

Admin: Mengelola semua data buku, kategori, dan pengguna. 2. Panduan untuk Penulis
Login sebagai Penulis:

Email: john@example.com
Password: password
Melihat Buku yang Ditulis:

Setelah login, penulis hanya dapat melihat buku yang telah mereka tulis.
Penulis tidak dapat mengedit atau menghapus buku yang bukan karya mereka.
Hak Akses:

Penulis: Hanya dapat melihat buku yang ia tulis. Penulis tidak dapat mengelola data buku, kategori, atau pengguna lainnya.
Catatan Tambahan
Jika mengalami masalah, cek log di storage/logs/laravel.log.
Untuk kontribusi atau laporan bug, silakan buka issue di GitHub Issues.
markdown
Salin kode

### Penjelasan:

-   **Panduan untuk Admin**: Admin memiliki akses penuh untuk menambah, mengedit, dan menghapus buku serta mengelola kategori dan pengguna.
-   **Panduan untuk Penulis**: Penulis hanya dapat melihat buku yang mereka tulis dan tidak dapat mengelola buku atau kategori lainnya.

README ini memberikan penjelasan yang jelas mengenai cara menginstal aplikasi, serta panduan penggunaan untuk dua peran pengguna (Admin dan Penulis).
