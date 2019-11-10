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

Route::prefix('book')->group(function() {
    Route::get('/', 'BookController@index');
    Route::get('/create', 'BookController@create');
    Route::post('/create', 'BookController@store');
    Route::get('/{id}', 'BookController@show');
    Route::get('/edit/{id}', 'BookController@edit');
    Route::post('/update', 'BookController@update');
    Route::post('/destroy', 'BookController@destroy');
});

