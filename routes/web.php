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

Route::get('/', 'KelasController@index');
Route::get('kelas/add', 'KelasController@create');
Route::post('kelas/add', 'KelasController@store');

Route::get('kelas/{id}/edit', 'KelasController@edit');
Route::patch('kelas/{id}/edit', 'KelasController@update');
Route::delete('kelas/{id}/delete', 'kelasController@destroy');

Route::get('siswa', 'SiswaController@index');