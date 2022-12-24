<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\CitationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;

/*
 |-----------------
  | Rutas públicas-
 |-----------------
*/
Route::get('/', [PublicController::class,'index'])->name('welcome');
Route::get('/search', [PublicController::class,'goToSearch'])->name('search');
Route::get('/barbershop/{barbershop}', [PublicController::class,'showBarbershop'])->name('barbershop');

/*
 |-----------------------
  | Rutas para las citas-
 |-----------------------
*/
// Route::resource('citations', CitationController::class);
Route::get('/citations/{barbershop}/week', [CitationController::class,'index'])->name('citations.index');
Route::get('/citations/{barbershop}/barbers', [CitationController::class,'barbers'])->name('citations.barbers');
Route::get('/citations/{barber}/hours', [CitationController::class,'hours'])->name('citations.hours');
Route::get('/citations/{barber}/form', [CitationController::class,'form'])->name('citations.form');

/*
 |--------------------------------------------------------------------------
  | Rutas para login, register y funcionalidades derivadas del paquete Auth-
 |--------------------------------------------------------------------------
*/
Auth::routes();

/*
 |----------------------------------------------------
  | Ruta para el acceso al dashboard despues de login-
 |----------------------------------------------------
*/
Route::get('/home', [HomeController::class, 'index'])->name('home');
