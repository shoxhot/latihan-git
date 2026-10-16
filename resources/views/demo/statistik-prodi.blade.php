@extends('layouts.app')

@section('judul', 'Rekap Mahasiswa per Prodi')

@section('konten')
    <h1>Rekap Mahasiswa per Program Studi</h1>

    <div class="panel">
        <table class="tabel">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Program Studi</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rekap as $row)
                <tr class="{{ $loop->even ? 'genap' : '' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->prodi }}</td>
                    <td>{{ $row->jumlah }}</td>
                </tr>
                @empty
                <tr><td colspan="3" class="kosong">Belum ada data.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection