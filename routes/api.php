<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RecintoController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\Cuidador_AnimalController;
use App\Http\Controllers\ActividadController;

Route::resource('/Animal', AnimalController::class);
Route::resource('/Especie', EspecieController::class);
Route::resource('/Recinto', RecintoController::class);
Route::resource('/Cuidador', CuidadorController::class);
Route::resource('/Cuidador_Animal', Cuidador_AnimalController::class);
Route::resource('/Actividad', ActividadController::class);
