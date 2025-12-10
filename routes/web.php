<?php

use App\Http\Controllers\LandingController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/gl');

Route::prefix('{locale}')
    ->whereIn('locale', config('locales.available', ['es']))
    ->middleware([SetLocale::class])
    ->group(function () {
        Route::get('/', [LandingController::class, 'index'])->name('landing');
        Route::get('/taxistas', [LandingController::class, 'taxistas'])->name('taxistas');
        Route::post('/reserva', [LandingController::class, 'store'])->name('reserva.store');
        Route::get('/politica-privacidad', [LandingController::class, 'privacyPolicy'])->name('privacy');
        Route::get('/aviso-legal', [LandingController::class, 'legalNotice'])->name('legal');
        Route::get('/politica-cookies', [LandingController::class, 'cookiePolicy'])->name('cookies');
    });
