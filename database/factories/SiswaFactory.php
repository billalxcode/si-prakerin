<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => random_int(000000, 999999),
            'name' => fake()->name(),
            'whatsapp' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'kelas_id' => Kelas::all()->random()->id
        ];
    }
}
