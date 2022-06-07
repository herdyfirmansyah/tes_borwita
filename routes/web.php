<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AdminController;
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

Route::get('/', 'App\Http\Controllers\BooksController@index')->name('beranda');
Route::get('/search','App\Http\Controllers\BooksController@search')->name('caribuku') ;
Route::post('/login', 'App\Http\Controllers\BooksController@login')->name('login');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');