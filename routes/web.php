<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
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
