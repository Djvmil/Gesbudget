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

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('');
Route::get('/transaction', 'TransactionController@form');
Route::get('/historique', 'TransactionController@index');
Route::post('/create', 'TransactionController@create');
