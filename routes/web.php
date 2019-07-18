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

Route::get('/blogs', 'BlogsController@index')->name('blogs.index');
Route::get('/blogs/create', 'BlogsController@create')->name('blogs.create');
Route::post('/blogs', 'BlogsController@store')->name('blogs.store');
Route::get('/blogs/show/{id}', 'BlogsController@show')->name('blogs.show');
Route::get('/blogs/{id}/edit', 'BlogsController@edit')->name('blogs.edit');
Route::patch('/blogs/{id}/update', 'BlogsController@update')->name('blogs.update');
Route::delete('/blogs/{id}', 'BlogsController@destroy')->name('blogs.destroy');

Route::get('/blogs/{id}/addcomment', 'BlogsController@addComment')->name('blogs.add_comment');
Route::post('/blogs/addcomment', 'BlogsController@storeComment')->name('blogs.store_comment');