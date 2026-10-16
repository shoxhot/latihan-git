@extends('layouts.app')

@section('judul', $judul)

@section('konten')
    <h1>{{ $judul }}</h1>
    <p>Jumlah data: {{ $data->count() }}</p>

    <div class="panel">
        <table class="tabel">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $mhs)
                <tr class="{{ $loop->even ? 'genap' : '' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->semester }}</td>
                </tr>
                @empty
                <tr><td colspan="5" class="kosong">Belum ada data.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection