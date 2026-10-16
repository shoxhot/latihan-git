<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RekapController extends Controller
{
    public function index()
    {
        $rekap = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->orderByDesc('jumlah')
            ->get();

        $total = $rekap->sum('jumlah');

        return view('demo.rekap-prodi', compact('rekap', 'total'));
    }
}