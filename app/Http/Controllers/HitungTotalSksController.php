<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;

class HitungTotalSksController extends Controller
{
    public function __invoke()
    {
        $totalSks = Matakuliah::sum('sks');
        $jumlahMk = Matakuliah::count();

        return view('total-sks', compact('totalSks', 'jumlahMk'));
    }
}