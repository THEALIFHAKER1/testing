<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;




Route::view('/example', 'pages.example')
    ->middleware(['auth', 'verified'])
    ->name('example');

Route::view('/', 'pages.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/manage-location', 'pages.manage-location')
    ->middleware(['auth', 'verified'])
    ->name('manage-location');

Route::view('/user-roles', 'pages.manages-user.user-roles')
    ->middleware(['auth', 'verified'])
    ->name('user-roles');

Route::view('/list-of-users', 'pages.manages-user.list-of-users')
    ->middleware(['auth', 'verified'])
    ->name('list-of-users');

Route::view('/manage-workflow', 'pages.manage-workflow')
    ->middleware(['auth', 'verified'])
    ->name('manage-workflow');

Route::view('/customize-report', 'pages.customize-report')
    ->middleware(['auth', 'verified'])
    ->name('manage-workflow');

Route::view('/manage-orders', 'pages.manage-orders.manage-orders')
    ->middleware(['auth', 'verified'])
    ->name('manage-orders');

Route::view('/manage-pre-orders', 'pages.manage-orders.manage-pre-orders')
    ->middleware(['auth', 'verified'])
    ->name('manage-pre-orders');

Route::view('/manage-budget-request', 'pages.manage-orders.manage-budget-request')
    ->middleware(['auth', 'verified'])
    ->name('manage-budget-request');

Route::view('/manage-cart-id', 'pages.manage-orders.manage-cart-id')
    ->middleware(['auth', 'verified'])
    ->name('manage-cart-id');

Route::view('/news', 'pages.news')
    ->middleware(['auth', 'verified'])
    ->name('news');

Route::view('/chat', 'pages.chat')
    ->middleware(['auth', 'verified'])
    ->name('chat');

Route::view('/manage-budget', 'pages.manage-budget.manage-budget')
    ->middleware(['auth', 'verified'])
    ->name('manage-budget');

Route::view('/manage-gl-code', 'pages.manage-budget.manage-gl-code')
    ->middleware(['auth', 'verified'])
    ->name('manage-gl-code');

Route::view('/users-to-except', 'pages.manage-unit-limit-exception.users-to-except')
    ->middleware(['auth', 'verified'])
    ->name('users-to-except');

Route::view('/logs-transaction', 'pages.manage-unit-limit-exception.logs-transaction')
    ->middleware(['auth', 'verified'])
    ->name('logs-transaction');

Route::view('profile', 'pages.profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
