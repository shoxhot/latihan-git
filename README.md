# Sistem Informasi Akademik (Proyek Akhir: Controller, Query Builder, Eloquent)

**Nama:** Shofaa Nurghinaa
**NIM:** C050425033
**Kelas:** 3B SIKC
**Mata Kuliah:** Pemrograman Berbasis Web

## Daftar Controller
- MahasiswaController: resource + Route Model Binding (CRUD Eloquent)
- MatakuliahController: resource + Route Model Binding (CRUD Eloquent)
- StatistikMahasiswaController dan HitungTotalSksController: single action (invokable)
- Admin/DashboardController dan Laporan/RekapController: controller di sub-folder
- SapaController, LatihanController, QueryBuilderDemoController: latihan praktikum

## Query Builder
- QueryBuilderDemoController (route /demo/*): CRUD, filter, rekap per prodi dengan groupBy dan DB::raw, serta paginate.
- Laporan utama: /demo/tugas-2 (jumlah mahasiswa per prodi).

## Eloquent
- CRUD Mahasiswa dan Mata Kuliah dengan create, update, delete, dan Route Model Binding.
- Relasi: Mahasiswa hasMany NilaiMatakuliah, NilaiMatakuliah belongsTo Mahasiswa dan Matakuliah.
- Eager loading: load('nilai.matakuliah') dan load('nilai.mahasiswa') pada halaman detail.
- Bukti query log (10 mahasiswa): tanpa with() 11 query, dengan with('nilai') 2 query.

## Cara Menjalankan
1. composer install
2. copy .env.example .env
3. Atur koneksi database di .env (MySQL, database: laravel-praktikum-c050425033-db)
4. php artisan key:generate
5. Import database.sql ke MySQL
6. php artisan serve
7. Buka http://127.0.0.1:8000/akademik/mahasiswa

## Halaman Utama
- /akademik/mahasiswa, /akademik/mahasiswa/{nim}
- /akademik/matakuliah, /akademik/matakuliah/{kode_mk}
- /laporan/rekap, /statistik, /total-sks, /admin/dashboard