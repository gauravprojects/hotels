<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array(
	'as' => 'hotels.room',
		'uses'=>'hotelsController@index'
));

Route::post('/results',array(
	'as' => 'hotels.search',
		'uses' => 'hotelsController@search'
));


