@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
    <h1>Daftar Mahasiswa</h1>
    <p><a class="btn" href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a></p>
    <div class="panel">
        <table class="tabel">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Semester</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    <th>Jumlah Nilai</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswa as $mhs)
                <tr class="{{ $loop->even ? 'genap' : '' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->semester }}</td>
                    <td>{{ $mhs->nilai->count() }}</td>
                    <td>
                        @switch(true)
                            @case($mhs->semester <= 2)
                                <span class="badge badge-baru">Mahasiswa Baru</span>
                                @break
                            @case($mhs->semester >= 7)
                                <span class="badge badge-akhir">Tingkat Akhir</span>
                                @break
                            @default
                                <span class="badge badge-aktif">Mahasiswa Aktif</span>
                        @endswitch
                    </td>
                    <td><a class="btn" href="{{ route('mahasiswa.show', $mhs->nim) }}">Lihat Detail</a></td>
                </tr>
                @empty
                <tr><td colspan="8" class="kosong">Belum ada data mahasiswa.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection