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

Route::get('/aankoopCodex' , 'AankoopController@getAankoop');

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/lijst', 'HomeController@getLijst');
Route::get('/aankoop', 'HomeController@getAankoop');
Route::get('/bevestig', 'HomeController@getBevestig');
Route::get('/lidToevoegen', 'HomeController@getLidToevoegen');
Route::get('/ledenlijst', 'HomeController@getledenlijst');

Route::post('/aankoop', 'HomeController@handleAankoop');
Route::post('/lidToevoegen', 'HomeController@handleLidToevoegen');
