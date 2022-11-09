<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = [
            [
                'id'            => 1,
                'name'          => 'Robert Zemeckis',
                'title'         => 'Director',
                'created_at'    => date("Y-m-d H:i:s"),
            ],
            [
                'id'            => 2,
                'name'          => 'Winston Groom',
                'title'         => 'Writer',
                'created_at'    => date("Y-m-d H:i:s"),
            ],
            [
                'id'            => 3,
                'name'          => 'Tom Hanks',
                'title'         => 'Star',
                'created_at'    => date("Y-m-d H:i:s"),
            ],
            [
                'id'            => 4,
                'name'          => 'Robin Wright',
                'title'         => 'Star',
                'created_at'    => date("Y-m-d H:i:s"),
            ],
            [
                'id'            => 5,
                'name'          => 'Gary Sinise',
                'title'         => 'Star',
                'created_at'    => date("Y-m-d H:i:s"),
            ],
        ];

        Artist::insert($artists);
    }
}
