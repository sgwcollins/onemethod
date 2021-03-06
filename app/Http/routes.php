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

// Default route display registration form
Route::get('/', 'Auth\AuthController@getRegister');

//Validates and enteries users information into database
Route::post('auth/register', 'Auth\AuthController@postRegister');
