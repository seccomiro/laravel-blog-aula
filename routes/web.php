<?php

Route::get('/artigos', 'ArtigosController@index');
Route::get('/artigos/{id}', 'ArtigosController@show');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
