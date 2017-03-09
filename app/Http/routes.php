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
Route::get('/public', function () {
    return ('Nama saya : Adechrisvitandy');
});
Route::get('hello-word', function () {
    return ('Hello word');
});
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return ("Hello word dari pengguna $pengguna");
});

Route::auth();

Route::get('/home', 'HomeController@index');
