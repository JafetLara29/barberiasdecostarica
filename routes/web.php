<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;

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

// ?Route::get('/', [MainController::class,'index'])->name('main-web-route');

Route::get('/',[HomeController::class,'index'])->name('main');

/*Route::resource('Barbeshop','BarbeshopController');
Route::resource('Barber','BarberController');
Route::resource('Citation','CitationController');
Route::resource('Service','ServiceController');*/

Auth::routes();

// ?Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
