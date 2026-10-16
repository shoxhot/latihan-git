@extends('layouts.app')

@section('judul', 'Edit Mata Kuliah - ' . $matakuliah->nama_mk)

@section('konten')
    <h1>Edit Mata Kuliah</h1>

    <div class="panel">
        <form action="{{ route('matakuliah.update', $matakuliah->kode_mk) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-grup"><label>Kode MK</label><input type="text" value="{{ $matakuliah->kode_mk }}" disabled></div>
            <div class="form-grup"><label>Nama Mata Kuliah</label><input type="text" name="nama_mk" value="{{ $matakuliah->nama_mk }}" required></div>
            <div class="form-grup"><label>SKS</label><input type="number" name="sks" value="{{ $matakuliah->sks }}" required></div>
            <div class="form-grup"><label>Semester</label><input type="number" name="semester" value="{{ $matakuliah->semester }}" required></div>
            <button type="submit" class="btn">Perbarui</button>
            <a class="btn btn-abu" href="{{ route('matakuliah.index') }}">Batal</a>
        </form>
    </div>
@endsection