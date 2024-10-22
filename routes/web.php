<?php

use App\Http\Controllers\Guest\ComicController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $comics = config('comicsdata');


//     return view('welcome', compact('comics'));
// });

Route::resource('/', ComicController::class);


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











