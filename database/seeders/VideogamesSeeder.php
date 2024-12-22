<?php

namespace Database\Seeders;

use App\Models\videogames;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideogamesSeeder extends Seeder
{
    public function run(): void
    {
        Videogames::create([
            'title' => 'The Last of Us Part II',
            'studio' => 'Naughty Dog',
            'genre' => 'Acció, Aventura, Drama',
            'rating' => 10,
            'year' => 2020,
        ]);

        Videogames::create([
            'title' => 'God of War',
            'studio' => 'Santa Monica Studio',
            'genre' => 'Acció, Aventura',
            'rating' => 9,
            'year' => 2018,
        ]);

        Videogames::create([
            'title' => 'The Witcher 3: Wild Hunt',
            'studio' => 'CD Projekt Red',
            'genre' => 'Rol, Aventura',
            'rating' => 9,
            'year' => 2015,
        ]);

    }
}
