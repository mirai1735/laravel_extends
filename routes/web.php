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

Route::get('/', 'HomeController@top');

Route::get('/posts/index', 'PostsController@index');
Route::get('/posts/new', 'PostsController@new');
Route::post('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show');
Route::get('/posts/{id}/edit', 'PostsController@edit');
Route::post('/posts/{id}/update', 'PostsController@update');
Route::delete('/posts/{id}/delete', 'PostsController@destroy');