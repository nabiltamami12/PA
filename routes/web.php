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
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
