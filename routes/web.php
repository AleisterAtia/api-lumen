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

$router->get('/', function () use ($router) {
    return response()->json(['message' => 'Hello API Ready!']);
});

$router->get('/hello', function () use ($router) {
    return response()->json(['message' => 'Hello World']);
});

$router->get('/users', 'UserController@index');

$router->group(['prefix' => 'api/dosen'], function () use ($router) {
    $router->get('/', 'DosenController@index');         // Get all
    $router->get('{no}', 'DosenController@show');       // Get by ID
    $router->post('/', 'DosenController@store');        // Create
    $router->put('{no}', 'DosenController@update');     // Update
    $router->delete('{no}', 'DosenController@destroy'); // Delete
});

$router->group(['prefix' => 'api/rs'], function () use ($router) {
    $router->get('/', 'RumahSakitController@index');         // Get all
    $router->get('{id}', 'RumahSakitController@show');       // Get by ID
    $router->post('/', 'RumahSakitController@store');        // Create
    $router->put('{id}', 'RumahSakitController@update');     // Update
    $router->delete('{id}', 'RumahSakitController@destroy'); // Delete
});
