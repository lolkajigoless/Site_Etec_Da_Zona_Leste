<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VestibulinhoController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\InicioController;




Route::get('/', [InicioController::class, 'inicio']);

Route::get('/vestibular', [VestibulinhoController::class, 'inicio']);

Route::get('/sobre', [SobreController::class, 'inicio']);

Route::get('/cursos', [CursosController::class, 'inicio']);



