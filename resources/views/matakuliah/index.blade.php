@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah')

@section('konten')
    <h1>Daftar Mata Kuliah</h1>
    <p><a class="btn" href="{{ route('matakuliah.create') }}">+ Tambah Mata Kuliah</a></p>
    <div class="panel">
        <table class="tabel">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode MK</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($matakuliah as $mk)
                <tr class="{{ $loop->even ? 'genap' : '' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->kode_mk }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>{{ $mk->semester }}</td>
                    <td>
                        @if ($mk->sks > 3)
                            <span class="badge badge-besar">SKS Besar</span>
                        @else
                            -
                        @endif
                    </td>
                    <td><a class="btn" href="{{ route('matakuliah.show', $mk->kode_mk) }}">Lihat Detail</a></td>
                </tr>
                @empty
                <tr><td colspan="7" class="kosong">Belum ada data mata kuliah.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection