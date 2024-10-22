<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $comics = config('comicsdata');
        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->image = $comic['thumb'];
            $newComic->series = $comic['series'];

            $price = str_replace('$', '', $comic['price']);
            $price = floatval($price);
            $newComic->price = $price;

            $newComic->artists = $comic['artists'][0];
            $newComic->save();
        }
    }
}
