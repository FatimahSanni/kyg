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
    return view('pages.home');
});

Route::get('/officials/new', 'OfficialController@create');
Route::post('/officials', 'OfficialController@store');
Route::get('/officials', 'OfficialController@index');

Route::get('/officials/{official}', 'OfficialController@show');

Auth::routes();
