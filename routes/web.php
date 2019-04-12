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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('home/clients', 'ClientsController@all');
Route::get('home/client/new', 'ClientsController@new');
Route::get('home/client/{clientId}', 'ClientsController@show');
Route::post('home/client/create', 'ClientsController@create');
Route::get('home/client/{clientId}/delete', 'ClientsController@destroy');
