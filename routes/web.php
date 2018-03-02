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
Route::get('/test','TestController@index');
Route::get('/dashboard','DashboardController@index');

//Jabatan
Route::get('/jabatan','JabatanController@index');
Route::get('/jabatan/add','JabatanController@create');
Route::post('/jabatan/add','JabatanController@store');
Route::get('/jabatan/delete/{id}','JabatanController@destroy');
Route::get('/jabatan/edit/{id}','JabatanController@edit');
Route::post('/jabatan/edit/{id}','JabatanController@update');

//Karyawan
Route::get('/karyawan','KaryawanController@index'); 
Route::get('/karyawan/add','KaryawanController@create');
Route::post('/karyawan/add','KaryawanController@store');
Route::get('/karyawan/delete/{id}','KaryawanController@destroy');
Route::get('/karyawan/edit/{id}','KaryawanController@edit');
Route::post('/karyawan/edit/{id}','KaryawanController@update');

//Potongan
Route::get('/potongan','PotonganController@index');
Route::get('/potongan/add','PotonganController@create');
Route::post('potongan/add','PotonganController@store');
Route::get('/potongan/delete/{id}','PotonganController@destroy');
Route::get('/potongan/edit/{id}','PotonganController@edit');
Route::post('potongan/edit/{id}','PotonganController@update');
//Penggajian
Route::get('/penggajian','PenggajianController@index');

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@check');

Route::any('/','DashboardController@index');
Route::get('/logout','LogoutController@index');