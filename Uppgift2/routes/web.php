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

/*$app->get hämtar allt
/$app->get {id} hämtar med specifikt id
/$app->post skapar ny produkt
*/
$app->get('/', 'ProductsController@index');
$app->get('/products', 'ProductsController@index');
$app->get('/products/{id}', 'ProductsController@show');
$app->post('/products', 'ProductsController@create');

$app->get('/stores', 'StoresController@index');

$app->get('/reviews', 'ReviewsController@index');
