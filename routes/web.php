<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CarController;  //add car controller

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'CarController@index')->name('index');
Route::get('/create', 'CarController@create')->name('create');
Route::post('/store', 'CarController@create')->name('store');
Route::get('show/{car}', ' CarController@show')->name('show');
Route::get('edit/{car}', ' CarController@edit')->name('edit');
Route::put('edit/{car}', 'CarController@update')->name('update');
Route::delete('/{car}', 'CarController@destroy')->name('destroy');

