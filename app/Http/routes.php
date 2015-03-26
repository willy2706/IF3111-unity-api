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
use App\User;
Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

Route::post('submit', function() {
	$v = Request::all();
	$user = new User;
	$user->fill($v);
	$user->save();
	return response($user);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);