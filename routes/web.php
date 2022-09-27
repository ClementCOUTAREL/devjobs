<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ApplicationController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', [Dashboard::class, 'index'])->middleware(['auth'])->name('dashboard');


// Applications
Route::get('/application/{offer}/create',[ApplicationController::class, 'index'])->name('application.create');
Route::get('/application/profile',[ApplicationController::class, 'show'])->name('application.show');

// Offer
Route::get('/offer/create',[OfferController::class, 'index'])->name('offer.create');
Route::delete('/offer/{offer}/delete',[OfferController::class, 'destroy'])->name('offer.destroy');
Route::get('/offer/{offer}',[OfferController::class, 'show'])->name('offer.show');

require __DIR__.'/auth.php';