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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('data-siswa','SiswaController@index');


Route::get('data-siswa/tambah','SiswaController@tambah');
Route::post('data-siswa/tambah','SiswaController@store');
Route::get('data-siswa/delete/{id}','SiswaController@delete');

Route::get('data-kelas','SiswaController@index');
