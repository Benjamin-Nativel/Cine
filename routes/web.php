<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

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
Route::get('test',[FilmController::class,'test'])->name('test');





Route::get('films',[FilmController::class,'getAll'])->name('films');
Route::get('film/{id}',[FilmController::class,'show'])->whereNumber('id');
Route::post('ajouter',[FilmController::class,'addFilm'])->name('ajouter');


Route::post('edition/{id}',[FilmController::class,'edit'])->whereNumber('id')->name('edition');
ROute::delete('delete/{id}',[FilmController::class,'destroy'])->whereNumber('id')->name('delete');


Route::get('/',[FilmController::class,'news'])->name('index');
