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
    return view('home');
});

$router->get('/nossa-atuacao', function () use ($router) {
    return view('nossa-atuacao');
});

$router->get('/entidades-parceiras', function () use ($router) {
    return view('entidades-parceiras');
});

$router->get('/participe-do-fan', function () use ($router) {
    return view('participe-do-fan');
});

$router->get('/quem-somos', function () use ($router) {
    return view('quem-somos');
});

$router->get('/contato', function () use ($router) {
    return view('contato');
});
