<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\estudios_compartidosController;


/* 
Route::get('/', function () {
    return Inertia::render('Base');
}); */

///podemos llamarlo de ambas formas...

Route::inertia('/', 'Base');
/* Route::inertia('/home', 'Home'); */ //estas las usamos si solo queremos ir a componentes sin traer info de la base.


/* Route::get('/', [estudios_compartidosController::class, 'listarUsuarios']); */
Route::get('/listarUsuarios', [estudios_compartidosController::class, 'listarUsuarios']);
