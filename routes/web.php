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
//Content
Route::get('master/information', [App\Http\Controllers\ContentController::class, 'information'])->name('content.information');
Route::get('content/hero-banners', [App\Http\Controllers\ContentController::class, 'heroBanners'])->name('content.hero-banners');
Route::get('content/hero-shortcuts', [App\Http\Controllers\ContentController::class, 'heroShortcuts'])->name('content.hero-shortcuts');
Route::get('content/pages', [App\Http\Controllers\ContentController::class, 'pages'])->name('content.pages');
Route::get('content/services', [App\Http\Controllers\ContentController::class, 'services'])->name('content.services');
Route::get('content/promotions', [App\Http\Controllers\ContentController::class, 'promotions'])->name('content.promotions');

Route::get('master/languages', [App\Http\Controllers\MasterController::class, 'languages'])->name('master.languages');
Route::get('master/header', [App\Http\Controllers\MasterController::class, 'header'])->name('master.header');
Route::get('master/menu', [App\Http\Controllers\MasterController::class, 'menu'])->name('master.menu');
//Master User
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/master/users', [App\Http\Controllers\UserController::class, 'index'])->name('master.users');
Route::get('/master/permissions', [App\Http\Controllers\UserController::class, 'permissions'])->name('master.permissions');
Route::get('/master/roles', [App\Http\Controllers\UserController::class, 'role'])->name('master.roles');
Route::get('/master/logs', [App\Http\Controllers\UserController::class, 'logs'])->name('master.logs');
