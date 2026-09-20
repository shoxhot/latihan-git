<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matakuliah;
use App\Models\User;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $dosen = User::first();

        Matakuliah::factory()
            ->count(20)
            ->create(['dosen_id' => $dosen->id]);
    }
}