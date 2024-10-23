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

        /**
         * we added new elements for db taht wil show in show.blade.php
         */
        $comics = config('comicsdata');
        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->image = $comic['thumb'];
            $newComic->series = $comic['series'];
            $newComic->type = $comic['type'];
            $price = str_replace('$', '', $comic['price']);
            $price = floatval($price);
            $newComic->price = $price;
            $newComic->artists = implode(',', $comic['artists']);
            $newComic->writers = implode(',', $comic['writers']);
            $newComic->save();
        }
    }
}
