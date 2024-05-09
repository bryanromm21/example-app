<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('cargos', App\Http\Controllers\CargoController::class);
Route::resource('personal', App\Http\Controllers\PersonalController::class);