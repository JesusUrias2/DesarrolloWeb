<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/saludo/{nombre}', function ($nombre) {
    echo "asdf, "." ".$nombre;
});

$router->get('/edad/{edad}', function ($edad) {
    if($edad > 0 && $edad < 18){
        echo "No se puede";
    } else if($edad >= 18 && $edad <= 100){
        echo "Si se puede";
    } else{
        echo "asu";
    } 
});

$router->POST('/saludo', function () {
    echo "urias";
});

$router->PUT('/saludo', function () {
    echo "jesus";
});

$router->DELETE('/saludo', function () {
    echo "JESUS";
});
