<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'id'            => 1,
                'status'        => 1,
                'name'          => 'Space Force',
                'rating'        => 6.9,
                'description'   => 'Description Space Force',
                'image'         => 'storage/movies/space-force.jpg',
                'created_at'    => date("Y-m-d H:i:s"),
            ],
            [
                'id'            => 2,
                'status'        => 1,
                'name'          => 'Forest Gump',
                'rating'        => 8.8,
                'description'   => 'Description Forest Gump',
                'image'         => 'storage/movies/forest-gump.jpg',
                'created_at'    => date("Y-m-d H:i:s"),
            ],
            [
                'id'            => 3,
                'status'        => 1,
                'name'          => 'Joker',
                'rating'        => 8.8,
                'description'   => 'Description joker',
                'image'         => 'storage/movies/joker.jpg',
                'created_at'    => date("Y-m-d H:i:s"),
            ],
        ];

        Movie::insert($movies);
    }
}
