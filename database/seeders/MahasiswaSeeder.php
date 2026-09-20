<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
   public function run(): void
    {
        Mahasiswa::create([
            'nim' => '2024010001',
            'nama' => 'Ahmad Fauzi',
            'prodi' => 'Teknik Informatika',
            'semester' => '3',
            'no_hp' => '081234567890',
        ]);

        Mahasiswa::create([
            'nim' => '2024010002',
            'nama' => 'Siti Aminah',
            'prodi' => 'Sistem Informasi',
            'semester' => '1',
            'no_hp' => '081234567890',
        ]);

        Mahasiswa::factory()->count(48)->create(); 
    }
}
