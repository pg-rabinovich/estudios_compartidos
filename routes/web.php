<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



/* 
Route::get('/', function () {
    return Inertia::render('Home');
}); */

///podemos llamarlo de ambas formas...

Route::inertia('/', 'Home');

Route::inertia('/home', 'Home');
