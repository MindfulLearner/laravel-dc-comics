<?php

use App\Http\Controllers\Guest\ComicController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $comics = config('comicsdata');
//     return view('welcome', compact('comics'));
// });


// this will return the view of the comics
Route::resource('/', ComicController::class)->names('comics');

Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');

// set che ritorna la pagina di edit con i dati del comic cliccato
Route::get('/comics/{id}/edit', [ComicController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{id}', [ComicController::class, 'update'])->name('comics.update');

//destroy
Route::delete('/comics/{id}', [ComicController::class, 'destroy'])->name('comics.destroy');

//create store
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');


// laraval
// checking health
Route::get('/health', function () {
    return response()->json(['status' => 'healthy'], 200);
});



Route::get('/health-db', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['status' => 'healthy', 'database' => 'connected'], 200);
    } catch (\Exception $e) {
        return response()->json(['status' => 'unhealthy', 'error' => $e->getMessage()], 500);
    }
});











