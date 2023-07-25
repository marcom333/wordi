<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/search/{word}', [\App\Http\Controllers\WordController::class,"search"]);
Route::get('/create', [\App\Http\Controllers\WordController::class,"create"]);
Route::post('/create', [\App\Http\Controllers\WordController::class,"store"]);
Route::get('/delete/{word}', [\App\Http\Controllers\WordController::class,"destroy"]);
Route::get('/score/{word}/{score}', [\App\Http\Controllers\WordController::class,"score"]);
/*
Route::get("test", function (){
    return view("test");
});*/

Route::get('/{word?}', [\App\Http\Controllers\WordController::class,"index"]);

/**/
Route::get('/upload', function () {
    $time = microtime(true);
    $file = Storage::get("public/words.txt");
    $wordCounter = 0;
    $words = explode("\n", $file);
    foreach($words as $data){
        $word = \App\Models\Word::where("word", $data)->first();
        if(!$word){
            $word = new \App\Models\Word();
            $word->word = $data;
            $word->stars = 0;
            $word->viewed = 0;
            $word->save();
        }
    }
});


/* 
    country things
    door lash
*/