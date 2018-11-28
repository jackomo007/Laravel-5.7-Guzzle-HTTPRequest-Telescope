<?php

Route::get('/', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
