<?php

Route::get('/artigos', 'ArtigosController@index');
Route::get('/artigos/create', 'ArtigosController@create')
    ->middleware('auth');
Route::get('/artigos/{id}', 'ArtigosController@show');
Route::post('/artigos', 'ArtigosController@store')
    ->middleware('auth');
Route::post('/artigos/{artigo}/comentar', 
    'ArtigosController@storeComentario')
    ->middleware('auth');

Auth::routes();
Route::get('/', 'ArtigosController@index');