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

// V2 amb Controllers

Route::get( "/", "HomeController@getIndex" );


Route::get('/catalog', 'CatalogController@getindex');

Route::get('/catalog/show/{id}', 'CatalogController@getShow');

Route::get('/catalog/create', 'CatalogController@getCreate');

Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');


Auth::routes();

Route::get('/home', 'CatalogController@getIndex')->name('catalog');
