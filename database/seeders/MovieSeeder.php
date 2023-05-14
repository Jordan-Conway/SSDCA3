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
                'rating' => 9,
                'posterURL' => "https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg"
            ],
            [
                'title' => 'Interstellar',
                'runTime' => 169,
                'releaseDate' => '2014-11-07',
                'rating' => 8,
                'opsterURL' => "https://i.ebayimg.com/images/g/zu4AAOSw2spbJQ0J/s-l1600.jpg"
            ],
            [
                'title' => 'Avatar',
                'runTime' => 182,
                'releaseDate' => '2009-12-18',
                'rating' => 8,
                'posterURL' => "https://i.etsystatic.com/18242346/r/il/864ece/3727281843/il_570xN.3727281843_n4vs.jpg"
            ],
            [
                'title' => 'The Matrix',
                'runTime' => 136,
                'releaseDate' => '1999-06-11',
                'rating' => 9,
                'posterURL' => "https://cdn.europosters.eu/image/1300/posters/matrix-hackers-i104636.jpg"
            ],
            [
                'title' => 'The Dark Knight',
                'runTime' => 152,
                'releaseDate' => '2008-07-24',
                'rating' => 9,
                'posterURL' => "https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg"
            ]
        ]);
    }
}
