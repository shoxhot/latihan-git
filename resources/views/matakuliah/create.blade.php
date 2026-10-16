@extends('layouts.app')

@section('judul', 'Tambah Mata Kuliah')

@section('konten')
    <h1>Tambah Mata Kuliah</h1>

    <div class="panel">
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            <div class="form-grup"><label>Kode MK</label><input type="text" name="kode_mk" required></div>
            <div class="form-grup"><label>Nama Mata Kuliah</label><input type="text" name="nama_mk" required></div>
            <div class="form-grup"><label>SKS</label><input type="number" name="sks" required></div>
            <div class="form-grup"><label>Semester</label><input type="number" name="semester" required></div>
            <button type="submit" class="btn">Simpan</button>
            <a class="btn btn-abu" href="{{ route('matakuliah.index') }}">Batal</a>
        </form>
    </div>
@endsection