<?php

use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/locales', 'App\Http\Controllers\LocalController@show')->name('show_locales')->middleware(['auth']);
Route::get('/canchas/{id}', 'App\Http\Controllers\CanchaController@show')->name('show_canchas')->middleware(['auth']);
Route::get('/nuevo_local', 'App\Http\Controllers\LocalController@create')->name('crear_local')->middleware(['auth']);
Route::get('/nueva_cancha/{id}', 'App\Http\Controllers\CanchaController@create')->name('crear_cancha')->middleware(['auth']);
Route::get('/turnos/{id}', 'App\Http\Controllers\TurnoController@show')->name('administrar_turnos')->middleware(['auth']);
Route::get('/turnos_reservar/{turno_id}/{user_id}', 'App\Http\Controllers\TurnoController@reservar')->name('reservar_turno')->middleware(['auth']);
Route::get('/turnos_cancelar/{turno_id}', 'App\Http\Controllers\TurnoController@cancelar')->name('cancelar_turno')->middleware(['auth']);
Route::get('/nuevo_turno/{id}', 'App\Http\Controllers\TurnoController@create')->name('crear_turno')->middleware(['auth']);
Route::get('/turnos/cancha/{id}', 'App\Http\Controllers\TurnoController@showTurnosCancha')->name('show_turnos_cancha')->middleware(['auth']);
Route::post('store_cancha/{id}', 'App\Http\Controllers\CanchaController@storeCancha')->name('store_cancha')->middleware(['auth']);
Route::post('store_local', 'App\Http\Controllers\LocalController@store')->name('store_local')->middleware(['auth']);
Route::post('store_turno', 'App\Http\Controllers\TurnoController@store')->name('store_turno')->middleware(['auth']);
Route::delete('delete_cancha/{id}', 'App\Http\Controllers\CanchaController@destroy')->name('delete_cancha')->middleware(['auth']);
Route::delete('delete_local/{id}', 'App\Http\Controllers\LocalController@destroy')->name('delete_local')->middleware(['auth']);
Route::delete('delete_turno/{id}', 'App\Http\Controllers\TurnoController@destroy')->name('delete_turno')->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () { 
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuariosController::class);
});


require __DIR__.'/auth.php';
