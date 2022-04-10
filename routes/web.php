<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActualiteController;
use App\Pub;
use App\Actualite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    //$pub = Pub::latest();
    //$recent= Actualite::latest()->get(5);
    //$top = Actualite::orderBy('viewCount','desc')->get(5);
    /*return view('welcome',[
        'pub'=>$pub,
        'recent'=>$recent,
        'top'=>$top
        ]);*/
    return view('welcome');
});
route::get('/actualites',[ActualiteController::class, "index"]);
Route::post('/actualites/{actualite}',[ActualiteController::class, "create"]);
Route::get('/actualites/create',[ActualiteController::class, "new"]);
Route::get('/actualites/{actualite}',[ActualiteController::class, "show"]);
Route::get('/actualites/update/{actualite}',[ActualiteController::class, "update"]);
Route::post('/actualites/update/{actualite}',[ActualiteController::class, "edit"]);
Route::put('/actualites/update/{actualite}',[ActualiteController::class, "edit"]);
Route::delete('/actualites/{actualite}',[ActualiteController::class, "delete"]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
