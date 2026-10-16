@extends('layouts.app')

@section('judul', 'Statistik Mahasiswa')

@section('konten')
    @php
        $urut = $perProdi->sortByDesc('jumlah');
        $maks = $urut->max('jumlah') ?: 1;
        $teratas = $urut->first();
    @endphp

    <h1>Statistik Mahasiswa</h1>

    <div class="kartu-wrap">
        <div class="kartu"><small>Total mahasiswa</small><strong>{{ $total }}</strong></div>
        <div class="kartu"><small>Jumlah program studi</small><strong>{{ $perProdi->count() }}</strong></div>
        <div class="kartu"><small>Prodi terbanyak</small><strong style="font-size: 18px;">{{ $teratas->prodi ?? '-' }}</strong></div>
    </div>

    <div class="panel">
        <table class="tabel">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Program Studi</th>
                    <th style="width: 80px;">Jumlah</th>
                    <th style="width: 220px;">Proporsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($urut as $row)
                <tr class="{{ $loop->even ? 'genap' : '' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->prodi }}</td>
                    <td>{{ $row->jumlah }}</td>
                    <td>
                        <div class="batang-wrap">
                            <div class="batang" style="width: {{ ($row->jumlah / $maks) * 100 }}%"></div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="kosong">Belum ada data.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection