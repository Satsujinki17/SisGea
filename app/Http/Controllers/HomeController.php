<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return '<h1>Hola usuario sea bienvenido</h1>';
    }
}
