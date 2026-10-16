@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa (Paginate)')

@section('konten')
    <h1>Daftar Mahasiswa (Paginate)</h1>
    <p>Menampilkan {{ $data->firstItem() }} sampai {{ $data->lastItem() }} dari {{ $data->total() }} data</p>

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
                    <td>{{ $data->firstItem() + $loop->index }}</td>
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

        {{ $data->links() }}
    </div>
@endsection