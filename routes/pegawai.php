<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'App\Http\Controllers\pegawai\authController@index')->name('pegawai.login');
Route::post('/login', 'App\Http\Controllers\pegawai\authController@postLogin')->name('pegawai.login.post');

Route::get('/dashboard', 'App\Http\Controllers\pegawai\dashboardController@index')->name('pegawai.dashboard');


// data pegawai
Route::get('/pegawai/index', 'App\Http\Controllers\pegawai\pegawaiController@index')->name('pegawai.pegawai.index');

// data event
Route::get('/event/index', 'App\Http\Controllers\pegawai\eventController@index')->name('pegawai.event.index');


// data surat
Route::get('/surat/index', 'App\Http\Controllers\pegawai\suratController@index')->name('pegawai.surat.index');
