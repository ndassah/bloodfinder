<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DonneursController;
use App\Http\Controllers\HopitaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::get('/login',[App\Http\Controllers\ClientController::class,'login']);



Route::get('/inscription', [DonneursController::class, 'showRegistrationForm'])->name('register');
Route::resource('donneur', DonneursController::class)
        ->only(['index','store','edit','update','destroy']);

        
Route::get('/inscription-hosto', [HopitaleController::class, 'showRegistrationForm'])->name('register2');
Route::resource('hopitale', HopitaleController::class)
        ->only(['index','store','edit','update','destroy']);

Route::get('/bloodfinder-admin',[App\Http\Controllers\AdminController::class,'dash']);
Route::get('/bloodfinder-404',[App\Http\Controllers\AdminController::class,'t404']);
Route::get('/bloodfinder-admin-data',[App\Http\Controllers\AdminController::class,'tables']);
Route::get('/bloodfinder-admin-stat',[App\Http\Controllers\AdminController::class,'stat']);
Route::get('/bloodfinder-admin-empty',[App\Http\Controllers\AdminController::class,'blank']);

Auth::routes();



