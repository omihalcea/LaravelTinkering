<?php

namespace Database\Seeders;

use App\Models\film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
{
    public function run(): void
    {
        Film::create([
            'title' => 'El Caballero Oscuro',
            'director' => 'Christopher Nolan',
            'genre' => 'Acció, Drama, Crimen',
            'duration' => 152,
            'year' => 2008,
        ]);

        Film::create([
            'title' => 'Cadena Perpetua',
            'director' => 'Frank Darabont',
            'genre' => 'Drama',
            'duration' => 142,
            'year' => 1994,
        ]);

        Film::create([
            'title' => 'Matrix',
            'director' => 'Lana Wachowski, Lilly Wachowski',
            'genre' => 'Acció, Ciència-ficció',
            'duration' => 136,
            'year' => 1999,
        ]);
    }
}
