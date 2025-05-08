<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\estudios_compartidosController;
use App\Http\Controllers\PostController;


///INERTIA. Podemos llamar las rutas de varias formas...:-----------------

/* Route::inertia('/', 'Base'); */ //Esta es una llamada simple a un componente
/* Route::inertia('/home', 'Home'); */ //Las usamos si solo queremos ir a componentes sin traer info de la base.


//LISTAR USUARIOS:-----------------------------------------

/* Route::get('/', [estudios_compartidosController::class, 'listarUsuarios']); */

Route::get('/listarUsuarios', [estudios_compartidosController::class, 'listarUsuarios']);

//ejemplo pero con api rest
Route::get('/listarUsuariosApi', [estudios_compartidosController::class, 'listarUsuariosApi']);

// Para TypeScript
Route::get('/usuarios-type', [estudios_compartidosController::class, 'listarUsuarios']);


///POSTS:---------------------------------------------------
Route::get('/', [PostController::class, 'index']);
Route::resource('posts', PostController::class)->except('index'); //aca probamos el resource (curso)


//PALABRAS:--------------------------------------------------
Route::get('/palabras', function () {
    return inertia('Estudio/Palabras'); //el nombre de la carpeta/el nombre del comp.
}); 


//Algunos 'chiches' que tiene inertia:--------------------------------

/* Route::get('/', function () {
    sleep(2);
    return Inertia::render('Base');
}); */

//sleep (2) es una funcion inertia para que cuando algun proceso de back se este dando se le pueda
//colocar como un landing page, como un loading, un tiempo de espera para cargar...lo hace mediamte una linea
//se coloca aca y se le peude dar color con progress (en app.sjx)