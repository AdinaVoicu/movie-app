<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::findOrFail(1)->artists()->sync(1);
        Movie::findOrFail(2)->artists()->sync([1, 2, 3, 4, 5]);
        Movie::findOrFail(3)->artists()->sync([3, 4, 5]);
    }
}
