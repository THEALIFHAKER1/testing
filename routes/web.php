<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;




Route::view('/example', 'pages.example')
    ->middleware(['auth', 'verified'])
    ->name('example');

Route::view('/', 'pages.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'pages.profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
