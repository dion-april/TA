<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


//login
Route::get('/', 'App\Http\Controllers\AuthController@index')->name('login');

Route::post('/login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');

Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('register');

Route::post('/register', 'App\Http\Controllers\AuthController@prosesRegister')->name('register.save');

Route::get('forgot', 'App\Http\Controllers\AuthController@forgot')->name('forgot');

//admin
Route::get('/admin', 'App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');
//user
Route::get('/editor', 'App\Http\Controllers\AdminController@Dashboard')->name('user.dashboard');

Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index')->name('pegawai.index');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah')->name('pegawai.tambah');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update')->name('pegawai.update');

Route::post('/pegawai/save', 'App\Http\Controllers\PegawaiController@save')->name('pegawai.save');

Route::get('/pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit')->name(('pegawai.edit'));

Route::patch('/pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@update')->name(('pegawai.update'));

Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus')->name('pegawai.hapus');

//File

Route::get('/file', 'App\Http\Controllers\FileController@index')->name('file.index');

Route::get('/file/tambah','App\Http\Controllers\FileController@tambah')->name('file.tambah');

Route::post('/file/update','App\Http\Controllers\FileController@update')->name('file.update');

Route::post('/file/save', 'App\Http\Controllers\FileController@save')->name('file.save');

Route::get('/file/edit/{id}', 'App\Http\Controllers\FileController@edit')->name(('file.edit'));

Route::patch('/file/edit/{id}', 'App\Http\Controllers\FileController@update')->name(('file.update'));

Route::get('/file/hapus/{id}','App\Http\Controllers\FileController@hapus')->name('file.hapus');


//Surat

Route::get('/surat', 'App\Http\Controllers\SuratController@index')->name('surat.index');

Route::get('/surat/tambah','App\Http\Controllers\SuratController@tambah')->name('surat.tambah');

Route::post('/surat/update','App\Http\Controllers\SuratController@update')->name('surat.update');

Route::post('/surat/save', 'App\Http\Controllers\SuratController@save')->name('surat.save');

Route::get('/surat/edit/{id}', 'App\Http\Controllers\SuratController@edit')->name('surat.edit');

Route::patch('/surat/edit/{id}', 'App\Http\Controllers\SuratController@update')->name('surat.update');

Route::get('/surat/hapus/{id}','App\Http\Controllers\SuratController@hapus')->name('surat.hapus');

//Event

Route::get('/event', 'App\Http\Controllers\EventController@index')->name('event.index');

Route::get('/event/tambah','App\Http\Controllers\EventController@tambah')->name('event.tambah');

Route::post('/event/update','App\Http\Controllers\EventController@update')->name('event.update');

Route::post('/event/save', 'App\Http\Controllers\EventController@save')->name('event.save');

Route::get('/event/edit/{id}', 'App\Http\Controllers\EventController@edit')->name('event.edit');

Route::patch('/event/edit/{id}', 'App\Http\Controllers\EventController@update')->name('event.update');

Route::get('/event/hapus/{id}','App\Http\Controllers\EventController@hapus')->name('event.hapus');


//edit profil
Route::get('/profil/index', 'App\Http\Controllers\ProfilController@index')->name('profil.index');

Route::post('/profil/save', 'App\Http\Controllers\ProfilController@save')->name('profil.save');