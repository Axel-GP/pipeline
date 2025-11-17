<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rutas públicas para la landing page de TAXIXI.
|
*/

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/taxistas', [LandingController::class, 'taxistas'])->name('taxistas');
Route::post('/reserva', [LandingController::class, 'store'])->name('reserva.store');
