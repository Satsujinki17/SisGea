<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');  
});


Route::get('/users', [HomeController::class, 'index']);



//Rutas con parametros. Su funcion es crear una unica ruta quie permita acceder a diferentes contenidos variables
Route::get('/users/{id}', function ($id) {
    return "Aqui se muestra el id {$id}";
});


//Rutas con varios parametros
Route::get('/users/{id}/{page}', function ($id, $page) {
    return "Aqui se muestra el id {$id} y el perfil del usuario {$page}";
});


//Rutas con parametros opcionales
Route::get('/users/{id}/{page?}', function ($id, $page = null) {
    if ($page) {
        return "Aqui se muestra el id {$id} y el perfil del usuario {$page}";
    }
});


//El oden de las URL importa ya que las rutas se muestran en cascada
Route::get('/users/hola', function ($id, $page = null) {

    return "Aqui se muestra el id {$id} y el perfil del usuario {$page}";
});



/*

Get
Post
Put
Patch
Delete

Ruta::Peticion('URl', funcion() {
   manejo  de peticiones
})


Se jhace una peticion a la aplicacion, est llega hasta esta ruta aqui
comprueba que ruta coincide con que url y dependiendo de eso retorna esa vista

*/
