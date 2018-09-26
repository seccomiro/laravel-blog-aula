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
    // $pagina = "<h1>Olá Mundo Laravel!</h1>";
    // $pagina .= "<h2>Sei Lá!</h2>";
    // return $pagina;

    return view('template');
});

// Route::get('/artigos', function (){
//     // return '<h1>Artigos do Blog</h1>';

//     return view('artigos');
// });

// Route::get('/artigos/laravel', function (){
//     // $pagina = '<h1>Artigos do Blog</h1>';
//     // $pagina .= '<h2>Categoria: Laravel</h2>';
//     // return $pagina;

//     return view('artigos_laravel');
// });


Route::get('/artigos', 'ArtigosController@index');
Route::get('/artigos/laravel', 'ArtigosController@laravel');