<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'welcome');

Route::view('/404', 'error.404-error')->name('404');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/master/users', [App\Http\Controllers\UserController::class, 'index'])->name('master.users');
Route::get('/master/permissions', [App\Http\Controllers\UserController::class, 'permissions'])->name('master.permissions');
Route::get('/master/roles', [App\Http\Controllers\UserController::class, 'role'])->name('master.roles');
Route::get('/master/logs', [App\Http\Controllers\UserController::class, 'logs'])->name('master.logs');
