<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/laravel', [App\Http\Controllers\LinksController::class, 'viewLaravel'])->name('laravel');
Route::get('/vue', [App\Http\Controllers\LinksController::class, 'viewVue'])->name('vue');

