<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\BarbershopController;
use App\Http\Controllers\CitationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialMediaController;
use App\Models\Barber;

/*
|---------------------
| Rutas de barbershop-
|---------------------
*/
Route::get('/barbershops/create', [BarbershopController::class,'create'])->name('barbershop.create');
Route::post('/barbershops/search', [BarbershopController::class,'search'])->name('barbershop.search');
Route::get('/barbershops/{barbershop}', [BarbershopController::class,'show'])->name('barbershop.show');

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
|---------------------
| Rutas para citation-
|---------------------
*/
Route::get('/citations/{barber}/week', [CitationController::class,'getWeekByBarber'])->name('citations.getWeekByBarber');
Route::get('/citations/barbers/{barbershop}/list', [CitationController::class,'getBarbersToSelect'])->name('citations.getBarbersToSelect');
Route::get('/citations/{schedule}/hours', [CitationController::class,'getHoursByBarber'])->name('citations.getHoursByBarber');
Route::get('/citations/{barber}/{hour}/form', [CitationController::class,'form'])->name('citations.form');
Route::get('/citations/inbox', [CitationController::class,'inbox'])->name('citations.inbox');
Route::post('/citations/accept/{id}', [CitationController::class,'acceptCitation'])->name('acceptCitation');
Route::post('/citations/reject/{id}', [CitationController::class,'rejectCitation'])->name('rejectCitation');
Route::post('/citations/send', [CitationController::class,'sendCitationForm'])->name('sendCitations');
Route::get('/citations/get', [CitationController::class,'getCitation'])->name('ReceiveCitations');
Route::post('/citations/store', [CitationController::class,'store'])->name('citations.store');

/*
|--------------------------
| Rutas para los servicios-
|--------------------------
*/

Route::resource('/services', ServiceController::class);

/*
|--------------------------
| Rutas para los Horarios-
|--------------------------
*/
Route::resource('/schedule', ScheduleController::class);
/*
|------------------------
| Rutas para los barbers-
|------------------------
*/
Route::resource('/barbers', BarberController::class);
Route::get('/profile', [BarberController::class, 'profile'])->name('barbers.profile');
Route::get('/barberSchedule',[BarberController::class ,'schedule'] )->name('barbers.schedule');

/*
|-----------------
| Rutas públicas-
|-----------------
*/
Route::get('/', [PublicController::class,'index'])->name('welcome');
Route::get('/search', [PublicController::class,'goToSearch'])->name('search');

/*
|--------------------------------------------------------------------------
| Rutas para login, register y funcionalidades derivadas del paquete Auth-
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::post('/register/custom', [RegisterController::class, 'customRegister'])->name('auth.register');
