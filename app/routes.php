<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller("user","UsuariosController");
Route::controller("pet","MascotaController");
Route::controller("calendar","CalendarioController");
Route::controller("mensaje","MensajesController");
Route::controller("buscador","BuscadorController");
Route::controller("favorito","FavoritosController");
Route::controller("beneficios","BeneficiosController");

App::missing(function($exception)
{
    return Response::view('non-found', array(), 404);
});

Route::get('/', function()
{
    session_start();

    if(isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
        $user = new UsuariosModel();
        $uuid = $user->mUserByEmail($_SESSION["email"]);

        if(empty($uuid)){
            unset($_SESSION["email"]);
            return View::make('home');
        }else{
            $uuid = $uuid[0]["uuid"];
            return Redirect::to("/pet/lista-mascotas/".$uuid);
        }
    }else {
        return View::make('home');
    }
});