<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\estudios_compartidosController;
use App\Http\Controllers\PostController;


///podemos llamarlo de varias formas...

/* Route::inertia('/', 'Base'); */

/* Route::inertia('/home', 'Home'); */ //estas las usamos si solo queremos ir a componentes sin traer info de la base.

/* Route::get('/', function () {
    sleep(2);
    return Inertia::render('Base');
}); */

Route::get('/', [PostController::class, 'index']);
Route::resource('posts', PostController::class)->except('index'); //aca probamos el resource (curso)



/* Route::get('/', [estudios_compartidosController::class, 'listarUsuarios']); */
Route::get('/listarUsuarios', [estudios_compartidosController::class, 'listarUsuarios']);



Route::get('/paroles', function () {
    return inertia('Estudio/Paroles'); //el nombre de la carpeta/el nombre del comp.
});


//sleep (2) es una funcion inertia para que cuando algun porceso de back se este dando se le pueda
//colocar como un landing page, como un loading, un tiempo de espera para carcar...lo hace mediamte una linea
//se coloca aca y se le peude dar color con progress (en app.sjx)