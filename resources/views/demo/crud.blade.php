@extends('layouts.app')

@section('judul', 'Latihan CRUD Query Builder')

@section('konten')
    <h1>Latihan CRUD Query Builder</h1>

    @if (session('pesan'))
        <p><span class="badge badge-baru">{{ session('pesan') }}</span></p>
    @endif

    <div class="panel" style="margin-bottom: 20px;">
        <h3>Tambah data uji (INSERT)</h3>
        <form action="{{ route('demo.simpan') }}" method="POST">
            @csrf
            <input type="text" name="nim" placeholder="NIM (awali 9999)" required>
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="text" name="prodi" placeholder="Prodi" required>
            <input type="number" name="semester" placeholder="Semester" required>
            <input type="text" name="no_hp" placeholder="No HP" required>
            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>

    <div class="panel">
        <h3>Data uji (NIM berawalan 9999)</h3>
        <table class="tabel">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Semester</th>
                    <th>Ubah semester (UPDATE)</th>
                    <th>Hapus (DELETE)</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $mhs)
                <tr class="{{ $loop->even ? 'genap' : '' }}">
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->semester }}</td>
                    <td>
                        <form action="{{ route('demo.ubah', $mhs->nim) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="number" name="semester" value="{{ $mhs->semester }}" style="width: 60px;">
                            <button type="submit" class="btn">Ubah</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('demo.hapus', $mhs->nim) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-abu">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="kosong">Belum ada data uji.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection