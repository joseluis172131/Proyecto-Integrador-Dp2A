<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadoraController;

Route::resources([
    'computadora'   => ComputadoraController::class
]);

Route::get('computadoras/datatable', [ComputadoraController::class, 'datatable']);




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
