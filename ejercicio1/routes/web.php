<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/recurso1', function () {
   // return "hola jefferson" ;
//});

Route::get('/products','ProductsController@getProducts');
Route::post('/categories/crear', 'CategoriesController@postCategories');

