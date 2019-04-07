<?php

// use App\Http\Controllers\MVesselController;

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
    return response()->json([
        'success' => 'true', 
        'message' => 'Welcome to API Dummy ILCS'
    ]);
});

$router->get('/m-vessels', 'MVesselController@index');
$router->post('/m-vessels', 'MVesselController@store');
$router->get('/m-vessels/terminals', 'MVesselController@indexTerminal');
$router->get('/m-vessels/terminals/{terminal}', 'MVesselController@indexByTerminal');
$router->Get('/name', 'MVesselController@indexName');
