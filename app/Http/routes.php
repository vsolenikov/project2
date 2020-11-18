<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/ideas'.'IdeaController@welcome');
Route::post('/idea'.'IdeaController@store1');
Route::get('/ideas', 'IdeaController@index');
Route::post('/idea', 'IdeaController@store');
//Route::update('/idea/{idea}', 'IdeaController@update');
Route::delete('/idea/{idea}', 'IdeaController@destroy');
Route::post('idea/{idea}', 'IdeaController@update');

// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



