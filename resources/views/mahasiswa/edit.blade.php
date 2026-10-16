@extends('layouts.app')

@section('judul', 'Edit Mahasiswa - ' . $mahasiswa->nama)

@section('konten')
    <h1>Edit Mahasiswa</h1>

    <div class="panel">
        <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-grup"><label>NIM</label><input type="text" value="{{ $mahasiswa->nim }}" disabled></div>
            <div class="form-grup"><label>Nama</label><input type="text" name="nama" value="{{ $mahasiswa->nama }}" required></div>
            <div class="form-grup"><label>Program Studi</label><input type="text" name="prodi" value="{{ $mahasiswa->prodi }}" required></div>
            <div class="form-grup"><label>Semester</label><input type="number" name="semester" value="{{ $mahasiswa->semester }}" required></div>
            <div class="form-grup"><label>No HP</label><input type="text" name="no_hp" value="{{ $mahasiswa->no_hp }}" required></div>
            <button type="submit" class="btn">Perbarui</button>
            <a class="btn btn-abu" href="{{ route('mahasiswa.index') }}">Batal</a>
        </form>
    </div>
@endsection