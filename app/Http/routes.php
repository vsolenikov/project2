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


Route::get('/', 'IdeaController@index2');
Route::post('//idea', 'IdeaController@welcome');

Route::get('/ideas', 'IdeaController@index');
Route::post('/idea', 'IdeaController@store');
Route::delete('/idea/{idea}', 'IdeaController@destroy');
Route::post('/idea/{id}/update_status','IdeaController@Update')/*->middleware(['auth'])*/;

// �������� ��������������...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// �������� �����������...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



