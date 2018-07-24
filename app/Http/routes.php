<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
          //(link,manggilApa())
Route::get('/', 'Pagesredir@toHomepage');

Route::get('about', ['as' => 'alias', 'uses' => 'Pagesredir@toAbout']); //as itu kasiname ke routing uses itu manggil apa
Route::get('evanz', 'Pagesredir@evan'); //jadi paggil method evan yg mengarahkan ke a sehingga ketika
//evanz dibuka redirect ke route a(halaman about)

Route::get('daftar_siswa', 'Siswa\SiswaController@index');

Route::group(['prefix' => 'admin'], function () {
  Route::get('siswa', ['as' => 'siswa', 'uses' => 'Admin\AdminController@index']);
  Route::get('siswa/getsiswa', ['as' => 'siswa/getsiswa', 'uses' => 'Admin\AdminController@getSiswa']);
  Route::get('siswa/fetchsiswa', ['as' => 'siswa/fetchsiswa', 'uses' => 'Admin\AdminController@fetchSiswa']);
  Route::get('siswa/deletesiswa', ['as' => 'siswa/deletesiswa', 'uses' => 'Admin\AdminController@deleteSiswa']);
  Route::post('siswa', ['as' => 'siswa', 'uses' => 'Admin\AdminController@store']);
});

  // Route::get('siswad', ['as' => 'siswad', 'uses' => 'Admin\AdminController@liveReload']);
  // Route::get('siswo', ['as' => 'siswo', 'uses' => 'Admin\AdminController@testing']);
