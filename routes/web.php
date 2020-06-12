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

Route::get('/','PageController@index')->name('inicio');

Route::get('nosotros','PageController@about')->name('nosotros');

Route::get('login','PageController@login')->name('login');

Route::get('producto','PageController@product')->name('detalle_producto');

Route::get('registro','PageController@register')->name('registro');

Route::get('servicios','PageController@services')->name('servicios');

Route::get('contacto','PageController@contact')->name('contacto');
