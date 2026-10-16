@extends('layouts.app')

@section('judul', 'Detail Mata Kuliah - ' . $matakuliah->nama_mk)

@section('konten')
    <h1>Detail Mata Kuliah</h1>

    <div class="panel" style="margin-bottom: 20px;">
        <dl class="detail">
            <dt>Kode MK</dt><dd>{{ $matakuliah->kode_mk }}</dd>
            <dt>Nama</dt><dd>{{ $matakuliah->nama_mk }}</dd>
            <dt>SKS</dt><dd>{{ $matakuliah->sks }}</dd>
            <dt>Semester</dt><dd>{{ $matakuliah->semester }}</dd>
        </dl>
        <a class="btn btn-abu" href="{{ route('matakuliah.index') }}">&laquo; Kembali ke Daftar</a>
        <a class="btn" href="{{ route('matakuliah.edit', $matakuliah->kode_mk) }}">Edit</a>

        <form action="{{ route('matakuliah.destroy', $matakuliah->kode_mk) }}" method="POST" style="display:inline;"
              onsubmit="return confirm('Hapus mata kuliah ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-abu">Hapus</button>
        </form>
    </div>

    <div class="panel">
        <h3>Mahasiswa yang Mengambil Mata Kuliah Ini</h3>
        <table class="tabel">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($matakuliah->nilai as $n)
                <tr class="{{ $loop->even ? 'genap' : '' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->mahasiswa->nim ?? '-' }}</td>
                    <td>{{ $n->mahasiswa->nama ?? '-' }}</td>
                    <td>{{ $n->nilai }}</td>
                </tr>
                @empty
                <tr><td colspan="4" class="kosong">Belum ada mahasiswa yang mengambil mata kuliah ini.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection