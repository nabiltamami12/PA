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
Route::group( ['middleware' => 'auth' ], function()
{

      /* <!-- Menu Material --> */

Route::get('/material', 'MaterialController@index');
Route::POST('/material/store', 'MaterialController@store');
Route::get('/material/edit/{id}', 'MaterialController@edit');
Route::POST('/material/update/{id}', 'MaterialController@update');
Route::get('/material/{id}', 'MaterialController@destroy');
   
    /* <!-- Menu Material --> */
    /* <!-- Menu Komponen --> */

Route::get('/komponen', 'KomponenController@index');
Route::POST('/komponen/store', 'KomponenController@store');
Route::get('/komponen/edit/{id}', 'KomponenController@edit');
Route::POST('/komponen/update/{id}', 'KomponenController@update');
Route::get('/komponen/{id}', 'KomponenController@destroy');

    /* <!-- Menu Komponen --> */
    /* <!-- Menu Trafo --> */
Route::get('/trafo', 'TrafoController@index');
Route::POST('/trafo/store', 'TrafoController@store')->name('store.trafo');
Route::get('/trafo/edit/{id}', 'TrafoController@edit');
Route::POST('/trafo/update/{id}', 'TrafoController@update');
Route::get('/trafo/{id}', 'TrafoController@destroy');
   /* <!-- Menu Trafo --> */
  /* <!-- Menu Petugas --> */
Route::get('/petugas', 'PetugasController@index');
Route::POST('/petugas/store', 'PetugasController@store');
Route::get('/petugas/edit/{id}', 'PetugasController@edit');
Route::POST('/petugas/update/{id}', 'PetugasController@update');
Route::get('/petugas/{id}', 'PetugasController@destroy');
  /* <!-- Menu Petugas --> */










  
Route::get('/admin', 'AdminController@index');
Route::get('/padam', 'JadwalPadamController@index');

Route::get('/laporan', 'LaporanController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/ceklis', function () {
    return view('ceklis');
});
Route::get('/darurat', function () {
    return view('darurat');
});
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

