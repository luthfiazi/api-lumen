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

// Generate Application Key
$router->get('/key', function () {
    return Str_random(32);
});

$router->get('/test', function(){
    return 'Halo Dunia, get Method!';
});

$router->post('/posting', function(){
    return 'Halo, Post Method!';
});

$router->put('/put', function(){
    return 'Halo, put Method!';
});

$router->patch('/patch', function(){
    return 'Halo, patch Method!';
});

$router->delete('/delete', function(){
    return 'Halo, delete Method!';
});

$router->options('/options', function(){
    return 'Halo, options Method!';
});

$router->get('/user/{id}', function ($id){
    return 'User id = '.$id;
});

$router->get('post/{postId}/comments/{commentId}', function($postId,$commentId) {
    return 'Post ID = '.$postId.'Comment ID = '.$commentId;
});

// Optional Route parameter
$router->get('optional[/{param}]', function ($param = null){
    return $param;
});
