<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fakerID = \Faker\Factory::create('id_ID');
        $fakerEN = \Faker\Factory::create('en_US');
        $title = $fakerID->sentence(mt_rand(5,12));

        return [
        'judul' => $title,
        'slug' => Str::slug($title),
        'penulis' => $fakerID->name(),
        'konten' => $fakerEN->paragraph(mt_rand(8,15)),
       
            
        ];
    }
}
