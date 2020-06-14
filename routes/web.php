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
Route::get('/admin', 'AdminController@index');
Route::get('/padam', 'PadamController@index');
// Route::resource('kategori', 'KategoriController');
Route::get('/trafo', 'TrafoController@index');
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
Route::POST('/trafo/create', 'TrafoController@store');
// Route::POST('/padam/create', 'PadamController@store');
Route::POST('/padam/create', 'PadamController@store');

// Route::get('/padam/create', function () {
//     return view('admin.padam.create');
// });
Route::GET('/trafo/verifikasi/{id}', 'TrafoController@verifikasi');
Route::GET('/trafo/{id}', 'TrafoController@destroy');
