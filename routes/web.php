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
Route::get('/students','StudentController@index');
Route::get('/insert-data','StudentController@create');
Route::post('/add','StudentController@store');
Route::get('/delete-data/{id}','StudentController@destroy');
Route::get('/edit-data/{id}','StudentController@edit');
Route::put('/update/{id}','StudentController@update');
