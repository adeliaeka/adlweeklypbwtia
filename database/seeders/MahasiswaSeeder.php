<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'name' => 'Adelia Eka Rahmawati',
                'nim' => '13242520036',
                'prodi' => 'Teknologi Informasi',
                'email' => 'adelia.eka@example.com',
                'nohp' => '08123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Abe',
                'nim' => '13242520037',
                'prodi' => 'Teknologi Informasi',
                'email' => 'abe@example.com',
                'nohp' => '08123456780',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Abdil',
                'nim' => '13242520038',
                'prodi' => 'Teknologi Informasi',
                'email' => 'abdil@example.com',
                'nohp' => '08123456781',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
