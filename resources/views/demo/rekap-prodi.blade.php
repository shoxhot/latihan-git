@extends('layouts.app')

@section('judul', 'Rekap Mahasiswa per Prodi')

@section('konten')
    @php $maks = $rekap->max('jumlah') ?: 1; @endphp

    <h1>Rekap Mahasiswa per Program Studi</h1>

    <div class="kartu-wrap">
        <div class="kartu"><small>Total mahasiswa</small><strong>{{ $total }}</strong></div>
        <div class="kartu"><small>Jumlah program studi</small><strong>{{ $rekap->count() }}</strong></div>
    </div>

    <div class="panel">
        <table class="tabel">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Program Studi</th>
                    <th style="width: 80px;">Jumlah</th>
                    <th style="width: 100px;">Persentase</th>
                    <th style="width: 200px;">Proporsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rekap as $row)
                <tr class="{{ $loop->even ? 'genap' : '' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->prodi }}</td>
                    <td>{{ $row->jumlah }}</td>
                    <td>{{ number_format($row->jumlah / $total * 100, 1) }}%</td>
                    <td>
                        <div class="batang-wrap">
                            <div class="batang" style="width: {{ ($row->jumlah / $maks) * 100 }}%"></div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="kosong">Belum ada data.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection