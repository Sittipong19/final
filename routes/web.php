<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ChartController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/rating",[RatingController::class,"rating"]);
Route::get("/addrating",[RatingController::class,"addrating"]);
Route::post("/uploadrating",[RatingController::class,"uploadrating"]);
Route::get("/editratingset/{id}",[RatingController::class,"editratingset"]);
Route::get("/delete/{id}",[RatingController::class,"delete"]);


Route::get("/actorview",[ActorController::class,"actor"]);
Route::get("/addactor",[ActorController::class,"addactor"]);
Route::post("/uploadactor",[ActorController::class,"uploadactor"]);
Route::get("/deleteactor/{id}",[ActorController::class,"deleteactor"]);

Route::get("/genreview",[GenreController::class,"genre"]);
Route::get("/addgenre",[GenreController::class,"addgenre"]);
Route::post("/uploadgenre",[GenreController::class,"uploadgenre"]);
Route::get("/deletegenre/{id}",[GenreController::class,"deletegenre"]);

Route::get('/chart', [ChartController::class,'chart']);

