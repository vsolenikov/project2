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

//Route::get('/idea/{id}/moderate','IdeaController@moderate')->middleware(['auth']);
//Route::get('/idea/{$id}/public/{$status}','IdeaController@UpdateStatus')->middleware(['auth']);
//Route::post('/idea/{$id}/public/{$status}','IdeaController@store');



Route::get('/ideas', 'IdeaController@UpdateStatus');
Route::post('/ideas/{id}','IdeaController@UpdateStatus');

Route::get('/ideas', 'IdeaController@index');
Route::post('/idea', 'IdeaController@store')->middleware(['auth']);
Route::delete('/idea/{idea}', 'IdeaController@destroy');


// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



