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


Route::get('/','FrontController@getIndex');
Route::get('/connect','FrontController@getConnect');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function(){

	Route::get('/edit/all',     		'BackController@editAll');
	Route::get('/edit/main',    		'BackController@editMain');
	Route::get('/edit/connect', 		'BackController@editConnect');
	Route::get('/edit/about',   		'BackController@editAbout');

	Route::get('/edit/rollback',		'BackController@editRollback');
	Route::get('/edit/comment/{id}',	'BackController@editRollbackItem');

	Route::get('/edit/tarif',			'BackController@editTarif');
	Route::get('/edit/tarif/{id}',		'BackController@editTarifItem');
});