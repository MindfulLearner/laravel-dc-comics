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
            $priceParts = explode(".", $price);
            $newComic->price = (int) $priceParts[0];

            $newComic->price = $price[0];
            $newComic->artists = $comic['artists'][0];
            $newComic->save();
        }
    }
}
