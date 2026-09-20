<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\NilaiMatakuliah;

// rute daftar mahasiswa
Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa.index', compact('data'));
});

Route::get('/', function () {
    return view('welcome');
});

//rute matakuliah
Route::get('/matakuliah', function () {
    $data = Matakuliah::with('dosen')->get();
    return view('matakuliah.index', compact('data'));
});

Route::get('/matakuliah/create', function () {
    return view('matakuliah.create');
});

Route::post('/matakuliah', function (\Illuminate\Http\Request $request) {
    Matakuliah::create($request->only(['kode_mk', 'nama_mk', 'sks', 'semester']));
    return redirect('/matakuliah');
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
