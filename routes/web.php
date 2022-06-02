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

$router->get('index/{id}',function ($id) {
	return 'hello word'.$id;
});

$router->get('export','ExportController@index');
$router->get('test','TestController@index');
$router->get('jobs','TestJobController@index');
$router->get('login','LoginController@login');
$router->get('route','RouteController@index');
$router->get('getToken','TestTokenController@index');
$router->get('parse','TestTokenController@parseToken');

