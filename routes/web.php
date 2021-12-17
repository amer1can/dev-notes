<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/laravel', [App\Http\Controllers\LinksController::class, 'viewLaravel'])->name('laravel');
Route::get('/vue', [App\Http\Controllers\LinksController::class, 'viewVue'])->name('vue');

Route::resource('/notes', App\Http\Controllers\NoteController::class);

