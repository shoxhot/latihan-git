<!DOCTYPE html>
<html lang="id">
<head><title>Latihan Blade</title></head>
<body>
    <h1>Data Mahasiswa (Latihan Blade)</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama (escaped)</th>
            <th>Nama (tidak di-escape)</th>
            <th>Prodi</th>
            <th>No HP</th>
        </tr>
        @foreach ($mahasiswa as $index => $mhs)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{!! $mhs->nama !!}</td>
            <td>{{ $mhs->prodi ?? 'Belum diisi' }}</td>
            <td>{{ $mhs->no_hp ?: 'Tidak ada nomor' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>