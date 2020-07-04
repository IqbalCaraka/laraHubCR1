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
    return view('layout.app');
});

/*Route::get('pertanyaan', function () {
    return view('pertanyaan.index');
});*/

Route::get('pertanyaan', 'PertanyaanController@index');
Route::get('pertanyaan/create', 'PertanyaanController@create');
Route::post('pertanyaan', 'PertanyaanController@store');
Route::delete('pertanyaan/{id}', 'PertanyaanController@destroy');
Route::get('pertanyaan/{id}', 'PertanyaanController@edit');
Route::put('pertanyaan/{id}', 'PertanyaanController@update')->name('pertanyaan.update');

Route::get('jawaban/{id}', 'JawabanController@index');
Route::post('jawaban/{id}', 'JawabanController@store')->name('jawaban.post');
Route::delete('jawaban/{id}', 'JawabanController@destroy');
Route::get('jawaban/{id}/edit', 'JawabanController@edit');
Route::put('jawaban/{id}', 'JawabanController@update')->name('jawaban.update');