<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* sleep(2); */
        /*  $posts = Post::all(); */ //creamos una $posts conectada con el modelo post , que traera toda la data.
        $posts = Post::latest()->paginate(5);/* get(); get los trae todos*/ //antes traiamos todos pero con el metodo latests llamamos primero a los ultimos post hechos y con paginate traemos 5
        return inertia('Base', ['posts' => $posts]); //en el metodo de inertia, en el segudno argumento le enviamos el 'posts' como prop a nuestro componente,
    }

    //metodo 'paginate' si lo insspeccionamos vemos: 'data' 'link' (por eso luego en 'base' lo llamamos asi al traerlo)

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
