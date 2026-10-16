@extends('layouts.app')

@section('judul', 'Detail Mahasiswa - ' . $mahasiswa->nama)

@section('konten')
    <h1>Detail Mahasiswa</h1>

    <div class="panel" style="margin-bottom: 20px;">
        <dl class="detail">
            <dt>NIM</dt><dd>{{ $mahasiswa->nim }}</dd>
            <dt>Nama</dt><dd>{{ $mahasiswa->nama }}</dd>
            <dt>Program Studi</dt><dd>{{ $mahasiswa->prodi }}</dd>
            <dt>Semester</dt><dd>{{ $mahasiswa->semester }}</dd>
        </dl>
        <a class="btn btn-abu" href="{{ route('mahasiswa.index') }}">&laquo; Kembali ke Daftar</a>
        <a class="btn" href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}">Edit</a>

        <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" method="POST" style="display:inline;"
              onsubmit="return confirm('Hapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-abu">Hapus</button>
        </form>
    </div>

    <div class="panel">
        <h3>Daftar Nilai</h3>
        @forelse ($mahasiswa->nilai as $n)
            <p>{{ $n->matakuliah->nama_mk ?? '-' }}: {{ $n->nilai }}</p>
        @empty
            <p>Belum ada data nilai.</p>
        @endforelse
    </div>
@endsection