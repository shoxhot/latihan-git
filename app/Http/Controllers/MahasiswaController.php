<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $mahasiswa = Mahasiswa::with('nilai')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function show(Mahasiswa $mahasiswa) {
        $mahasiswa->load('nilai.matakuliah');
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function create() {
        return view('mahasiswa.create');
    }

    public function store(Request $request) {
        Mahasiswa::create($request->only(['nim', 'nama', 'prodi', 'semester', 'no_hp']));
        return redirect()->route('mahasiswa.index')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit(Mahasiswa $mahasiswa) {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa) {
        $mahasiswa->update($request->only(['nama', 'prodi', 'semester', 'no_hp']));
        return redirect()->route('mahasiswa.index')->with('pesan', 'Data berhasil diperbarui');
    }

    public function destroy(Mahasiswa $mahasiswa) {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('pesan', 'Data berhasil dihapus');
    }
}