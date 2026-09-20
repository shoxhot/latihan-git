<h1>Daftar Nilai Mahasiswa</h1>
<table border="1" cellpadding="8">
    <tr><th>NIM</th><th>Nama Mahasiswa</th><th>Mata Kuliah</th><th>Nilai</th></tr>
    @foreach ($data as $n)
    <tr>
        <td>{{ $n->mahasiswa->nim }}</td>
        <td>{{ $n->mahasiswa->nama }}</td>
        <td>{{ $n->matakuliah->nama_mk }}</td>
        <td>{{ $n->nilai }}</td>
    </tr>
    @endforeach
</table>