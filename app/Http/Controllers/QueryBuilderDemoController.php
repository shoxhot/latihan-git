<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderDemoController extends Controller
{
    public function tampilkanSemua()
    {
        $data = DB::table('mahasiswas')->get();
        $judul = 'Semua Mahasiswa (Query Builder)';
        return view('demo.query-builder', compact('data', 'judul'));
    }

    public function tampilkanFilter()
    {
        $data = DB::table('mahasiswas')
            ->where('semester', '>=', 3)
            ->orderBy('nama')
            ->get();
        $judul = 'Mahasiswa Semester 3 ke Atas (diurutkan nama)';
        return view('demo.query-builder', compact('data', 'judul'));
    }

    public function statistikProdi()
    {
        $rekap = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->get();
        return view('demo.statistik-prodi', compact('rekap'));
    }

    public function formCrud()
    {
        $data = DB::table('mahasiswas')
            ->where('nim', 'like', '9999%')
            ->orderBy('nim')
            ->get();
        return view('demo.crud', compact('data'));
    }

    public function simpan(Request $request)
    {
        DB::table('mahasiswas')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'no_hp' => $request->no_hp,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('demo.crud')->with('pesan', 'Data berhasil ditambahkan (INSERT)');
    }

    public function ubah(Request $request, $nim)
    {
        DB::table('mahasiswas')
            ->where('nim', $nim)
            ->update(['semester' => $request->semester, 'updated_at' => now()]);

        return redirect()->route('demo.crud')->with('pesan', 'Semester berhasil diubah (UPDATE)');
    }

    public function hapus($nim)
    {
        DB::table('mahasiswas')->where('nim', $nim)->delete();

        return redirect()->route('demo.crud')->with('pesan', 'Data berhasil dihapus (DELETE)');
    }

    public function tugas1()
    {
        $data = DB::table('mahasiswas')
            ->where('prodi', 'Teknik Informatika')
            ->whereBetween('semester', [3, 6])
            ->orderBy('nama', 'asc')
            ->get();

        $judul = 'Teknik Informatika, Semester 3 sampai 6 (A-Z)';
        return view('demo.query-builder', compact('data', 'judul'));
    }

    public function tugas2()
    {
        $rekap = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->orderByDesc('jumlah')
            ->get();

        $total = $rekap->sum('jumlah');

        return view('demo.rekap-prodi', compact('rekap', 'total'));
    }

    public function tugas3()
    {
        $data = DB::table('mahasiswas')->orderBy('nama')->paginate(10);
        return view('demo.paginasi', compact('data'));
    }
}
