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
    return $router->app->version();
});
// unsecure routes 
$router->get('/login', 'PageControl@login');
$router->get('getLogUser','PageControl@getLogUser');
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users',['uses' => 'UserController@getUsers']);
    $router->get('/users/{id}', 'UserController@getUser');
});

$router->post('/users/add','UserController@addUsers');
$router->put('/users/update/{id}','UserController@updateUsers');
$router->delete('/users/delete/{id}','UserController@deleteUsers');
