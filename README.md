# Latihan Git

## Nama Proyek
Praktikum Laravel

## Deskripsi
Proyek ini merupakan hasil praktikum mata kuliah Pemrograman Web
yang dibuat menggunakan framework Laravel. Proyek ini digunakan
untuk mempelajari pengembangan aplikasi web serta penggunaan Git
dan GitHub sebagai version control.

## Teknologi yang Digunakan
- Laravel
- PHP
- MySQL
- HTML
- CSS
- JavaScript
- Git
- GitHub

## Cara Menjalankan Proyek

### 1. Install dependency
composer install

### 2. Konfigurasi file environment
Salin file `.env.example` menjadi `.env`, kemudian sesuaikan
konfigurasi database.

### 3. Generate application key
php artisan key:generate

### 4. Membuat database dan menjalankan migration
php artisan migrate:fresh --seed

### 5. Menjalankan server Laravel
php artisan serve

## Perubahan Praktikum 6 - Pengujian Git Pull