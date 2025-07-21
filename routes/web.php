<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('home', [ProfileController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('home.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('home', ProfileController::class)
    ->only(['show'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
