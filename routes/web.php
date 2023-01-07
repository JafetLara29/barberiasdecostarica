<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\BarbershopController;
use App\Http\Controllers\CitationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SocialMediaController;
use App\Models\Barber;

/*
|-----------------
| Rutas públicas-
|-----------------
*/
Route::get('/', [PublicController::class,'index'])->name('welcome');
Route::get('/search', [PublicController::class,'goToSearch'])->name('search');
Route::post('/search', [BarbershopController::class,'search'])->name('barbershop.search');

/*
|-----------------------
| Rutas para las citas-
|-----------------------
*/
Route::get('/citations/{barbershop}/week', [CitationController::class,'index'])->name('citations.index');
Route::get('/citations/{barbershop}/barbers', [CitationController::class,'barbers'])->name('citations.barbers');
Route::get('/citations/{barber}/hours', [CitationController::class,'hours'])->name('citations.hours');
Route::get('/citations/{barber}/form', [CitationController::class,'form'])->name('citations.form');
Route::get('/citations/inbox', [CitationController::class,'inbox'])->name('citations.inbox');

/*
|----------------------
| Rutas del dashboard-
|----------------------
*/
// Citation
Route::post('citation/accept/{id}', [CitationController::class,'acceptCitation'])->name('acceptCitation');
Route::post('citation/reject/{id}', [CitationController::class,'rejectCitation'])->name('rejectCitation');
Route::post('citation/send', [CitationController::class,'sendCitationForm'])->name('sendCitations');
Route::get('citation/get', [CitationController::class,'getCitation'])->name('ReceiveCitations');
// barbershop
Route::get('/barbershop/create', [BarbershopController::class,'create'])->name('barbershop.create');
Route::get('/barbershop/{barbershop}', [BarbershopController::class,'show'])->name('barbershop.show');

/*
|------------------------
| Rutas para los barbers-
|------------------------
*/
Route::resource('/barbers', BarberController::class);
//Route::post('/barbers/fillinfo', [BarberController::class,'create'])->name('fillbarbersinfo');


/*
|------------------------
| Rutas para las redes Sociales-
|------------------------
*/
Route::resource('/socialmedia',SocialMediaController::class);

/*
|--------------------------------------------------------------------------
| Rutas para login, register y funcionalidades derivadas del paquete Auth-
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
