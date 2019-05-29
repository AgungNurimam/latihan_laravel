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


//Route CRUD Lihat Data
Route::get('pegawai','PegawaiController@index');

//Route CRUD Tambah Data
Route::get('pegawai/tambah','PegawaiController@tambah');

//Route CRUD Proses Simpan Data
Route::post('pegawai/store','PegawaiController@store');

//Route Edit Data
Route::get('/pegawai/edit/{id}','PegawaiController@edit');

//Route Update Data
Route::post('pegawai/update','PegawaiController@update');