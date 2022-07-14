<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/locales', 'App\Http\Controllers\LocalController@show')->name('show_locales')->middleware(['auth']);
Route::get('/canchas/{id}', 'App\Http\Controllers\CanchaController@show')->name('show_canchas')->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
