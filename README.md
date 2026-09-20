# Proyek Akhir Pemrograman Web - Laravel

Nama: Shofaa Nurghinaa
NIM: C050425033
Kelas: 3B SIKC

## Deskripsi Proyek
Mini aplikasi manajemen data akademik yang mengelola data Mahasiswa,
Mata Kuliah, dan Nilai. Terdapat relasi antar 3 tabel: Mahasiswa dan
Mata Kuliah masing-masing berelasi one-to-many dengan tabel Nilai
Mata Kuliah, sedangkan Mata Kuliah juga berelasi dengan User sebagai
dosen pengampu.

## Perintah Artisan yang Digunakan
- php artisan make:migration create_mahasiswas_table
- php artisan make:migration create_matakuliahs_table
- php artisan make:migration add_dosen_id_to_matakuliahs_table --table=matakuliahs
- php artisan make:migration create_nilai_matakuliahs_table
- php artisan make:model Mahasiswa
- php artisan make:model Matakuliah
- php artisan make:model NilaiMatakuliah
- php artisan make:seeder MahasiswaSeeder
- php artisan make:seeder MatakuliahSeeder
- php artisan make:seeder NilaiMatakuliahSeeder
- php artisan make:factory MahasiswaFactory --model=Mahasiswa
- php artisan make:factory MatakuliahFactory --model=Matakuliah
- php artisan make:factory NilaiMatakuliahFactory --model=NilaiMatakuliah

## Cara Menjalankan Project
1. composer install
2. Sesuaikan koneksi database di file .env
3. php artisan migrate:fresh --seed
4. php artisan serve
5. Buka browser ke:
   - http://127.0.0.1:8000/mahasiswa
   - http://127.0.0.1:8000/matakuliah
   - http://127.0.0.1:8000/nilai