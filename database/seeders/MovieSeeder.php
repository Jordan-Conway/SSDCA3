<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'Inception',
                'runTime' => 148,
                'releaseDate' => '2010-07-16',
                'rating' => 9
            ],
            [
                'title' => 'Interstellar',
                'runTime' => 169,
                'releaseDate' => '2014-11-07',
                'rating' => 8
            ],
            [
                'title' => 'Avatar',
                'runTime' => 182,
                'releaseDate' => '2009-12-18',
                'rating' => 8
            ],
            [
                'title' => 'The Matrix',
                'runTime' => 136,
                'releaseDate' => '1999-06-11',
                'rating' => 9
            ],
            [
                'title' => 'The Dark Knight',
                'runTime' => 152,
                'releaseDate' => '2008-07-24',
                'rating' => 9
            ]
        ]);
    }
}
