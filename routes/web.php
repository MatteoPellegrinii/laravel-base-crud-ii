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

Route::get('/', 'Controll@home')->name('home');
Route::get('/about', 'Controll@about')->name('about');
Route::get('/contacts', 'Controll@contacts')->name('contacts');

// Route::get('/comics', 'ComicsControll@index')->name('comics.index');
// Route::post('/comics', 'ComicsControll@store')->name('comics.store');


Route::resource('/comics', 'ComicsControll');