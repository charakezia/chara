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

Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');

Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');

Route::get('/mahasiswa/formulirmahasiswa', 'MahasiswaController@formulirmahasiswa');

Route::post('/mahasiswa/simpanmahasiswa', 'MahasiswaController@simpanmahasiswa');

Route::get('/mahasiswa/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa');

Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa');

Route::get('/mahasiswa/hapusmahasiswa/{id}', 'MahasiswaController@hapusmahasiswa');

Route::get('/user', 'AuthController@user');

Route::get('/user/formulir_user', 'AuthController@formulir_user');

Route::post('/user/simpan_user', 'AuthController@simpan_user');

Route::get('/user/edituser/{id}', 'AuthController@edituser');

Route::put('/user/updateuser/{id}', 'AuthController@updateuser');

Route::get('/user/hapus_user/{id}', 'AuthController@hapus_user');

Route::get('/user/cari', 'UserController@pencarian');

Route::get('/login', 'AuthController@login');

Route::post('/user/ceklogin', 'AuthController@ceklogin');

Route::get('/logout', 'AuthController@logout');

Route::get('/userdsn', 'DosenController@userdsn');