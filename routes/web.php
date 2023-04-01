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

$router->get('user_order', 'UserOrderController@showAll');
$router->post('add_order', 'UserOrderController@addOrder');
$router->get('user_order/{id}', 'UserOrderController@getId');
$router->delete('user_order/{id}/delete', 'UserOrderController@delete');
$router->post('user_order/{id}/edit', 'UserOrderController@edit');

$router->get('pc', 'PcController@showAll');
$router->post('add_pc', 'PcController@addPc');
$router->get('pc/{id}', 'PcController@getId');
$router->delete('pc/{id}/delete', 'PcController@delete');
$router->post('pc/{id}/edit', 'PcController@edit');

$router->get('user', 'RealUserController@showAll');
$router->post('add_user', 'RealUserController@addUser');
$router->get('user/{id}', 'RealUserController@getId');
$router->delete('user/{id}/delete', 'RealUserController@delete');
$router->post('user/{id}/edit', 'RealUserController@edit');
