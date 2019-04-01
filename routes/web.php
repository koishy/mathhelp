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
    return redirect('/articles');
});

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store')->middleware('auth');
Route::get('/articles/create', 'ArticlesController@create')->middleware('auth');
Route::get('/articles/{id}', 'ArticlesController@article');
Route::patch('/articles/{id}', 'ArticlesController@update')->middleware('auth');
Route::get('/articles/{id}/edit', 'ArticlesController@edit')->middleware('auth');
Route::delete('/articles/{id}', 'ArticlesController@delete')->middleware('auth');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
