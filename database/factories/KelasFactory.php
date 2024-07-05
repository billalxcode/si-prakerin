<?php

namespace Database\Factories;

use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jurusan = Jurusan::all()->random();

        return [
            'name' => $jurusan->name . ' ' . fake()->randomDigit(),
            'guru_id' => null,
            'jurusan_id' => $jurusan->id
        ];
    }
}
