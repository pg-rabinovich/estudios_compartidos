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
    //👉 "Cargar el componente Home y pasarle usuarios como prop".
}
