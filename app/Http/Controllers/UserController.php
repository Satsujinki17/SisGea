<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function WelcomeUser()
    {
        return '<h1>Hola Usuario</h1>';
    }
}
