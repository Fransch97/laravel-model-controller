<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index')->name('home');

Route::get('/films', 'PageController@films')->name('films');

Route::get('/chi_siamo', 'PageController@chi_siamo')->name('chi_siamo');

Route::get('/info', 'PageController@info')->name('info');
