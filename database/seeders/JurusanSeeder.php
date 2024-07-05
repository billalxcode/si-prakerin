<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = [
            'Rekayasa Perangkat Lunak',
            'Akutansi',
            'Administrasi',
            'Desain Grafis',
            'Keperawatan',
            'Teknik Logistik',
            'Bisnis dan Pemasaran'
        ];

        foreach ($jurusans as $jurusan) {
            Jurusan::create(['name' => $jurusan]);
        }
    }
}
