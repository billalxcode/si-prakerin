<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Role::create(['name' => 'operator']);
        Role::create(['name' => 'guru']);
        Role::create(['name' => 'siswa']);

        User::factory()->create([
            'name' => 'Operator',
            'email' => 'operator@admin.com',
        ])->assignRole('operator');

        $this->call([
            JurusanSeeder::class,
            GuruSeeder::class,
            KelasSeeder::class,
            SiswaSeeder::class,
            PerusahaanSeeder::class
        ]);
    }
}
