@extends('layouts.app')

@section('judul', 'Tambah Mahasiswa')

@section('konten')
    <h1>Tambah Mahasiswa</h1>

    <div class="panel">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="form-grup"><label>NIM</label><input type="text" name="nim" required></div>
            <div class="form-grup"><label>Nama</label><input type="text" name="nama" required></div>
            <div class="form-grup"><label>Program Studi</label><input type="text" name="prodi" required></div>
            <div class="form-grup"><label>Semester</label><input type="number" name="semester" required></div>
            <div class="form-grup"><label>No HP</label><input type="text" name="no_hp" required></div>
            <button type="submit" class="btn">Simpan</button>
            <a class="btn btn-abu" href="{{ route('mahasiswa.index') }}">Batal</a>
        </form>
    </div>
@endsection