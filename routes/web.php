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


Route::get('/profile',[App\Http\Controllers\ClientController::class,'profile']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/register2', [RegisterController::class, 'showRegistrationForm'])->name('register2');
Route::post('/register2', [RegisterController::class, 'register2']);
Route::get('/indexAdmin',[App\Http\Controllers\AdminController::class,'index2']);

Auth::routes();



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/users', 'AdminController@users')->name('admin.users');
    Route::get('/donors', 'AdminController@donors')->name('admin.donors');
    Route::get('/blood-requests', 'AdminController@bloodRequests')->name('admin.bloodRequests');
    // Ajoutez d'autres routes pour les sections du dashboard
});