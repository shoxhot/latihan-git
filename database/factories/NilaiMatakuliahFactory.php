<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class NilaiMatakuliahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'mahasiswa_id' => Mahasiswa::inRandomOrder()->first()->nim,
            'matakuliah_id' => Matakuliah::inRandomOrder()->first()->kode_mk,
            'nilai' => fake()->numberBetween(50, 100),
        ];
    }
}