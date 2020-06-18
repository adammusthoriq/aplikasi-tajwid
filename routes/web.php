<?php

use Illuminate\Support\Facades\Route;

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


//untuk link ke index pada url pegawai
Route::get('/pegawai','PegawaiController@index');
//untuk link ke tambah data pada url pegawai
Route::get('/pegawai/tambah','PegawaiController@tambah');
//untuk proses input data
Route::post('/pegawai/store','PegawaiController@store');
// untuk proses update
Route::post('/pegawai/update','PegawaiController@update');
//untuk ke EDIT
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
//Untuk Menghapus data
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');