<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    //Solo se usa el invoke cuando el controlador tenga un solo metodo
    public function __invoke()
    {
        return '<h1>Hola usuario sea bienvenido</h1>';
    }
}
