<?php

use App\Http\Controllers\HitungTotalSksController;
use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\NilaiMatakuliah;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\StatistikMahasiswaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Laporan\RekapController;
use App\Http\Controllers\QueryBuilderDemoController;

Route::get('/', function () {
    return view('welcome');
});

// rute percobaan
Route::get('/artikel-tesdulu', function () {
    return 'Halo, ini percobaan route!';
});


//rute nilai
Route::get('/nilai', function () {
    $data = NilaiMatakuliah::with(['mahasiswa', 'matakuliah'])->get();
    return view('nilai.index', compact('data'));
});

Route::get('/halo', function (){
    return'Halo, ini adalah route pertama saya';
});

Route::get('/profil', function () {
    return view('profil')
        ->with('nama', 'Shofaa Nurghinaa')
        ->with('nim', 'C050425033')
        ->with('prodi', 'Sistem Informasi Kota Cerdas');
});

Route::get('/kontak', function () {
    return 'Ini halaman kontak';
});

Route::get('/tentang', function () {
    return 'Ini halaman tentang kami';
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');
});

Route::prefix('akademik')->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('matakuliah', MatakuliahController::class);
});

Route::get('/sapa-controller', [SapaController::class, 'index']);

Route::get('/sapa', function () {
    return view('sapa', [
        'nama' => 'Ahmad Fauzi',
        'kontenHtml' => '<strong>Teks Tebal</strong>',
    ]);
});

Route::get('/statistik', function () {
    return view('akademik.statistik', [
        'totalMahasiswa'  => Mahasiswa::count(),
        'totalMatakuliah' => Matakuliah::count(),
    ]);
});

Route::get('/latihan-blade', function () {
    $mahasiswa = Mahasiswa::all();
    return view('latihan-blade', compact('mahasiswa'));
});

Route::get('/latihan', [LatihanController::class, 'index']);

//Rute Memasukkan Data Mahasiswa
Route::get('/mahasiswa-uji', function () {
    return view('mahasiswa.form-uji');
});

Route::post('/mahasiswa-uji', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa-json', [MahasiswaController::class, 'apiIndex']);

//Rute Mencari Data Mahasiswa
Route::get('/mahasiswa-cari', function () {
    return view('mahasiswa.form-cari');
});

Route::get('/mahasiswa-cari/hasil', [MahasiswaController::class, 'cariMahasiswa'])
    ->name('mahasiswa.cari');

//Rute Statistik Mahasiswa
Route::get('/statistik', StatistikMahasiswaController::class);

//Rute Admin
Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/total-sks', HitungTotalSksController::class);
Route::get('/laporan/rekap', [RekapController::class, 'Index']);

//query builder
Route::prefix('demo')->name('demo.')->group(function () {
    Route::get('/semua', [QueryBuilderDemoController::class, 'tampilkanSemua'])->name('semua');
    Route::get('/filter', [QueryBuilderDemoController::class, 'tampilkanFilter'])->name('filter');
    Route::get('/statistik-prodi', [QueryBuilderDemoController::class, 'statistikProdi'])->name('statistik');
    Route::get('/crud', [QueryBuilderDemoController::class, 'formCrud'])->name('crud');
    Route::post('/crud', [QueryBuilderDemoController::class, 'simpan'])->name('simpan');
    Route::put('/crud/{nim}', [QueryBuilderDemoController::class, 'ubah'])->name('ubah');
    Route::delete('/crud/{nim}', [QueryBuilderDemoController::class, 'hapus'])->name('hapus');
    Route::get('/tugas-1', [QueryBuilderDemoController::class, 'tugas1'])->name('tugas1');
    Route::get('/tugas-2', [QueryBuilderDemoController::class, 'tugas2'])->name('tugas2');
    Route::get('/tugas-3', [QueryBuilderDemoController::class, 'tugas3'])->name('tugas3');
});