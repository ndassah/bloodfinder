<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DonneursController;
use App\Http\Controllers\HopitaleController;
use App\Http\Controllers\AnnoncesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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


//Routes des donneurs

//Route::middleware(['auth','check.user.type'])->group(function(){

        Route::get('/indexDonneurs',[App\Http\Controllers\ClientController::class,'index']);
        Route::get('/contact',[App\Http\Controllers\ClientController::class,'contact']);
        Route::get('/about',[App\Http\Controllers\ClientController::class,'about']);
        Route::get('/service',[App\Http\Controllers\ClientController::class,'service']);
        Route::get('/publication',[App\Http\Controllers\ClientController::class,'publication']);
        Route::get('/showdemandes',[App\Http\Controllers\ClientController::class,'showdemandes']);
        Route::get('/demandes',[App\Http\Controllers\ClientController::class,'demandes']);

//});


//Routes des hopitaux
//Route::middleware(['auth','check.user.type'])->group(function(){
        Route::get('/indexHopitaux',[App\Http\Controllers\ClientController::class,'index3']);
        Route::get('/contact2',[App\Http\Controllers\ClientController::class,'contact2']);
        Route::get('/about2',[App\Http\Controllers\ClientController::class,'about2']);
        Route::get('/service2',[App\Http\Controllers\ClientController::class,'service2']);
        Route::get('/publication2',[App\Http\Controllers\ClientController::class,'publication2']);
        Route::get('/showdons',[App\Http\Controllers\ClientController::class,'showdons']);
        Route::get('/dons',[App\Http\Controllers\ClientController::class,'dons']);
//});





Route::get('/inscription', [DonneursController::class, 'showRegistrationForm'])->name('register');
Route::resource('donneur', DonneursController::class)
        ->only(['index','store','edit','update','destroy','nombreDonneurs']);

        
Route::get('/inscription-hosto', [HopitaleController::class, 'showRegistrationForm'])->name('register2');
Route::resource('hopitale', HopitaleController::class)
        ->only(['index','store','edit','update','destroy']);


       Route::resource('annonces', AnnoncesController::class)
        ->only(['index','store','edit','update','destroy']);
        
Route::get('/bloodfinder-admin',[App\Http\Controllers\AdminController::class,'dash']);
Route::get('/bloodfinder-404',[App\Http\Controllers\AdminController::class,'t404']);
Route::get('/bloodfinder-admin-data',[App\Http\Controllers\AdminController::class,'tables']);
Route::get('/bloodfinder-admin-stat',[App\Http\Controllers\AdminController::class,'stat']);
Route::get('/bloodfinder-admin-empty',[App\Http\Controllers\AdminController::class,'blank']);
Route::get('/dashdons',[App\Http\Controllers\AdminController::class,'dashdons']);
Route::get('/dashdemande',[App\Http\Controllers\AdminController::class,'dashdemande']);



Route::get('/login',[App\Http\Controllers\Auth\AuthController::class,'login'])->name('login');
Route::post('/login',[App\Http\Controllers\Auth\AuthController::class,'dologin'])->middleware('CheckUserType');

Route::get('/liste-data',[App\Http\Controllers\AdminController::class,'getAllData']);

Auth::routes();




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
