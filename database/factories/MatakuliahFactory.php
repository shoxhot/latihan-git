<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatakuliahFactory extends Factory
{
   public function definition(): array
{
    return [
        'kode_mk' => fake()->unique()->numerify('MK-###'),
        'nama_mk' => fake()->randomElement(['Pemrograman Web', 'Basis Data', 'Jaringan Komputer']),
        'sks' => fake()->numberBetween(1, 4),
        'semester' => fake()->numberBetween(1, 8),
    ];
}
}