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

$router->group(['prefix' => 'api'], function () use ($router) {
$router->get('/users',['uses' => 'UserController@getUsers']);

});


$router->post('/cusers', 'StudentController@addstud'); //insert new record

$router->delete('/dusers/{id}', 'StudentController@deletestudid'); // delete student record by studid

$router->put('/uusers/{id}', 'StudentController@updatestudid'); // update student record by studid

$router->get('/gusers/{id}', 'StudentController@getstudid'); // search student by studid

$router->get('/gusers', 'StudentController@getallstud'); // view all student records