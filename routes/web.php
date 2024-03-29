<?php

use App\Http\Controllers\SubscriptionController; // Importa el controlador SubscriptionController
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
use App\Http\Controllers\IncomeController;
use App\Mail\Test;
use App\Models\Barber;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SetLocaleController;

/*
|---------------------
| Rutas de barbershop-
|---------------------
*/

Route::get('/barbershops/create', [BarbershopController::class, 'create'])->name('barbershop.create');
Route::get('/barbershops/search', [BarbershopController::class, 'search'])->name('barbershop.search');
Route::resource('/barbershops', BarbershopController::class);
Route::get('/barbershopBarber/{userId}', [BarbershopController::class, 'getBarberUser']);
Route::put('/barbershopBarber/update/{userId}', [BarbershopController::class, 'updateBarberUser'])->name('barbershopBarber.update');
Route::get('barbershop/barber/services/{userId}', [BarbershopController::class, 'getServiceCards'])->name('barbershop.services');
Route::post('/actualizar-servicio', [BarbershopController::class, 'actualizarServicio'])->name('barbershop.actualizar-servicio');


/*
|-------------------------------
| Rutas para las redes Sociales-
|-------------------------------
*/
Route::resource('/socialmedia', SocialMediaController::class);
//Ruta para consulta de redes sociales
Route::post('/verify-Social', [SocialMediaController::class, 'verifySocial'])->name('verify-Social');
Route::post('/socialmedia/store/for_barbershop', [SocialMediaController::class, 'storeSocialMediaForBarbershop'])->name('socialmedia.storeForBarberhop');

/*
|---------------------
| Rutas para citation-
|---------------------
*/
Route::get('/citations/barbersSchedule/{barber}', [CitationController::class, 'getCitationCalendar'])->name('citations.schedule');
Route::post('/barber_citation_schedule', [CitationController::class, 'getBarberCitationSchedule']);
Route::post('/barber_citation_hours', [CitationController::class, 'getBarberCitationHours']);
Route::post('/barber_citation_client_name', [CitationController::class, 'getBarberCitationClientName']);
// Route::get('/citations/{barber}/week', [CitationController::class,'getWeekByBarber'])->name('citations.getWeekByBarber'); [reemplazado por calendar]
Route::get('/citations/barbers/{barbershop}/list', [CitationController::class, 'getBarbersToSelect'])->name('citations.getBarbersToSelect');
Route::get('/citations/{schedule}/hours', [CitationController::class, 'getHoursByBarber'])->name('citations.getHoursByBarber');
Route::get('/citations/{barber}/{hour}/form', [CitationController::class, 'form'])->name('citations.form');
Route::get('/citations/inbox', [CitationController::class, 'inbox'])->name('citations.inbox');
Route::post('/barber_citations_for_schedule', [CitationController::class, 'barberCitationsForSchedule'])->name('citations.citationInbox');
Route::post('/citations/accept/{id}', [CitationController::class, 'acceptCitation'])->name('acceptCitation');
Route::post('/citations/reject/{id}', [CitationController::class, 'rejectCitation'])->name('rejectCitation');
Route::post('/citations/send', [CitationController::class, 'sendCitationForm'])->name('sendCitations');
Route::get('/citations/get', [CitationController::class, 'getCitation'])->name('ReceiveCitations');
Route::post('/citations/store', [CitationController::class, 'store'])->name('citations.store');

/*
|--------------------------
| Rutas para los servicios-
|--------------------------
*/
Route::get('/loadServices', [ServiceController::class, 'getServices'])->name('obtain.services');
Route::post('/deleteServices/{id}', [ServiceController::class, 'deleteService'])->name('delete.service');

Route::get('/serviceList', [ServiceController::class, 'serviceList'])->name('show.service.list');
Route::post('/serviceStore', [ServiceController::class, 'store'])->name('servicesSave');
Route::get('/addServices', [ServiceController::class, 'index'])->name('servicesform');
Route::resource('/services', ServiceController::class);
Route::post('/eliminar-servicio', [ServiceController::class, 'adminServiceDelete'])->name('barbershop.eliminar.servicio');


/*
|------------------------
| Rutas para los barbers-
|------------------------
*/
Route::resource('/barbers', BarberController::class);
Route::get('/barbers/create/{userId?}', [BarberController::class, 'create'])->name('barbers.create');
Route::get('/profile/{userId}', [BarberController::class, 'profile'])->name('barbers.profile');
Route::get('/barberSchedule', [BarberController::class, 'schedule'])->name('barbers.schedule');
Route::delete('/barbers/{barber}', [BarberController::class, 'destroy'])->name('barbers.destroy');
Route::get('/barbers/{barber}', [BarberController::class, 'destroy'])->name('barbers.destroy');
Route::get('/createuser', [BarberController::class, 'createUser'])->name('barbers.createUser');
Route::post('/storeUser', [BarberController::class, 'storeUser'])->name('barbers.storeUser');
Route::post('/barbers/updateUser', [BarberController::class, 'updateUser'])->name('barbers.updateUser');
// Nueva ruta para consulta de barber
Route::post('/verify-barber', [BarberController::class, 'verifyBarber'])->name('verify-barber');
//Para saber si este barber pertenece a una barber y extraer sus datos
Route::get('/barbers/showForm/{userId}', [BarberController::class, 'showForm'])->name('barbers.showForm');

/*
|-----------------
| Rutas de idioma-
|-----------------
*/
Route::get('language/change', [LanguageController::class, 'change'])->name('language.change');
Route::get('language/change/{locale}', [SetLocaleController::class, 'setLocale'])->name('language.change');

/*
|-----------------
| Rutas públicas-
|-----------------
*/
Route::get('/', [PublicController::class, 'index'])->name('welcome');
Route::get('/2', [PublicController::class, 'index2'])->name('welcome2');
Route::get('/search', [PublicController::class, 'goToSearch'])->name('search');

/*
|--------------------------------------------------------------------------
| Rutas para login, register y funcionalidades derivadas del paquete Auth-
|--------------------------------------------------------------------------
*/
Route::get('/income', [IncomeController::class, 'index'])->name('income');
Route::post('/incomes/filter', [IncomeController::class, 'filter'])->name('income.filter');

/*
|--------------------------
| Rutas para los guardar Horarios
|--------------------------
*/
Route::resource('/schedule', ScheduleController::class);
// Ruta de consulta de horario
Route::post('/verify-schedule', [ScheduleController::class, 'verifySchedule'])->name('verify-schedule');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

/*
|------------------------------------------
| Rutas para actualizar algunos formularios
|--------------------------------------------
*/

Route::prefix('barbers')->group(function () {
    Route::post('/{id}', [BarberController::class, 'update'])->name('barbers.update');
});

Route::prefix('schedule')->group(function () {
    Route::post('/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
});

Route::prefix('socialmedia')->group(function () {
    Route::post('/{id}', [SocialMediaController::class, 'update'])->name('socialmedia.update');
});

/*
|--------------------------
| Ruta para stripe
|--------------------------
*/
Route::get('/subscription', [SubscriptionController::class, 'showSubscriptionForm'])->name('subscriptions.form');
Route::post('/subscription', [SubscriptionController::class, 'createSubscription'])->name('subscriptions.create');
// Route::get('/apertura_cuenta', [AperturaCuentaController::class, 'index'])->name('apertura_cuenta');
