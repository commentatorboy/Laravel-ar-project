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

Route::resource('ARObject', 'ARObjectController');

Route::get('/CV', function(){
    return view('CV');
});

Route::get('/eskimo', function(){
    return view('eskimo');
});

Route::get('/nomarker', function(){
    return view('nomarker');
});

Route::get('/nomediump', function(){
    return view('nomediump');
});

Route::get('/video', function(){
    return view('video');
});

/*
Route::get('/ARObject', 'ARObjectController@index');
Route::get('/ARObject/create', 'ARObjectController@create');
Route::get('/ARObject/{id}', 'ARObjectController@show');
Route::get('/ARObject/{id}/edit', 'ARObjectController@edit');

Route::post('/ARObject', 'ARObjectController@store');

Route::patch('/ARObject/{id}', 'ARObjectController@update');

Route::delete('/ARObject/{id}', 'ARObjectController@destroy');

*/

