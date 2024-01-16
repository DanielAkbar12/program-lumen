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

//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //category
    $router->get('/category', 'categoryController@index');
    $router->get('/category/{id}', 'categoryController@show');
    $router->post('/category', 'categoryController@store');
    $router->put('/category/{id}', 'categoryController@update');
    $router->delete('/category/{id}', 'categoryController@destroy');
    //menu
    $router->get('/menu', 'menuController@index');
    $router->get('/menu/{id}', 'menuController@show');
    $router->post('/menu', 'menuController@store');
    $router->put('/menu/{id}', 'menuController@update');
    $router->delete('/menu/{id}', 'menuController@destroy');
    //order_item
    $router->get('/order_item', 'order_itemController@index');
    $router->get('/order_item/{id}', 'order_itemController@show');
    $router->post('/order_item', 'order_itemController@store');
    $router->put('/order_item/{id}', 'order_itemController@update');
    $router->delete('/order_item/{id}', 'order_itemController@destroy');
    //orders
    $router->get('/orders', 'ordersController@index');
    $router->get('/orders/{id}', 'ordersController@show');
    $router->post('/orders', 'ordersController@store');
    $router->put('/orders/{id}', 'ordersController@update');
    $router->delete('/orders/{id}', 'ordersController@destroy');
    //owner
    $router->get('/owner', 'ownerController@index');
    $router->get('/owner/{id}', 'ownerController@show');
    $router->post('/owner', 'ownerController@store');
    $router->put('/owner/{id}', 'ownerController@update');
    $router->delete('/owner/{id}', 'ownerController@destroy');
    //restaurant
    $router->get('/restaurant', 'restaurantController@index');
    $router->get('/restaurant/{id}', 'restaurantController@show');
    $router->post('/restaurant', 'restaurantController@store');
    $router->put('/restaurant/{id}', 'restaurantController@update');
    $router->delete('/restaurant/{id}', 'restaurantController@destroy');


});