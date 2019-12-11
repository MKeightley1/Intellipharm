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
$router->get('/record', 'RecordController@create');
$router->get('/index', 'RecordController@index');
$router->get('/show', 'RecordController@show');

/*
$router->group(['prefix'=>'api/v1'], function() use($router){
$router->get('/records', 'ProductController@index');
$router->post('/records', 'RecordController@create');
});


$router->group(['prefix'=>'api/v1'], function() use($router){
$router->get('/record', 'RecordController@index');
//$router->post('/record', 'RecordController@create');

});
*/