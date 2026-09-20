<h1>Tambah Mata Kuliah</h1>
<form action="/matakuliah" method="POST">
    @csrf
    <label>Kode MK: <input type="text" name="kode_mk"></label><br>
    <label>Nama MK: <input type="text" name="nama_mk"></label><br>
    <label>SKS: <input type="number" name="sks"></label><br>
    <label>Semester: <input type="number" name="semester"></label><br>
    <button type="submit">Simpan</button>
</form>