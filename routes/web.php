<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\enregistrementController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\WebrtcStreamingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EmploiController;
use App\Pub;
use App\Actualite;
use App\Gallery;

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
    $recent= Actualite::latest()->limit(5)->get();
    $top = Actualite::orderBy('viewCount','desc')->limit(5)->get();
    $gallery1 = Gallery::latest()->limit(3)->offset(0)->get();
    $gallery2 = Gallery::latest()->limit(3)->offset(3)->get();
    $gallery3 = Gallery::latest()->limit(3)->offset(6)->get();
    return view('welcome',[
        
        'recent'=>$recent,
        'top'=>$top,
        "images1"=>$gallery1,
        "images2"=>$gallery2,
        "images3"=>$gallery3,
        ]);
   // return view('welcome');
});
route::get('/actualites',[ActualiteController::class, "index"]);
Route::post('/actualites/{actualite}',[ActualiteController::class, "create"]);
Route::get('/actualites/search/{id}',[ActualiteController::class, "search"]);
Route::get('/actualites/create',[ActualiteController::class, "new"]);
Route::get('/actualites/{actualite}',[ActualiteController::class, "show"]);
Route::get('/actualites/update/{actualite}',[ActualiteController::class, "update"]);
Route::post('/actualites/update/{actualite}',[ActualiteController::class, "edit"]);
Route::put('/actualites/update/{actualite}',[ActualiteController::class, "edit"]);
Route::delete('/actualites/{actualite}',[ActualiteController::class, "delete"]);

route::get('/enregistrements',[enregistrementController::class,'index']);
route::get('/enregistrements/new',[enregistrementController::class,'create']);
route::post('/enregistrements/new',[enregistrementController::class,'store']);
route::get('/enregistrements/{id}',[enregistrementController::class,'show']);

route::get('/temoignages',[TemoignageController::class,'index']);
route::get('/temoignages/new',[TemoignageController::class,'create']);
route::post('/temoignages/new',[TemoignageController::class,'store']);
route::get('/temoignages/{id}',[TemoignageController::class,'show']);
route::post('/temoignages/{id}',[TemoignageController::class,'ajouter_comment']);
route::get('/temoignages/users/{id}',[TemoignageController::class,'users_temoignage']);

route::get('/contact',[contactController::class, "create"]);
route::post('/contact',[contactController::class, "store"]);

Route::get('/streaming',[WebrtcStreamingController::class, 'index'] );
Route::get('/streaming/{streamId}', [WebrtcStreamingController::class, 'consumer']);
Route::post('/stream-offer',  [WebrtcStreamingController::class, 'makeStreamOffer']);
Route::post('/stream-answer',  [WebrtcStreamingController::class, 'makeStreamAnswer']);
route::get('/staff',function(){
    return view('staff');
});
route::get('/emploi',[EmploiController::class,'show']);
route::get('/gallery',[GalleryController::class,'index']);
route::get('/gallery/{event}',[GalleryController::class,'findByEvent']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
