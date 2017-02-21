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

Route::get('auth/twitter', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/twitter/callback', 'Auth\RegisterController@handleProviderCallback');


Auth::routes();

Route::get('/home', 'HomeController@index');


//Clients
Route::get('/clients/create','ClientsController@create');
Route::post('/clients','ClientsController@store');
Route::get('/clients/index', 'ClientsController@index');
Route::post('/clients/clientchoice','ClientsController@choice');



