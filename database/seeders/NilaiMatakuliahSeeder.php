<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NilaiMatakuliah;

class NilaiMatakuliahSeeder extends Seeder
{
    public function run(): void{
        NilaiMatakuliah::factory()->count(30)->create();
    }
}