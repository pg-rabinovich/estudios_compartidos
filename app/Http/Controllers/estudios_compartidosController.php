<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Usuarios;



class estudios_compartidosController extends Controller
{
    public function listarUsuarios()
    {
        $usuarios = Usuarios::all();
        // Renderiza el componente Home y pasa los datos de los usuarios
        return Inertia::render('Home', ['usuarios' => $usuarios]);
    }

    //Aquí, Inertia::render('Home', ['usuarios' => $usuarios]) le dice a Laravel:
    // "Cargar el componente Home y pasarle usuarios como prop".



    //Ejemplo con api rest:-----------------------------

    public function listarUsuariosApi()
    {
        $usuarios = Usuarios::all();
        return response()->json($usuarios); //requiere rsta json.
    }


    //Ejemplo con un componente 'type' hcho con typesScript:---------
    public function listarUsuariosType()
    {
        // Obtener los usuarios desde la base de datos
        $usuarios = Usuarios::all();

        // Pasar los usuarios al componente React 'Type' usando Inertia
        return Inertia::render('Type', ['usuarios' => $usuarios]);
    }
}
