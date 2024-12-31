# README.md

## Petunjuk Instalasi

### 1. **Pastikan Persyaratan Terpenuhi**

-   **Laravel Herd** sudah terpasang di sistem Anda. Anda bisa mengikuti panduan instalasi Herd di [dokumentasi resmi Herd](https://laravel.com/docs/10.x/herd).
-   Pastikan Anda memiliki **PHP** versi 8.0 atau lebih tinggi.
-   **Composer** terinstal.
-   **Node.js** dan **npm** terinstal.

### 2. **Clone Repository**

```bash
git clone https://github.com/devrafia/laravel-mini-project.git
cd repository
```

### 3. **Install Dependencies**

Install dependencies PHP dan Node.js menggunakan Composer dan npm:

```bash
composer install
npm install && npm run dev
```

### 4. **Jalankan Laravel Herd**

Setelah dependencies terpasang, Anda dapat menjalankan Laravel Herd untuk memulai lingkungan pengembangan:

```bash
./vendor/bin/herd up
```

### 5. **Konfigurasi Environment**

Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Sesuaikan konfigurasi database di file `.env` (Herd sudah menyiapkan database MySQL secara otomatis):

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kelola_buku
DB_USERNAME=root
DB_PASSWORD=
```

### 6. **Generate Application Key**

Jalankan perintah berikut untuk menghasilkan kunci aplikasi:

```bash
php artisan key:generate
```

### 7. **Migrasi dan Seed Database**

Jalankan migrasi dan seed database untuk menyiapkan data awal:

```bash
php artisan migrate --seed
```

### 8. **Akses Aplikasi**

Aplikasi Laravel Anda sekarang berjalan di [ http://kelola-buku.test](http://kelola-buku.test).

---

## Panduan Penggunaan

### 1. **Panduan untuk Admin**

**Login sebagai Admin:**

-   **Email:** admin@example.com
-   **Password:** admin

**Fitur Admin:**

-   **Menambah Buku:**
    -   Login sebagai admin.
    -   Navigasi ke menu "Tambah Buku".
    -   Isi formulir dengan informasi buku (judul, kategori, penulis, penerbit, gambar cover).
    -   Klik tombol "Simpan".
-   **Mengedit Buku:**
    -   Klik edit di daftar buku.
    -   Perbarui informasi yang diperlukan.
    -   Klik tombol "Simpan".
-   **Menghapus Buku:**
    -   Klik edit di daftar buku.
    -   Klik hapus buku
    -   Konfirmasi penghapusan.
-   **Filter Kategori:**
    -   Gunakan fitur filter untuk menyaring buku berdasarkan kategori.
-   **Pencarian Buku:**
    -   Gunakan kolom pencarian untuk mencari buku berdasarkan judul, penulis, atau penerbit.

**Hak Akses:** Admin dapat mengelola semua data buku, kategori, dan pengguna.

### 2. **Panduan untuk Penulis**

**Login sebagai Penulis:**

-   **Email:** john@example.com
-   **Password:** password
-   (bisa menggunakan email di tabel users dengan **password**: "password")

**Fitur Penulis:**

-   Melihat buku yang telah mereka tulis.
-   Penulis tidak dapat mengedit atau menghapus buku yang bukan karya mereka.

**Hak Akses:** Penulis hanya dapat melihat buku yang mereka tulis dan tidak dapat mengelola data buku, kategori, atau pengguna lainnya.

---
