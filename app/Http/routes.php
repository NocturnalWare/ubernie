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

Route::get('/', ['as' => 'home', 'uses' => function () {
    return view('welcome');
}]);

Route::get('/home', function () {
    return view('welcome');
});

Route::get('auth/login', array('as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin'));
Route::post('auth/login', array('as' => 'auth.login', 'uses' => 'Auth\AuthController@postLogin'));


// Registration routes...
Route::get('auth/register', array('as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister'));
Route::post('auth/register', array('as' => 'auth.register', 'uses' => 'Auth\AuthController@postRegister'));

Route::group(['middleware' => 'auth'], function () {


	});