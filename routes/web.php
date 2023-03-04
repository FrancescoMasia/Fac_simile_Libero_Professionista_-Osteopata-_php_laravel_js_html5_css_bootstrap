<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiziController;

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
// Rotte Public
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/about_us', [PublicController::class, 'chi_siamo'])->name('about_us');
Route::get('/contattaci', [PublicController::class, 'contact_us'])->name('contattaci');
Route::post('/contattaci/submit',[PublicController::class, 'contact_us_submit'])->name('contact_us_submit');

// Rotte Servizi
Route::get('/servizi', [ServiziController::class, 'servizi'])->name('servizi');
Route::get('/servizi/dettaglio/{id}', [ServiziController::class, 'dettaglio_servizi'])->name('dettaglio_servizi');