<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('Client.index');
});

Route::get('/index',[App\Http\Controllers\ClientController::class,'index']);
Route::get('/contact',[App\Http\Controllers\ClientController::class,'contact']);
Route::get('/about',[App\Http\Controllers\ClientController::class,'about']);
Route::get('/service',[App\Http\Controllers\ClientController::class,'service']);
Route::get('/annonces',[App\Http\Controllers\ClientController::class,'annonces']);
Route::get('/demandes',[App\Http\Controllers\ClientController::class,'demandes']);
Route::get('/dons',[App\Http\Controllers\ClientController::class,'dons']);


Route::get('/inscription', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/inscription', [RegisterController::class, 'register']);

Route::get('/inscription-hopital', [RegisterController::class, 'showRegistrationForm2'])->name('register2');
Route::post('/inscription-hopital', [RegisterController::class, 'register2']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

