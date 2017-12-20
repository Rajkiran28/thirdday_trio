<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/contact/show/{contact}','ContactsController@show');

Route::get('/contact/index','ContactsController@index');

Route::get('/contact/create','ContactsController@create');

Route::post('/contact','ContactsController@store');