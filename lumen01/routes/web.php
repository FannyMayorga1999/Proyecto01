<?php

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
    $mundo = 'Hola mundo ';
    return json_encode($mundo);
});

/*$router->get('/', function () use ($router) {
    $a = 5;
    $b = 5;
    return $a + $b;
});*/

