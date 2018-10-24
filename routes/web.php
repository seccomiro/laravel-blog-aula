<?php

Route::get('/artigos', 'ArtigosController@index')
    ->name('artigos.index');
Route::get('/artigos/novo', 'ArtigosController@create')
    ->middleware('auth')
    ->name('artigos.create');
Route::get('/artigos/{artigo}', 'ArtigosController@show')
    ->name('artigos.show');
Route::post('/artigos', 'ArtigosController@store')
    ->middleware('auth')
    ->name('artigos.store');
Route::get('/artigos/{artigo}/edit', 'ArtigosController@edit')
    ->middleware('auth')
    ->name('artigos.edit');
Route::put('/artigos/{artigo}', 'ArtigosController@update')
    ->middleware('auth')
    ->name('artigos.update');
Route::delete('/artigos/{artigo}', 'ArtigosController@destroy')
    ->middleware('auth')
    ->name('artigos.destroy');

Route::post('/artigos/{artigo}/comentarios', 
    'ComentariosController@store')
    ->middleware('auth')
    ->name('comentarios.store');

Auth::routes();
Route::get('/', 'ArtigosController@index')
    ->name('home');