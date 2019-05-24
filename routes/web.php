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

Route::get('halo', function(){
    return 'Hello Avies! Halo semuanya, selamat belajar Laravel.';
});

Route::get('contents','ContentsController@index');
Route::get('contents/tambah','ContentsController@tambah');
Route::post('contents/store','ContentsController@store');
Route::get('contents/edit/{id}','ContentsController@edit');
Route::post('contents/update','ContentsController@update');
Route::get('contents/hapus/{id}','ContentsController@hapus');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
