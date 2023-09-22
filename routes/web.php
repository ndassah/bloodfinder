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
    return view('Client.index0');
});


//Routes des donneurs

Route::middleware(['auth:donneur'])->group(function(){

        Route::get('/indexDonneurs',[App\Http\Controllers\ClientController::class,'index']);
        Route::get('/contact',[App\Http\Controllers\ClientController::class,'contact']);
        Route::get('/about',[App\Http\Controllers\ClientController::class,'about']);
        Route::get('/service',[App\Http\Controllers\ClientController::class,'service']);
        Route::get('/publication',[App\Http\Controllers\ClientController::class,'publication']);
        Route::get('/showdemandes',[App\Http\Controllers\ClientController::class,'showdemandes']);
        Route::get('/demandes',[App\Http\Controllers\ClientController::class,'demandes']);
        Route::get('/detailDonneur',[App\Http\Controllers\DonneursController::class,'show']);


});


//Routes des hopitaux
Route::middleware(['auth:hopital'])->group(function(){
        Route::get('/indexHopitaux',[App\Http\Controllers\ClientController::class,'index3']);
        Route::get('/contact2',[App\Http\Controllers\ClientController::class,'contact2']);
        Route::get('/about2',[App\Http\Controllers\ClientController::class,'about2']);
        Route::get('/service2',[App\Http\Controllers\ClientController::class,'service2']);
        Route::get('/publication2',[App\Http\Controllers\ClientController::class,'publication2']);
        Route::get('/showdons',[App\Http\Controllers\ClientController::class,'showdons']);
        Route::get('/dons',[App\Http\Controllers\ClientController::class,'dons']);
        Route::get('/detailHopital',[App\Http\Controllers\HopitaleController::class,'show']);

});



Route::get('/contact3',[App\Http\Controllers\ClientController::class,'contact3']);
Route::get('/about3',[App\Http\Controllers\ClientController::class,'about3']);


Route::get('/inscription', [DonneursController::class, 'showRegistrationForm'])->name('register');
Route::resource('donneur', DonneursController::class)
        ->only(['index','store','edit','update','show','destroy','nombreDonneurs']);

        
Route::get('/inscription-hosto', [HopitaleController::class, 'showRegistrationForm'])->name('register2');
Route::resource('hopitale', HopitaleController::class)
        ->only(['index','store','edit','update','show','destroy']);
//Route::get('/hopitale/{hopitale}/edit,HopitaleController@edit')->name('hopitale.edit');


       Route::resource('annonces', AnnoncesController::class)
        ->only(['index','store','edit','update','destroy']);
        
Route::get('/bloodfinder-admin',[App\Http\Controllers\AdminController::class,'compte']);
Route::get('/bloodfinder-404',[App\Http\Controllers\AdminController::class,'t404']);
Route::get('/bloodfinder-admin-show-dons',[App\Http\Controllers\AdminController::class,'dashshowdons']);
Route::get('/bloodfinder-admin-show-demandes',[App\Http\Controllers\AdminController::class,'dashshowdemandes']);
Route::get('/bloodfinder-showdons2',[App\Http\Controllers\AdminController::class,'showdons2']);
Route::get('/bloodfinder-showdemandes2',[App\Http\Controllers\AdminController::class,'showdemandes2']);

Route::get('/bloodfinder-admin-data',[App\Http\Controllers\AdminController::class,'tables']);
Route::get('/bloodfinder-admin-empty',[App\Http\Controllers\AdminController::class,'blank']);
Route::get('/dashdons',[App\Http\Controllers\AdminController::class,'dashdons']);
Route::get('/dashdemande',[App\Http\Controllers\AdminController::class,'dashdemande']);



Route::get('/login',[App\Http\Controllers\Auth\LoginController::class,'dologin'])->name('login');
Route::post('/login',[App\Http\Controllers\Auth\LoginController::class,'login']);

Route::get('/liste-data',[App\Http\Controllers\AdminController::class,'getAllData']);
Route::get('/compte',[App\Http\Controllers\AdminController::class,'compte']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\ClientController::class, 'index0'])->name('index0');
