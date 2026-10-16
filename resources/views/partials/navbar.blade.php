<nav>
    <a href="{{ route('mahasiswa.index') }}" class="{{ request()->routeIs('mahasiswa.*') ? 'aktif' : '' }}">Mahasiswa</a>
    <a href="{{ route('matakuliah.index') }}" class="{{ request()->routeIs('matakuliah.*') ? 'aktif' : '' }}">Mata Kuliah</a>
</nav>