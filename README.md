# Laravel Produk CRUD — Technical Test AKSESMU

Aplikasi sederhana untuk mengelola data produk dengan fitur CRUD (Create, Read, Update, Delete).  
Dibangun menggunakan **Laravel 11**, **Tailwind CSS**, dan database **MySQL**.

---

## 🚀 Fitur
- List produk
- Tambah produk
- Edit produk
- Hapus produk (dengan konfirmasi)
- Validasi form
- Layout modern dengan Tailwind CSS
- Seeder 5 data produk awal

---

## 📦 Instalasi

### 1. Clone repository
https://github.com/wishaputra/laravel-produk-crud.git
### 2. Install dependencies
composer install
### 3. Konfigurasi `.env`
cp .env.example .env
php artisan key:generate

Isi database:
DB_DATABASE=laravel_produk_crud
DB_USERNAME=root
DB_PASSWORD=


### 4. Migrasi & Seeder
php artisan migrate --seed
### 5. Jalankan server
php artisan serve