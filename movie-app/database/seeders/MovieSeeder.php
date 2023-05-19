<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ]);

        Movie::create([
            'judul' => 'The Godfather',
            'poster' => 'image.png',
            'genre' => 'Crime',
            'negara' => 'USA',
            'tahun' => 1972,
            'rating' => 8.0,
        ]);

        Movie::create([
            'judul' => 'Avatar: The Way of Water',
            'poster' => 'image.png',
            'genre' => 'Adventure',
            'negara' => 'USA',
            'tahun' => 2022,
            'rating' => 7.7,
        ]);
    }
}
