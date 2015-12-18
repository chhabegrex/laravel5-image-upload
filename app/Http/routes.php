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

// Home
Route::get('/', [
	'uses' => 'PageController@frontPage', 
	'as' => 'home'
]);

// Upload image
Route::post('image', 'PageController@postImage');


// Admin page - list images
Route::get('admin', [
	'uses' => 'PageController@adminPage', 
	'as' => 'admin'
]);