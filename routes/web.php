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

$router->get('/saludo', function () {
    echo "Uruas";
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
